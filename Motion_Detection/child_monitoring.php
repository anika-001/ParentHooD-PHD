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
  <title>Child Monitoring</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="..\.\layout\styles\layout.css" rel="stylesheet" type="text/css" media="all">
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
          
          <li><a href="..\.\logout.php" title="Log out"><i class="fas fa-edit"></i></a></li>
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
        <h1><a href="..\index.html">
            <img src="images\demo\gallery\Logo.svg" alt="" width="10" height="30">
            ParentHooD</a></h1>
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right">
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="..\index.html">Home</a></li>
          <li><a class="drop" href="#">Features</a>
            <ul>
              <li><a class="drop" href="#">Mental Health</a>
                <ul>
                  <li><a href="..\Mental_Health\art_craft.php">Art and Craft</a></li>
                  <li><a href="..\Mental_Health\shows.php">Shows to watch</a></li>
                  <li><a href="..\Mental_Health\games.php">Creative Games</a></li>
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
          
          <li><a href="..\.\logout.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>


<div class="wrapper bgded overlay" style="background-image:url('https://image.freepik.com/free-photo/father-daughter-holding-hand-hand-together_1150-4318.jpg');">
    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Child Monitoring</h3>
        <p> There is nothing more precious to a parent than a child, and nothing more important to our future than the safety of all our children.
          <br> - William J Clinton
        </p>
        <footer>
          <ul class="nospace inline pushright">
            <li><a class="btn" href="http://127.0.0.1:5000/">Live Stream</a></li>
          </ul>
        </footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>

    </body>
</html>