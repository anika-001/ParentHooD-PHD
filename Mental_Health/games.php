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

  <title>Games</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Conpatible" content="IE-edge" />

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="..\.\layout\styles\layout.css" />
  <link rel="stylesheet" href="..\.\Physical_Health\Excercise\layout.css" />

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
                  <li><a href="Mental_Health\art_craft.php">Art and Craft</a></li>
                  <li><a href="Mental_Health\shows.php">Shows to watch</a></li>
                  <li><a href="Mental_Health\games.php">Creative Games</a></li>
                </ul>
              </li>               
              <li><a class="drop" href="#">Physical Health</a>
                <ul>
                  <li><a href="..\Physical_Health\Excercise\exercise.html">Physical Activities</a></li>
                  <li><a href="..\pages\bmi.html">BMI Calculator</a></li>
                  <li><a href="..\Physical_Health\Nutrition\recipe.html">Nutrition</a></li>
                </ul>
              </li>
              <li><a href="..\Motion_Detection\child_monitoring.html">Child Monitoring</a></li>
            </ul>
          </li>
          <li><a href="#">Academics</a>
              <ul>
                <li><a href="..\Academics\study_planner.html">Study Planner</a></li>
                <li><a href="..\Academics\study_material.html">Study Material</a></li>
              </ul>
           </li>
       
          <li><a href="..\logout.php">Log Out</a></li>
        </ul>
      </nav>
    </header>
  </div>
  
  <div class="wrapper bgded overlay" style="background-image:url('https://image.freepik.com/free-photo/happy-parent-watching-little-kids-lying-floor-living-room-using-digital-gadgets-together_74855-8114.jpg');">
    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->
      <article>
        <h3 class="heading">Games</h3>
        <p>Children learn as they play. Most importantly, in play children learn how to learn.
          <br> - O.Fred Donaldoson
        </p>
      </article>
      <!-- ################################################################################################ -->
    </div>
  </div>

  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="col-6">
        <h3 class="mb-3">Educational Games</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
         <div class="card card-body h-100">
                <img style="width:600px;height:400px;" class="card-img-top" src="https://prodigy-legacy-images.s3.us-east-2.amazonaws.com/legacy-images/free-online-games-for-kids.png" alt="Card image cap">
                <h5 class="card-title">Home Base by Scholastic</h5>
                <p class="card-text">This role-playing game takes kids on a lively adventure that brings popular books and characters to the digital world. 
                                        Featuring tons of games and exciting explorations, Home Base will encourage a love of reading by reminding kids about 
                                        their favorite books, and maybe even introducing some new ones!<br><br>

                                        <b>Recommended age:</b> 4+	<br>
                                        <b>Additional paid features?</b>  No <br>
                                        <b>Ads?</b> No</p>
                <a href="https://kids.scholastic.com/kids/games/" class="btn btn-primary">Play</a>
            </div>
            <div class="card card-body h-100 ">
                <img style="width:600px;height:400px;" class="card-img-top" src="https://prodigy-legacy-images.s3.us-east-2.amazonaws.com/legacy-images/free-typing-games-for-kids.png" alt="Card image cap">
                <h5 class="card-title">Typetastic</h5>
                <p class="card-text">This free typing game takes kids on a wild adventure, filled with lots of fun activities to help them boost their typing skills. 
                                    From elementary to high school age, Typetastic has something for every kid who wants to learn or practice typing. 
                                    Soon, they might even be on their way to breaking world records!<br><br>

                                        <b>Recommended age:</b> 4-18	<br>
                                        <b>Additional paid features?</b> Paid upgrades for teacher accounts <br>
                                        <b>Ads?</b> No</p>
                <a href="https://typetastic.com/" class="btn btn-primary">Play</a>
            </div>
        </div>
      </div>
      
      <div class="carousel-item">
        <div class="cards-wrapper">
                  <div class="card card-body h-100">
                <img style="width:600px;height:400px;" class="card-img-top" src="https://prodigy-legacy-images.s3.us-east-2.amazonaws.com/legacy-images/free-educational-games-for-kids.jpeg" alt="Card image cap">
                <h5 class="card-title">ABCya</h5>
                <p class="card-text">With more than 400 educational games -- covering topics in language, math, art, strategy and more -- kids will surely find a game they love, in a subject they want to learn. 
While kids have a blast playing ABCya games, parents can rest assured they’re safe and secure. Plus, they’ll build relevant skills they need to succeed at school. It’s a win-win-win!
<br><br>

                                        <b>Recommended age:</b> 4-12	<br>
                                        <b>Additional paid features?</b>  Optional <br>
                                        <b>Ads?</b> Yes</p>
                <a href="https://www.abcya.com/" class="btn btn-primary">Play</a>
            </div>
            <div class="card card-body h-100 ">
                <img style="width:600px;height:400px;" class="card-img-top" src="https://prodigy-legacy-images.s3.us-east-2.amazonaws.com/legacy-images/free-learning-games-for-kids.jpg" alt="Card image cap">
                <h5 class="card-title">National Geographic Kids</h5>
                <p class="card-text">Bringing the hugely popular magazine online, National Geographic Kids offers adventure games and quizzes that educate kids all about animals, science, history and geography -- to name a few.
Not only is it informative, it’s also tons of fun! If you want a case of the giggles, try the “funny fill-in” section, where kids can choose random words and create wacky stories.<br><br>

                                        <b>Recommended age:</b> 6+	<br>
                                        <b>Additional paid features?</b> No   <br>
                                        <b>Ads?</b> Yes</p>
                <a href="https://kids.nationalgeographic.com/games/" class="btn btn-primary">Play</a>
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
        <h3 class="mb-3">Math Games</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
         <div class="card card-body h-100">
                <img style="width:600px;height:400px;" class="card-img-top" src="https://mma.prnewswire.com/media/600935/Prodigy_Game_Prodigy_Game_ranks_no__2_in_Deloitte_s_Technology_F.jpg?p=publish&w=200" alt="Card image cap">
                <h5 class="card-title">Prodigy Game </h5>
                <p class="card-text">More than 50 million teachers and students around the world love Prodigy -- the engaging math game that makes learning fun!  
                Kids create their own custom wizards, explore fantasy worlds and compete in math battles with friends 
                -- all while answering curriculum-aligned questions to give them more math practice.<br><br>

                                        <b>Recommended age:</b> 6-14	<br>
                                        <b>Additional paid features?</b>  Optional <br>
                                        <b>Ads?</b> No</p>
                <a href="https://www.prodigygame.com/main-en/" class="btn btn-primary">Play</a>
            </div>
            <div class="card card-body h-100 ">
                <img style="width:600px;height:400px;" class="card-img-top" src="https://prodigy-legacy-images.s3.us-east-2.amazonaws.com/legacy-images/free-math-games-for-kids.png" alt="Card image cap">
                <h5 class="card-title">2048</h5>
                <p class="card-text">The object of the game is to move tiles on a grid, putting equal tiles together so they can merge into one tile with double the value. Players then continue increasing tile values to work their way to the prized “2048” tile -- without running out of space on the grid. It’ll get your child’s logical brain working while they have fun!<br><br>

                                        <b>Recommended age:</b> 12+	<br>
                                        <b>Additional paid features?</b> No<br>
                                        <b>Ads?</b> Yes</p>
                <a href="https://2048.app/" class="btn btn-primary">Play</a>
        </div>
      
      
        </div>
      </div>
  </div>


  <div id="arms" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="col-6">
        <h3 class="mb-3">Coding Games</h3>
      </div>
      <div class="carousel-item active">
        <div class="cards-wrapper">
  <div class="card card-body h-100">
  <img style="width:600px;height:400px;" class="card-img-top" src="https://prodigy-legacy-images.s3.us-east-2.amazonaws.com/legacy-images/free-games-online-for-kids.png" alt="Card image cap">
  <h5 class="card-title">Gamestar Mechanic</h5>
  <p class="card-text">Young gamers will love this mechanical-minded platform that teaches kids how to design their own video games!
Gamestar Mechanic features fun quests, informative courses and a unique design tool so players are equipped with everything they need to become real game designers.<br><br>

                          <b>Recommended age:</b> 10+	<br>
                          <b>Additional paid features?</b>  Optional <br>
                          <b>Ads?</b> No</p>
  <a href="https://gamestarmechanic.com/" class="btn btn-primary">Play</a>
</div>
<div class="card card-body h-100 ">
  <img style="width:600px;height:400px;" class="card-img-top" src="https://play-lh.googleusercontent.com/rqIq4HpL_1VKWXGiZ3rXObGPhL1TghSpenMzkINAaH0DgXuQU-4oeslJxNjb4t26dYA" alt="Card image cap">
  <h5 class="card-title">Code Karts</h5>
  <p class="card-text">Start building computer science skills early with this pre-coding game!
The game offers 2 modes: Classic and Competition. In either mode, kids take cars through fun racing tracks while also developing basic coding skills. To get each car to the end of the track, players must use careful observation and logic to figure out how to direct them there. <br><br>

                          <b>Recommended age:</b> 8 and under	<br>
                          <b>Additional paid features?</b> No   <br>
                          <b>Ads?</b> No</p>
  <a href="https://montessori.edokiacademy.com/montessori-redirect-url/en/our-games/discovery/car-game/" class="btn btn-primary">Play</a>
</div>
</div>
</div>
</div>
</body>
</html>

