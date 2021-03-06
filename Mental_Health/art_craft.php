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

<html lang="en">
<head>

  <title>Art & Craft</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Conpatible" content="IE-edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="..\.\layout\styles\layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="..\.\Physical_Health\Excercise\layout.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
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
        <h1><a href="..\welcome.php">
            <img src="..\.\images\demo\gallery\Logo.svg" alt="" width="10" height="30">
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
         
          <li><a href="..\logout.php">Log out</a></li>
        </ul>
      </nav>
    </header>
  </div>
  
  <div class="wrapper bgded overlay" style="background-image:url('https://image.freepik.com/free-photo/people-making-paper-flowers-craft-art-work-handicraft_53876-22956.jpg');">
    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Art & Craft</h3>
        <p>The aim of art is to represent not the outward appearance of things, but their inward significance.
          <br> - Aristotle
        </p>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>




  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="col-6">
        <h3 class="mb-3">Craft for Kids</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/2hcLN7OXCF0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How To Make Easy Paper House For Kids</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/LaxF9qT8uTc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How To Make Easy Paper SNAKE For Kids </h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/AwP20kkXPKQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How To Make Paper Christmas Tree For Kids</h5>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/hp37lzUWmSs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How To Make Easy Paper Christmas Star For Kids</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/uloQcqedQL0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">DIY PIKACHU FINGER PUPPET</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/dgdleWSeFCE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to make paper umbrella </h5>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item ">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jC7L-LRaH14" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How To Make Easy Paper Flowers For Kids </h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/SryAgF1Oknw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How To Make Easy Paper Fish For Kids</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/b6D7Be-4CVE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How To Make Easy Paper Butterfly For Kids</h5>
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
        <h3 class="mb-3">Drawing for Kids</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UC7kgBPQZk8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw and color Marine submarine</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/N1vWEC_HpRE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw and color zebra</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7en_IvkzEJg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw and color Lion face</h5>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/nZlmWQQdxic" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw and color Peacock</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/p11Y5fyWHtw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw a Nice fish in bright colors</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/IAPyM9XgEEc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw a Nice giraffe </h5>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item ">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TT2erAJMhPo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw a train In beautiful colors |</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/31sNvfVQDbM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw a Homing pigeon </h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/F1ZnAFFdkoo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw Pokemon Pikachu easily</h5>
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
        <h3 class="mb-3">Drawing for Teen</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/WBcEuINB6tU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to Draw a Lion</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/xx6wBLkMCkI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to Draw a Kitten</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-kaUzCQv5yw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to draw a tiger</h5>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7whhcFfz51Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Painting</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/bHY2MWJiH_k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Sunset Scenery</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/jQSfv55n0O0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to Draw CLIFFS</h5>
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