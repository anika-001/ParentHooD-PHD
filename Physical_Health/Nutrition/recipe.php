<?php
include '..\..\config.php';
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
    <title>Recipe</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Conpatible" content="IE-edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!--import the page's stylesheet-->
    <script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\..\layout\styles\layout.css" />

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
          <li><a href="..\..\index.html" title="Home"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
          <li><a href="..\..\pages\login.html" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="..\..\pages\signup.html" title="Sign Up"><i class="fas fa-edit"></i></a></li>
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
          <li class="active"><a href="..\welcome.php">Home</a></li>
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
                <li><a href="..\..\.\Academics\study_planner.php">Study Planner</a></li>
                <li><a href="..\..\.\Academics\study_material.php">Study Material</a></li>
              </ul>
           </li>
       
          <li><a href="..\..\logout.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
    </nav>
  <div class="wrapper bgded overlay" style="background-image:url('https://image.freepik.com/free-photo/healthy-food-children-eat-fruits-vegetables_169016-6443.jpg');">

    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Nutrition</h3>
        <footer>
    <div class="input-group col-6 ">
        <input type="text"  placeholder="Search Recipe" id="myInput" class="form-control" aria-label="Recipient's username"
            aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="search" >Search</button>
        </div>
    </div>
        </footer>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>
    <div id="content"></div>
    <script src=".\script.js" type="module"></script>
</body>
</html>


