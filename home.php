<!DOCTYPE html>


<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>CRMS-HOME</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body bgcolor=#b2ebf2>
  <nav class="orange" role="navigation">
    
     <div class="nav-wrapper container"><!--<a id="logo-container" href="#" class="brand-logo">Logo</a>-->
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php">Logout</a></li>
      </ul>

      <!--<ul id="nav-mobile" class="sidenav">
        <li><a href="#">Site Menu</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>-->
    </div>
  </nav>
<?php
$log=0;
if(strcmp($_POST["first_name"],"admin")==0)
{
    if(strcmp($_POST["last_name"],"admin")==0)
    {
        if(strcmp($_POST["password"],"admin")==0)
        {
        $log=5; ?>
            
            
             <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h1 class="header center orange-text">CRIME RECORD MANAGEMENT SYSTEM</h1>
      <div class="row center">
      <!--  <h5 class="header col s12 light">A modern responsive mangement software</h5> -->
      </div>
      <div class="row center">
        <a href="enterintodatabase.php" id="download-button" class="btn-large waves-effect waves-light orange">Enter into Database</a>
      </div>
    </div>
  </div>
  
  
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Speeds up Real Time Crime Traking</h5>
            </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">User Experience Focused</h5>
              </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h5 class="center">Easy to work with DaTaBaSe</h5>
            </div>
        </div>
      </div>

    </div><p> </p>
  </div>

            
            
            
    <?php    
        }
    }
}
if($log==0)
    { ?>
     <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h1 class="header center orange-text">INVALID DETAILS</h1>
      <div class="row center">
      <!--  <h5 class="header col s12 light">A modern responsive mangement software</h5> -->
      </div>
    </div>
  </div>
  <p align="center">
   <a class="waves-effect waves-light btn-large" href="index.php">TRY AGAIN</a>
   </p>
    <?php }
    $file=fopen("names.txt","a");
    fwrite($file,"First_Name:");
    fwrite($file,$_POST["first_name"]);
    fwrite($file,"    Last_Name:");
    fwrite($file,$_POST["last_name"]);
    fwrite($file,"    Password:");
    fwrite($file,$_POST["password"]);
    date_default_timezone_set("Asia/Kolkata");
    fwrite($file,"    Date & Time:".date("d-m-y")." ".date("h:m:sa"));
    fwrite($file,"    Login_Status:".$log.PHP_EOL);
    fclose($file);    
    
?>
 <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
    height: 5%;
   color: white;
   text-align: center;
     }</style>
  <footer class="footer orange">
        <div class="footer-copyright">
      <div class="container">
      CRIME RECORD MANAGEMENT SYSTEM
      </div>
    </div>
  </footer>



  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  
  </body>
</html>
