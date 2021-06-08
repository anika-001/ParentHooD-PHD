<?php
include '..\.\config.php';
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

<html lang="">
<head>
  <title>Study Planner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="..\.\layout\styles\layout.css" rel="stylesheet" type="text/css" media="all">
    <script src="..\.\layout\scripts\jquery.min.js"></script>
  <script src="..\.\layout\scripts\jquery.backtotop.js"></script>
  <script src="..\.\layout\scripts\jquery.mobilemenu.js"></script>
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
          <li><a href="..\welcome.php" title="Home"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
         
          <li><a href="..\logout.php" title="Log out"><i class="fas fa-edit"></i></a></li>
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
        <h1><a href="..\welcome.php">
            <img src="..\images\demo\gallery\Logo.svg" alt="" width="10" height="30">
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
                  <li><a href="Mental_Health\games.php">Creative Games</a></li>
                </ul>
              </li>               
              <li><a class="drop" href="#">Physical Health</a>
                <ul>
                  <li><a href="..\Physical_Health\Excercise\exercise.php">Physical Activities</a></li>
                  <li><a href="..\pages\bmi.php">BMI Calculator</a></li>
                  <li><a href="..\Physical_Health\Nutrition\recipe.php">Nutrition</a></li>
                </ul>
              </li>
              <li><a href="..\Motion_Detection\child_monitoring.php">Child Monitoring</a></li>
            </ul>
          </li>
          <li><a href="#">Academics</a>
              <ul>
                <li><a href="..\Academics\study_planner.php">Study Planner</a></li>
                <li><a href="..\Academics\study_material.php">Study Material</a></li>
              </ul>
           </li>
       
          <li><a href="..\logout.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>

  <div class="wrapper bgded overlay" style="background-image:url('https://image.freepik.com/free-photo/medium-shot-girl-reading-book_23-2148892763.jpg');">
    <div id="pageint" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Select your class</h3>
        <footer>
          <div class="btn-group" role="group" aria-label="Basic example">
            <a class="btn" href="#class1">Class 1</a>
            <a class="btn" href="#class2">Class 2</a>
            <a class="btn" href="#class3">Class 3</a>
            <a class="btn" href="#class4">Class 4</a>
            <a class="btn" href="#class5">Class 5</a>
            <a class="btn" href="#class6">Class 6</a>
            <a class="btn" href="#class7">Class 7</a>
            <a class="btn" href="#class8">Class 8</a>
            <a class="btn" href="#class9">Class 9</a>
            <a class="btn" href="#class10">Class 10</a>
        </footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>

  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class1">
      <div class="row align-items-start">
        <h1>Class 1</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class2">
      <div class="row align-items-start">
        <h1>Class 2</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class3">
      <div class="row align-items-start">
        <h1>Class 3</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class4">
      <div class="row align-items-start">
        <h1>Class 4</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class5">
      <div class="row align-items-start">
        <h1>Class 5</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class6">
      <div class="row align-items-start">
        <h1>Class 6</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class7">
      <div class="row align-items-start">
        <h1>Class 7</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class8">
      <div class="row align-items-start">
        <h1>Class 8</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class9">
      <div class="row align-items-start">
        <h1>Class 9</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>
  <section id="introblocks" class="hoc clear">
    <div class="container" id = "class10">
      <div class="row align-items-start">
        <h1>Class 10</h1>
        <ul class="nospace group">
          <li class="one_third first">
            <article><a href="#"><i class="fas fa-smile"></i></a>
              <h6 class="heading underline">Study Material</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article class="active"><a href="#"><i class="fas fa-basketball-ball"></i></a>
              <h6 class="heading underline">Tutorials</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
          <li class="one_third">
            <article><a href="#"><i class="fas fa-book"></i></a>
              <h6 class="heading underline">Quiz</h6>
              <p><a class="btn" href="#">Go</a></p>
            </article>
          </li>
        </ul>
      </div>
    </div>
  </section>
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