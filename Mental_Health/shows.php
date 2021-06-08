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

  <title>Shows</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Conpatible" content="IE-edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\.\layout/styles\layout.css" />
  <link rel="stylesheet" href="..\.\Physical_Health/Excercise\layout.css" />

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
      
          <li><a href="..\.\logout.phpl" title="Log Out"><i class="fas fa-edit"></i></a></li>
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
     
          <li><a href="..\logout.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>
  
  <div class="wrapper bgded overlay" style="background-image:url('https://image.freepik.com/free-photo/we-love-watching-comedies-tv_329181-2714.jpg');">
    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Shows</h3>
        <p>Children do learn what they live. Then they grow up to live what they've learned.
          <br> - Dorothy Nolte
        </p>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>




  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="col-6">
        <h3 class="mb-3">Bedtime stories for kids</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/-gdcgnSrUvU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Three Little Pigs</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/RT-EwqgHqCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Little Red Riding Hood</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/sb5qTK8PYJE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Thumbelina Fairy Tales </h5>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/Sg0Bf2VAvlk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Jack and the Beanstalk</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TjpZj6GK3L4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Peter Pan</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/fiCMKLg3SxM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Gulliver's Travels</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item ">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/CLqGLE5zTIk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">The Little Red Hen </h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/X9BnQsQeadE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">The Ugly Duckling</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/DKgRHys6bfA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">The Lion and the Mouse</h5>
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
        <h3 class="mb-3">Ted Talk</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://embed.ted.com/talks/lang/en/laura_vanderkam_how_to_gain_control_of_your_free_time"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to gain control of your free time</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://embed.ted.com/talks/scott_dinsmore_how_to_find_work_you_love" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to find work you love</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://embed.ted.com/talks/anne_marie_slaughter_can_we_all_have_it_all" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Can we all "have it all"?</h5>
            </div>
          </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://embed.ted.com/talks/celeste_headlee_10_ways_to_have_a_better_conversation"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">10 ways to have a better conversation</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://embed.ted.com/talks/sherry_turkle_connected_but_alone" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">Connected, but alone?</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://embed.ted.com/talks/susan_david_the_gift_and_power_of_emotional_courage" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">The gift and power of emotional courage </h5>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item ">
        <div class="cards-wrapper">
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://embed.ted.com/talks/heather_lanier_good_and_bad_are_incomplete_stories_we_tell_ourselves" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">"Good" and "Bad" are incomplete stories we tell ourselves</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
          <iframe width="560" height="315" src="https://embed.ted.com/talks/susan_david_how_to_be_your_best_self_in_times_of_crisis" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">How to be your best self in times of crises</h5>
            </div>
          </div>
          <div class="card card-body h-200 ">
            <iframe width="560" height="315" src="https://embed.ted.com/talks/susan_david_the_gift_and_power_of_emotional_courage" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="card-body text-center">
              <h5 class="card-title">There is more to life than being happy</h5>
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