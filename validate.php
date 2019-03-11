<!DOCTYPE html>
<?php
include("connectdatabase.php");
$ok=0;
$error="check";

if($_POST['value']=="petitioner")
{   
    $pid=$_POST['petitioner_id'];
    $fn=$_POST['first_name'];
    $mn=$_POST['middle_name'];
    $ln=$_POST['last_name'];
    $gender=$_POST['gender'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $contact=$_POST['contact'];
    $query1="INSERT INTO `petitioner` (`PETITIONER_ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `GENDER`, `STREET`, `CITY`) VALUES ('$pid', '$fn', '$mn', '$ln', '$gender', '$street', '$city')";
    $query2="INSERT INTO `petitioner_contact` (`PETITIONER_ID`, `CONTACT`) VALUES ('$pid', '$contact')";
    try{
    $result1= mysqli_query($connection,$query1);
        try
        {
            $result2= mysqli_query($connection,$query2);
            $ok=5;
        }
        catch(Exception $errormsg2){$error=$error." 2 ".$errormsg2;}
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }
}
else if($_POST['value']=="victim")
{
    $vid=$_POST['victim_id'];
    $fn=$_POST['first_name'];
    $mn=$_POST['middle_name'];
    $ln=$_POST['last_name'];
    $gender=$_POST['gender'];
    $dob=$_POST['dob'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $condition=$_POST['condition'];
    $contact=$_POST['contact'];
    $query1="INSERT INTO `victim` (`VICTIM_ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `GENDER`, `DOB`, `STREET`, `CITY`, `CONDITION`) VALUES ('$vid', '$fn', '$mn', '$ln', '$gender', '$dob', '$street', '$city', '$condition')";
    $query2="INSERT INTO `victim_contact` (`VICTIM_ID`, `CONTACT`) VALUES ('$vid', '$contact')";
    try{
    $result1= mysqli_query($connection,$query1);
        try
        {
            $result2= mysqli_query($connection,$query2);
            $ok=5;
        }
        catch(Exception $errormsg2){$error=$error." 2 ".$errormsg2;}
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }
}
else if($_POST['value']=="officer")
{
    $ioid=$_POST['io_id'];
    $fn=$_POST['first_name'];
    $mn=$_POST['middle_name'];
    $ln=$_POST['last_name'];
    $doh=$_POST['date_of_hire'];
    $sal=$_POST['salary'];
    $rank=$_POST['rank'];
    $contact=$_POST['contact'];
    $query1="INSERT INTO `officer` (`IO_ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `DATE_OF_HIRE`, `SALARY`, `RANK`) VALUES ('$ioid', '$fn', '$mn', '$ln', '$doh', '$sal', '$rank')";
    $query2="INSERT INTO `officer_contact` (`IO_ID`, `CONTACT`) VALUES ('$ioid', '$contact')";
    try{
    $result1= mysqli_query($connection,$query1);
        try
        {
            $result2= mysqli_query($connection,$query2);
            $ok=5;
        }
        catch(Exception $errormsg2){$error=$error." 2 ".$errormsg2;}
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }
}
else if($_POST['value']=="lock_up")
{
    $lid=$_POST['lock_up_id'];
    $type=$_POST['type'];
    $query="INSERT INTO `lock_up` (`LOCK_UP_ID`, `TYPE`) VALUES ('$lid', '$type')";
    try{
    $result= mysqli_query($connection,$query);
    $ok=5;
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }   
}
else if($_POST['value']=="accused")
{
    $aid=$_POST['accused_id'];
    $lid=$_POST['lock_up_id'];
    $fn=$_POST['first_name'];
    $mn=$_POST['middle_name'];
    $ln=$_POST['last_name'];
    $gen=$_POST['gender'];
    $dob=$_POST['dob'];
    $street=$_POST['street'];
    $city=$_POST['city'];
    $status=$_POST['status'];
    $query="INSERT INTO `accused` (`ACCUSED_ID`, `LOCK_UP_ID`, `FIRST_NAME`, `MIDDLE_NAME`, `LAST_NAME`, `GENDER`, `DOB`, `STREET`, `CITY`, `STATUS`) VALUES ('$aid', '$lid', '$fn', '$mn', '$ln', '$gen', '$dob', '$street', '$city', '$status')";
    try{
    $result= mysqli_query($connection,$query);
    $ok=5;
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }
}
else if($_POST['value']=="fir")
{
    $fno=$_POST['fir_number'];
    $vid=$_POST['victim_id'];
    $aid=$_POST['accused_id'];
    $pid=$_POST['petitioner_id'];
    $as=$_POST['accused_status'];
    $pin=$_POST['place_incident'];
    $tin=$_POST['time_incident'];
    $din=$_POST['date_incident'];
    $dfi=$_POST['date_file'];
    $query="INSERT INTO `fir` (`FIR_NUMBER`, `VICTIM_ID`, `ACCUSED_ID`, `PETITIONER_ID`, `ACCUSED_STATUS`, `PLACE_INCIDENT`, `TIME_INCIDENT`, `DATE_INCIDENT`, `DATE_FILE`) VALUES ('$fno', '$vid', '$aid', '$pid', '$as', '$pin', '$tin', '$din', '$dfi')";
    try{
    $result= mysqli_query($connection,$query);
    $ok=5;
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }
}
else if($_POST['value']=="cases")
{
    $cid=$_POST['case_id'];
    $fno=$_POST['fir_number'];
    $ioid=$_POST['io_id'];
    $query="INSERT INTO `cases` (`CASE_ID`, `FIR_NUMBER`, `IO_ID`) VALUES ('$cid', '$fno', '$ioid')";
    try{
    $result= mysqli_query($connection,$query);
    $ok=5;
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }
}
else if($_POST['value']=="section_of_law")
{
    $slid=$_POST['sol_id'];
    $sow=$_POST['section_of_law'];
    $sen=$_POST['sentence'];
    $det=$_POST['detail'];
    $query="INSERT INTO `section_of_law` (`SOL_ID`, `SECTION_OF_LAW`, `SENTENCE`, `DETAIL`) VALUES ('$slid', '$sow', '$sen', '$det')";
    try{
    $result= mysqli_query($connection,$query);
    $ok=5;
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }
}
else if($_POST['value']=="investigation")
{
    $iid=$_POST['investigate_id'];
    $ioid=$_POST['io_id'];
    $cid=$_POST['case_id'];
    $oname=$_POST['officer_name'];
    $dstart=$_POST['date_start'];
    $dend=$_POST['date_end'];
    $query="INSERT INTO `investigate` (`INVESTIGATE_ID`, `IO_ID`, `CASE_ID`, `OFFICER_NAME`, `DATE_START`, `DATE_END`) VALUES ('$iid', '$ioid', '$cid', '$oname', '$dstart', '$dend')";
    try{
    $result= mysqli_query($connection,$query);
    $ok=5;
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }
}
else if($_POST['value']=="case_outcome")
{
    $oid=$_POST['outcome_id'];
    $cid=$_POST['case_id'];
    $slid=$_POST['sol_id'];
    $sow=$_POST['section_of_law'];
    $status=$_POST['status'];
    $details=$_POST['details'];
    $query="INSERT INTO `case_outcome` (`OUTCOME_ID`, `CASE_ID`, `SOL_ID`, `SECTION_OF_LAW`, `STATUS`, `DETAILS`) VALUES ('$oid', '$cid', '$slid', '$sow', '$status', '$details')";
    try{
    $result= mysqli_query($connection,$query);
    $ok=5;
    }
    catch(Exception $errormsg)
    {
        $error=$errormsg->getmsg();
    }
}












if($ok==1)//................................................................................................
{ ?>
       <html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Query</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body bgcolor=#b2ebf2>
  <nav class="orange" role="navigation">
    
     <div class="nav-wrapper container">
       
            <a id="logo-container" href="validate.php" class="brand-logo">Refresh</a>
                   
       <ul class="right hide-on-med-and-down">
      
            <ul class="right hide-on-med-and-down">
                <li><a href="index.html">Logout</a></li>
              </ul>   
            

      
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="homeback.php"><b>HOME</b></a></li>
        <li><a href="data.php">Raw Data</a></li>
        <li><a href="enterintodatabase.php">Main</a></li>
        <li><a href="insertdata.php">Add Data</a></li>
        <li><a href="index.html">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h1 class="header center orange-text">Data Insertion Failed</h1>
      <div class="row center">
      <!--  <h5 class="header col s12 light">A modern responsive mangement software</h5> -->
      </div>
      <div class="row center">
        <a href="insertdata.php" id="download-button" class="btn-large waves-effect waves-light magenta">Try Again</a>
        </div>
    </div>
  </div>  
    <h5 align="center">Error message:- <?php echo $error?></h5>
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div class="row center">
      <!--  <h5 class="header col s12 light">A modern responsive mangement software</h5> -->
      </div><!--
      <div class="row center">
        <a href="#" id="download-button" class="btn-large waves-effect waves-light orange">Enter into Database</a>
      </div>-->
    </div>
  </div>
  
  

  <footer class="page-footer orange">
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
    <script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

    $('.dropdown-trigger').dropdown();</script>
       
  </body>
</html>
        
<?php } ?>



<?php
if($ok==5)//................................................................................................
{ ?>
        <html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Query</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body bgcolor=#b2ebf2>
  <nav class="orange" role="navigation">
    
     <div class="nav-wrapper container">
       
            <a id="logo-container" href="validate.php" class="brand-logo">Refresh</a>
                   
       <ul class="right hide-on-med-and-down">
      
            <ul class="right hide-on-med-and-down">
                <li><a href="index.html">Logout</a></li>
              </ul>   
            

      
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="homeback.php"><b>HOME</b></a></li>
        <li><a href="data.php">Raw Data</a></li>
        <li><a href="enterintodatabase.php">Main</a></li>
        <li><a href="insertdata.php">Add Data</a></li>
        <li><a href="index.html">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <h1 class="header center orange-text">Data has been added <br>Successfully</h1>
      <div class="row center">
      <!--  <h5 class="header col s12 light">A modern responsive mangement software</h5> -->
      </div>
      <div class="row center">
        <a href="insertdata.php" id="download-button" class="btn-large waves-effect waves-light magenta">Add More</a>
      </div>
    </div>
  </div>  
  
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <div class="row center">
      <!--  <h5 class="header col s12 light">A modern responsive mangement software</h5> -->
      </div><!--
      <div class="row center">
        <a href="#" id="download-button" class="btn-large waves-effect waves-light orange">Enter into Database</a>
      </div>-->
    </div>
  </div>
  
  

  <footer class="page-footer orange">
        <div class="footer-copyright">
      <div class="container">
      Made by MEET VALANI
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
    <script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

    $('.dropdown-trigger').dropdown();</script>
    
  </body>
</html>

<?php
} ?>