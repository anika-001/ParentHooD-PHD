<?php
include 'config.php';

?>
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html>-->




<!DOCTYPE html>

<html lang="">
<head>
  <title>ParentHooD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href=".\layout\styles\layout.css" rel="stylesheet" type="text/css" media="all">
  
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
        <h1><a href="welcome.php">
            <img src="images\demo\gallery\Logo.svg" alt="" width="10" height="30">
            ParentHooD</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right">
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="..\welcome.php">Home</a></li>
          <li><a class="drop" href="#">Features</a>
            <ul>
              <li><a class="drop" href="#">Mental Health</a>
                <ul>
                  <li><a href="Mental_Health\art_craft.php">Art and Craft</a></li>
                  <li><a href="Mental_Health\shows.php">Shows to watch</a></li>
                  <li><a href="Mental_Health\games.phpl">Creative Games</a></li>
                </ul>
              </li>              
              <li><a class="drop" href="#">Physical Health</a>
                <ul>
                  <li><a href="Physical_Health\Excercise\exercise.php">Physical Activities</a></li>
                  <li><a href="pages\bmi.php">BMI Calculator</a></li>
                  <li><a href="pages\recipe.php">Nutrition</a></li>
                </ul>
              </li>
              <li><a href="Motion_Detection\child_monitoring.php">Child Monitoring</a></li>
            </ul>
          </li>
          <li><a href="#">Academics</a>
              <ul>
                <li><a href="Academics\study_planner.php">Study Planner</a></li>
                <li><a href="Academics\study_material.php">Study Material</a></li>
              </ul>
           </li>
         
          <li><a href="login.php">Log In/Sign Up</a></li>
         
        </ul>
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Smart Parenting</h3>
        <p>At the end of the day, the most overwhelming key to a child's success is the positive involvement of parents
          <br> - Jane D. Hull
        </p>
        <footer>
          <ul class="nospace inline pushright">
            
        <li><div>Welcome!!</div></li>
          </ul>
        </footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <section id="introblocks" class="hoc container clear">
      <!-- ################################################################################################ -->
      <ul class="nospace group">
        <li class="one_third first">
          <article><a href="#"><i class="fas fa-smile"></i></a>
            <h6 class="heading underline"> Mental Health</h6>
            <p>The science of child development shows that the foundation for sound mental health is built early in life
              shapes the architecture of the developing brain.</p>
          </article>
        </li>
        <li class="one_third">
          <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
            <h6 class="heading underline">Physical Health</h6>
            <p>A person who has good physical health is likely to have bodily functions and processes working at their
              peak.</p>
          </article>
        </li>
        <li class="one_third">
          <article><a href="#"><i class="fas fa-book"></i></a>
            <h6 class="heading underline">Academics</h6>
            <p>Find about some of the most amazing ways parents can put their kids on track to be successful students.
            </p>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <main class="hoc container clear">
      <!-- main body -->
      <!-- ################################################################################################ -->
      <div class="center btmspace-80">
        <h6 class="heading underline font-x2">Features</h6>
      </div>
      <ul class="nospace group overview btmspace-80">
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-utensils"></i></a>
              <h6 class="heading">Nutrition </h6>
            </div>
            <p>Proper nutrition gives children the energy to live life to the full, protects against
              malnourishment, maintains the immune system, prevents obesity and reduces the risk of chronic disease.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-bicycle"></i></a>
              <h6 class="heading">Physical Health</h6>
            </div>
            <p>Regular physical activity can help children strengthen bones, muscles, hearts and lungs. improves
              children's coordination, balance,
              posture and flexibility.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-weight"></i></a>
              <h6 class="heading">BMI Calculator</h6>
            </div>
            <p>A child's BMI is a valuable screening tool to find out if a child is at a healthy weight.
              Knowing the child's BMI can help you determine any health risks your child may face if it's outside of the
              healthy
              range.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-graduation-cap"></i></a>
              <h6 class="heading">Academics</h6>
            </div>
            <p>Students who do well in school are better able to make the transition into adulthood and to achieve
              occupational and economic success.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-puzzle-piece"></i></a>
              <h6 class="heading">Creative Skills</h6>
            </div>
            <p>The ability to be creative, to create something from personal feelings and experiences, can reflect and
              nurture children's emotional health.</p>
          </article>
        </li>
        <li class="one_third">
          <article>
            <div class="clear"><a href="#"><i class="fas fa-video"></i></a>
              <h6 class="heading">Motion Detection</h6>
            </div>
            <p>Parents are responsible to safeguard their children.Motion detection will help the parents to monitor
              every moment of their child.</p>
          </article>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="#">See more</a></footer>
      <!-- ################################################################################################ -->
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <section class="hoc container clear">
      <!-- ################################################################################################ -->
      <div class="center btmspace-80">
        <h6 class="heading underline font-x2">Kids Entertainment</h6>
      </div>
      <ul class="nospace group">
        <li class="one_quarter first">
          <figure class="fixwidth"><a class="imgover btmspace-30" href="#"><img src="images/demo/games.jpg" alt=""></a>
            <figcaption class="bold uppercase center">Games</figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure class="fixwidth"><a class="imgover btmspace-30" href="#"><img src="images/demo/art.jpg" alt=""></a>
            <figcaption class="bold uppercase center">Art & Craft</figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure class="fixwidth"><a class="imgover btmspace-30" href="#"><img src="images/demo/audio_books.jpg"
                alt=""></a>
            <figcaption class="bold uppercase center">Audio Book</figcaption>
          </figure>
        </li>
        <li class="one_quarter">
          <figure class="fixwidth"><a class="imgover btmspace-30" href="#"><img src="images/demo/shows.jpg" alt=""></a>
            <figcaption class="bold uppercase center">Watch Shows</figcaption>
          </figure>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
    <section class="hoc container clear">
      <!-- ################################################################################################ -->
      <div class="center btmspace-80">
        <h6 class="heading underline font-x2">Comments</h6>
      </div>
      <ul id="testimonials" class="nospace group btmspace-80">
        <li class="one_half first">
          <blockquote>This website has helped a lot for our kids development. Your commitment towards our child's improvement is really commendable.
          It is nice forum to reflect upon our child's progress and overall development.
          </blockquote>
          <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
            <figcaption>
              <h6 class="heading">Susan</h6>
              <em>Entrepreneur</em>
            </figcaption>
          </figure>
        </li>
        <li class="one_half">
          <blockquote>Thankyou for offering such a great platform with so many activities and a great study material.Riya likes it a lot and so do we.
          </blockquote>
          <figure class="clear"><img class="circle" src="images/demo/60x60.png" alt="">
            <figcaption>
              <h6 class="heading">Lata</h6>
              <em>Commercial Manager</em>
            </figcaption>
          </figure>
        </li>
      </ul>
      <footer class="center"><a class="btn" href="#">Comment</a></footer>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row3">
    <section class="hoc container clear">
      <!-- ################################################################################################ -->
      <div class="center btmspace-80">
        <h6 class="heading underline font-x2">Blog</h6>
      </div>
      <ul id="latest" class="nospace group">
        <li class="one_third first ">
          <article>
            <figure><a class="imgover" href="#"><img src="https://amotherfarfromhome.com/wp-content/uploads/2013/03/teaching-kids-to-clean-young-feature.webp" alt=""></a></figure>
            <div class="excerpt">
              <h6 class="heading">The Importance Of Teaching Kids To Clean While They’re Young</h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Rachel Norman</a></li>
                <li><i class="far fa-clock rgtspace-5"></i>
                  <time datetime="2045-04-06T08:15+00:00">06 Apr 2020</time>
                </li>
              </ul>
              <p>97% mothers polled said it’s important for them that their teenagers develop good household cleaning skills, but of those 70% said they just find it easier to clean themselves since their teenagers’ efforts are sub par, and 37% even said their teenagers do such a bad job they just prefer to go it alone[<a href="#">&hellip;</a>]</p>
              <footer><a class="btn" href="https://amotherfarfromhome.com/cleaning-from-toddlers-to-teenagers/">Read More</a></footer>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article>
            <figure><a class="imgover" href="#"><img src="https://happyyouhappyfamily.com/wp-content/uploads/2017/08/after-school-routine-feature.jpg" alt=""></a></figure>
            <div class="excerpt">
              <h6 class="heading">I wish all moms would read this</h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Becky Mansfield</a></li>
                <li><i class="far fa-clock rgtspace-5"></i>
                  <time datetime="2045-04-05T08:15+00:00">31 Mar 2021</time>
                </li>
              </ul>
              <p>“You are enough.  I think at times all moms get this insecure feeling of “I’m not doing enough.”

As a working mom, it’s the hardest when my kids grab onto me as I’m walking out the door and say, “Mommy please stay home!” I don’t want to ignore that, so I always explain to them that being with them is my favorite thing in the world. [<a href="#">&hellip;</a>]</p>
              <footer><a class="btn" href="https://www.yourmodernfamily.com/wish-moms-read/">Read More</a></footer>
            </div>
          </article>
        </li>
        <li class="one_third">
          <article>
            <figure><a class="imgover" href="#"><img src="https://happyyouhappyfamily.com/wp-content/uploads/2020/05/spending-time-with-kids-feature.webp" alt=""></a></figure>
            <div class="excerpt">
              <h6 class="heading">The Best 10-Minute Fix to Spending Quality Time With Kids</h6>
              <ul class="nospace meta">
                <li><i class="fas fa-user rgtspace-5"></i> <a href="#">Kelly Holmes</a></li>
                <li><i class="far fa-clock rgtspace-5"></i>
                  <time datetime="2045-04-04T08:15+00:00">04 Apr 2020</time>
                </li>
              </ul>
              <p>We’re spending tons more time with our kids, but it’s not like our responsibilities as parents are decreasing to balance that out. If anything, our plates are fuller than they’ve ever been.

And so when one of my kids comes up to me and asks me to play pretend or read them a book or join a quick card game, my knee-jerk reaction is typically some variation of this: “Sorry honey, I don’t have time.” [<a href="#">&hellip;</a>]</p>
              <footer><a class="btn" href="https://happyyouhappyfamily.com/spending-time-with-kids/">Read More</a></footer>
            </div>
          </article>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
   <!-- <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>-->
  <!-- JAVASCRIPTS -->
  <script type="text/javascript">
    (function(d, m){
        var kommunicateSettings = 
            {"appId":"3c3193c66f9389bf3c3a0d3583e0654bf","popupWidget":true,"automaticChatOpenOnNavigation":true};
        var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
        s.src = "https://widget.kommunicate.io/v2/kommunicate.app";
        var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
        window.kommunicate = m; m._globals = kommunicateSettings;
    })(document, window.kommunicate || {});
/* NOTE : Use web server to view HTML files as real-time update will not work if you directly open the HTML file in the browser. */
</script>
  <script src="layout/scripts/jquery.min.js"></script>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyD95mJ8u55zn8owB_YAjNQ65xskjLyxgOE",
    authDomain: "phd-parenthood.firebaseapp.com",
    projectId: "phd-parenthood",
    storageBucket: "phd-parenthood.appspot.com",
    messagingSenderId: "821214019448",
    appId: "1:821214019448:web:16e56795f622ba3381128d"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
<script src="./myfunc.js"></script>
</body>

</html>