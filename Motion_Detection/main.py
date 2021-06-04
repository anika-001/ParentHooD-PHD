






from flask import Flask, render_template, Response
import cv2



app = Flask(__name__)

camera = cv2.VideoCapture(0)  
# use 0 for web camera
# for cctv camera use rtsp://username:password@ip_address:554/user=username_password='password'_channel=channel_number_stream=0.sdp' instead of camera
# for local webcam use cv2.VideoCapture(0)

def gen_frames():  # generate frame by frame from camera
    first_frame=None
    while True:
        # Capture frame-by-frame
        success, frame = camera.read()  # read the camera frame

        # Status at the beginning of the recording is zero 
        # as the object is not visible
        status=0

        # Convert the frame color to gray scale
        gray=cv2.cvtColor(frame,cv2.COLOR_BGR2GRAY)

        # Convert the gray scale frame to GaussianBlur
        gray=cv2.GaussianBlur(gray,(21,21),0)

        # This is used to store the first image/frame of the video
        if first_frame is None:
            first_frame=gray
            continue

        # Calculates the difference between the first frame and other frames
        delta_frame=cv2.absdiff(first_frame,gray)

        # Provides a threshold value, such that it will convert the difference 
        # value with less than 30 to black.If the difference is greater 
        # than 30 it will convert those pixels to white.
        thresh_frame=cv2.threshold(delta_frame, 30, 255, cv2.THRESH_BINARY)[1]
        thresh_frame=cv2.dilate(thresh_frame, None, iterations=2)

        # Define the contour area. Basically, add the borders
        cnts, _ = cv2.findContours(thresh_frame.copy(), cv2.RETR_EXTERNAL,
                                cv2.CHAIN_APPROX_SIMPLE)

        # Remove noises and shadows.
        # Basically, it will keep only that part white, 
        # which has area greater than 1000 pixels.
        for contour in cnts:
            if cv2.contourArea(contour) < 10000:
                continue

            # Change in status when the object is being detected
            status=1

        # Creates a rectangular box around the object in the frame
            (x, y, w, h)=cv2.boundingRect(contour)
            cv2.rectangle(frame, (x, y), (x+w, y+h), (0,255,0), 3)
        if not success:
            break
        else:
            ret, buffer = cv2.imencode('.jpg', frame)
            frame = buffer.tobytes()
            yield (b'--frame\r\n'
                   b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')  # concat frame one by one and show result




@app.route('/video_feed')
def video_feed():
    #Video streaming route. Put this in the src attribute of an img tag
    return Response(gen_frames(), mimetype='multipart/x-mixed-replace; boundary=frame')


@app.route('/')
def index():
    """Video streaming home page."""
    return render_template('md.html')


if __name__ == '__main__':
    app.run(debug=True)