<?php
include '..\..\.\config.php';
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}
//echo $_SESSION["user_id"];
$id=$_SESSION["user_id"];
$check_name = mysqli_query($conn, "SELECT full_name FROM users WHERE id='$id'");
$row = mysqli_fetch_assoc($check_name);
$_SESSION["user_name"] = $row['full_name'];
//echo $_SESSION["user_name"];
?>
<!DOCTYPE html>

<html lang="en">
<head>
<!DOCTYPE html>

<html lang="en">
<head>

  <title>Physical Activites</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Conpatible" content="IE-edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\..\.\layout\styles\layout.css" />
  <link rel="stylesheet" href="..\..\.\Physical_Health\Excercise\layout.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>


<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left">
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
          <li><i class="far fa-envelope rgtspace-5"></i> parenthood@gmail.com</li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
      <div class="fl_right">
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><a href="..\index.html" title="Home"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
          <li><a href="..\logout.php" title="Log Out"><i class="fas fa-edit"></i></a></li>
          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
        </ul>
        <!-- ################################################################################################ -->
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left">

        <!-- ################################################################################################ -->
        <h1><a href="..\..\welcome.php">
            <img src="images\demo\gallery\Logo.svg" alt="" width="10" height="30">
            ParentHooD</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right">
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="..\..\welcome.php">Home</a></li>
          <li><a class="drop" href="#">Features</a>
            <ul>
            <li><a class="drop" href="#">Mental Health</a>
                <ul>
                  <li><a href="..\..\Mental_Health\art_craft.php">Art and Craft</a></li>
                  <li><a href="..\..\Mental_Health\shows.php">Shows to watch</a></li>
                  <li><a href="..\..\Mental_Health\games.php">Creative Games</a></li>
                </ul>
              </li>               
              <li><a class="drop" href="#">Physical Health</a>
                <ul>
                  <li><a href="..\..\Physical_Health\Excercise\exercise.php">Physical Activities</a></li>
                  <li><a href="..\..\pages\bmi.php">BMI Calculator</a></li>
                  <li><a href="..\..\Physical_Health\Nutrition\recipe.php">Nutrition</a></li>
                </ul>
              </li>
              <li><a href="..\..\Motion_Detection\child_monitoring.php">Child Monitoring</a></li>
            </ul>
          </li>
          <li><a href="#">Academics</a>
              <ul>
                <li><a href="..\..\Academics\study_planner.php">Study Planner</a></li>
                <li><a href="..\..\Academics\study_material.php">Study Material</a></li>
              </ul>
           </li>
       
          <li><a href="..\..\logout.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>
  
  <div class="wrapper bgded overlay" style="background-image:url('https://image.freepik.com/free-photo/kids-children-running-meadow-summer-s-sunlight_155003-13021.jpg');">
    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Physical Activites</h3>
        <p>At the end of the day, the most overwhelming key to a child's success is the positive involvement of parents
          <br> - Jane D. Hull
        </p>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>




  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="col-6">
        <h3 class="mb-3">Morning Exercise</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe  width="560" height="315"  src="https://www.youtube.com/embed/gIU1vXOH2ts" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">12 Min Kids Exercise: Morning Fun</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe  width="560" height="315"  src="https://www.youtube.com/embed/skSbg1IGup8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Morning Kids Workout: Wake Up Exercises</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe  width="560" height="315"  src="https://www.youtube.com/embed/A0dkwlrC6ok" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Kids Morning Workout - Kids Daily Exercises</h5>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe  width="560" height="315"  src="https://www.youtube.com/embed/V1p4BKXusZ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Top 10 Kids Morning Exercises</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe  width="560" height="315"  src="https://www.youtube.com/embed/Vc5qdzxAeE0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Quick Morning Workout For Kids To Get Active and Lean</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe  width="560" height="315"  src="https://www.youtube.com/embed/8ibvs-uTTUM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">BEST KIDS MORNING WORKOUT: Full Body Exercises</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item ">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe  width="560" height="315"  src="https://www.youtube.com/embed/m9J-q1DN3Ag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Kids Warm Up Exercises In The Morning</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
          <iframe  width="560" height="315"  src="https://www.youtube.com/embed/J8_k1cd_FOY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">MORNING KIDS WORKOUT - DAILY WAKE UP EXERCISES</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe  width="560" height="315"  src="https://www.youtube.com/embed/5CRVd3A7nCQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">DAILY MORNING WORKOUT FOR KIDS</h5>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div id="arms" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="col-6">
        <h3 class="mb-3">Arm Exercise</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/gPCIGFGSWl4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Best Kids Exercise For Strong Arms and a Straight Back</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/H0y_I4oJR5Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">7 Days Challenge Get Stronger Arms - Kids Exercise</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/kfs9BHkApLo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Kids Workout For Stronger Arms and Chest</h5>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/9yv8MgfphzE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Kids Arms + Chest + Abdomen Workout</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/oYBKt0GfH5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Arms + Chest: Kids Exercises at Home</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/kzbxB8htDHY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Kids Exercises For Arms - Strong Upper Body At Home</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item ">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Jaz3t7CmGSE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Easy Kids Exercises For Arms + Upper Body</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/pfMpP8KI0GY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">7 KIDS EXERCISES FOR LEGS AND ARMS</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/eGShmCkwpUM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">3-DAY ARM + CHEST EXERCISES FOR KIDS</h5>
            </div>
          </div>
        </div>
      </div>
    
    </div>
    <a class="carousel-control-prev" href="#arms" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#arms" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div id="legs" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="col-6">
        <h3 class="mb-3">Leg Exercise</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8qRAublpIXQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">11 Fun Kids Exercises For Legs - Children Workout At Home</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/pizI7eNVSg8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Legs + Arms Kids Exercise At Home</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/zMv2oo_CnhY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Kids Workout At Home: Belly and Legs Exercises</h5>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://youtu.be/8A-3yHc7nPw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">7 Exercises For Kids: Legs and Lower Body</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ol7vF6dJsh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Belly + Legs Kids Workout At Home</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/EM1-urtmV_k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Kids Workout: 8 Best Legs Exercises At Home</h5>
            </div>
          </div>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#legs" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#legs" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"fcb08ba8f0778cce70e9a89f25d217ff","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
</body>
</html>