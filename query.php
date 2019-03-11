<?php
include("connectdatabase.php");
?>

<!DOCTYPE html>
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
       
            <a id="logo-container" href="query.php" class="brand-logo">Refresh</a>
                   
       <ul class="right hide-on-med-and-down">
      
                <li><a class="waves-effect waves-purple" href="homeback.php">HOME</a></li>
                <li><a class="waves-effect waves-purple" href="enterintodatabase.php">Main</a></li>
                <li><a class="waves-effect waves-purple" href="data.php">Raw Data</a></li>
                <li class="active"><a class="waves-effect waves-purple" href="query.php">Query</a></li>
                <li><a class="waves-effect waves-purple" href="insertdata.php">Add Data</a></li>
                <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-red" href="index.php">Logout</a></li>
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
        <div class="orange darken-1">
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab active" onclick="openPage('most_wanted', this)"<?php $TEM=true; if(isset($_POST['idd']) || isset($_POST['lidd']) || isset($_POST['cidd']) || isset($_POST['aidd'])){$TEM=false;}; if($TEM){?>id="defaultOpen"<?php } ?>><a href="#">MOST WANTED</a></li>
           <li class="tab" onclick="openPage('search', this)" <?php if(isset($_POST['idd'])){?>id="defaultOpen"<?php } ?>><a href="#">SEARCH BY FIR</a></li>
        <li class="tab" onclick="openPage('logs', this)"><a href="#">LOGS</a></li>
        <li class="tab" onclick="openPage('case_progress', this)" <?php if(isset($_POST['cidd'])){?>id="defaultOpen"<?php } ?>><a href="#">CASE PROGRESS</a></li>
        <li class="tab" onclick="openPage('city', this)" <?php if(isset($_POST['aidd'])){?>id="defaultOpen"<?php } ?>><a href="#">CRIMINALS BY CITY</a></li>
           <li class="tab" onclick="openPage('lock_up', this)" <?php if(isset($_POST['lidd'])){?>id="defaultOpen"<?php } ?>><a href="#">LOCK SEARCH</a></li>
           
      </ul>
    </div>
      </div>
  </nav>
  <div id="case_progress" class="tabcontent container">
    <br><br>
<?php 
        if(isset($_POST['cidd'])) {$test = $_POST['cidd'];} else {$test = "0";}
    if($test!="0")
    {
    ?> 
      <div class="left">
        <form class="col s6" action="#" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="cidd" id="cidd" type="text">
          <label for="cidd">CASE ID</label>
        </div>
            </div>
      
           <button class="btn waves-effect waves-light" type="submit" name="action">SEARCH
    <i class="material-icons right">send</i>
  </button>
    </form>
    </div>
     <br>
      <?php echo $_POST['cidd'];?>
       <table class="container right">
        <thead> 
           <tr>
              <th>INVESTIGATION_ID</th>
              <th>OFFICER NAME</th>
              <th>DATE STARTED</th>
              <th>DATE END</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $ano=$_POST['cidd'];
                    //$show="select *from officer";
                    $show="SELECT *FROM investigate WHERE investigate.INVESTIGATE_ID=(SELECT investigate.INVESTIGATE_ID FROM investigate WHERE investigate.CASE_ID='$ano');";
                    $run_query=mysqli_query($connection,$show);
                    //$run_query2=mysqli_query($connection,$contact);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?>
            <td><?php echo $result['INVESTIGATE_ID']; ?></td>
            <td><?php echo $result['OFFICER_NAME']; ?></td>
            <td><?php echo $result['DATE_START']; ?></td>
            <td><?php echo $result['DATE_END']; ?></td>
          </tr>
        <?php } ?>        
        </tbody>
      </table>
      <?php } 
    else
    {   ?>
       <div class="left">
        <form class="col s6" action="#" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="cidd" id="cidd" type="text">
          <label for="cidd">CASE ID</label>
        </div>
            </div>
      
           <button class="btn waves-effect waves-light" type="submit" name="action">SEARCH
    <i class="material-icons right">send</i>
  </button>
    </form>
    </div>
<?php    }
    ?>
</div>      
   <div id="lock_up" class="tabcontent container">
    <br><br>
<?php 
        if(isset($_POST['lidd'])) {$test = $_POST['lidd'];} else {$test = "0";}
    if($test!="0")
    {
    ?> 
      <div class="left">
        <form class="col s6" action="#" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="lidd" id="lidd" type="text">
          <label for="lidd">LOCK UP ID</label>
        </div>
            </div>
      
           <button class="btn waves-effect waves-light" type="submit" name="action">SEARCH
    <i class="material-icons right">send</i>
  </button>
    </form>
    </div>
     <br>
      <?php echo $_POST['lidd'];?>
       <table class="container right">
        <thead> 
           <tr>
              <th>ACCUSED_ID</th>
              <th>CRIMINAL NAME</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $lno=$_POST['lidd'];
                    $show="SELECT ACCUSED_ID,accused.FIRST_NAME,accused.LAST_NAME FROM accused WHERE accused.LOCK_UP_ID = '$lno';";
                    $run_query=mysqli_query($connection,$show);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?>
            <td><?php echo $result['ACCUSED_ID']; ?></td>
            <td><?php echo $result['FIRST_NAME']." ".$result['LAST_NAME']; ?></td>
          </tr>
        <?php } ?>        
        </tbody>
      </table>
      <?php } 
    else
    {   ?>
       <div class="left">
        <form class="col s6" action="#" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="lidd" id="lidd" type="text">
          <label for="lidd">LOCK UP ID</label>
        </div>
            </div>
      
           <button class="btn waves-effect waves-light" type="submit" name="action">SEARCH
    <i class="material-icons right">send</i>
  </button>
    </form>
    </div>
<?php    }
    ?>
</div>      

  <div id="city" class="tabcontent container">
    <br><br>
<?php 
        if(isset($_POST['aidd'])) {$test = $_POST['aidd'];} else {$test = "0";}
    if($test!="0")
    {
    ?> 
      <div class="left">
        <form class="col s6" action="#" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="aidd" id="aidd" type="text">
          <label for="aidd">CITY</label>
        </div>
            </div>
      
           <button class="btn waves-effect waves-light" type="submit" name="action">SEARCH
    <i class="material-icons right">send</i>
  </button>
    </form>
    </div>
     <br>
      <?php echo $_POST['aidd'];?>
       <table class="container right">
        <thead> 
           <tr>
              <th>CRIMINAL NAME</th>
              <th>BIRTH DATE</th>
              <th>STREET</th>
              <th>GENDER</th>
              <th>NO OF CRIMES</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $ano=$_POST['aidd'];
                    //$show="select *from officer";
                    $show="SELECT * FROM `accused` WHERE `accused`.`CITY`='$ano';";
                    $run_query=mysqli_query($connection,$show);
                    //$run_query2=mysqli_query($connection,$contact);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?>
            <td><?php echo $result['FIRST_NAME']/*." ".$result['MIDDLE_NAME']*/." ".$result['LAST_NAME']; ?></td>
            <td><?php echo $result['DOB']; ?></td>
            <td><?php echo $result['STREET']; ?></td>
            <td><?php echo $result['GENDER']; ?></td>
            <td><?php echo $result['NO_OF_CRIMES']; ?></td>
          </tr>
        <?php } ?>        
        </tbody>
      </table>
      <?php } 
    else
    {   ?>
       <div class="left">
        <form class="col s6" action="#" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="aidd" id="aidd" type="text">
          <label for="aidd">CITY</label>
        </div>
            </div>
      
           <button class="btn waves-effect waves-light" type="submit" name="action">SEARCH
    <i class="material-icons right">send</i>
  </button>
    </form>
    </div>
<?php    }
    ?>
</div>      
 
  <div id="logs" class="tabcontent container">
     <br><br> <table>
        <thead>
           <tr>
              <th>ID</th>
              <th>TABLE NAME</th>
              <th>ACTION</th>
              <th>TIME</th>
          </tr>
        </thead>
        <tbody>
          
           
           <?php  
                    $show="select *from log";
                    $run_query=mysqli_query($connection,$show);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?><tr>
            <td><?php echo $result['id']; ?></td>
            <td><?php echo $result['tablen']; ?></td>
            <td><?php echo $result['action']; ?></td>
            <td><?php echo $result['time']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
  </div>
  <div id="most_wanted" class="tabcontent container">
    <br><br>
       <table>
        <thead>
           <tr>
              <th>NAME FML</th>
              <th>BIRTH DATE</th>
              <th>STREET</th>
              <th>GENDER</th>
              <th>CITY</th>
              <th>NO OF CRIMES</th>
          </tr>
        </thead>
        <tbody>
          
           
           <?php  
                    $show="select *from accused order by `NO_OF_CRIMES` DESC";
                    $run_query=mysqli_query($connection,$show);
                    $i=0;
                    while($result=mysqli_fetch_assoc($run_query))
                    {$i++;
                     if($i<6){

        ?><tr>
            <td><?php echo $result['FIRST_NAME']." ".$result['MIDDLE_NAME']." ".$result['LAST_NAME']; ?></td>
            <td><?php echo $result['DOB']; ?></td>
            <td><?php echo $result['STREET']; ?></td>
            <td><?php echo $result['GENDER']; ?></td>
            <td><?php echo $result['CITY']; ?></td>
            <td><?php echo $result['NO_OF_CRIMES']; ?></td>
          </tr>
        <?php }} ?>
        </tbody>
      </table>      
    </div>
<div id="search" class="tabcontent container">
   <br><br>
<?php 
        if(isset($_POST['idd'])) {$test = $_POST['idd'];} else {$test = "0";}
    if($test!="0")
    {
    ?> 
      <div class="left">
        <form class="col s6" action="#" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="idd" id="idd" type="text">
          <label for="idd">FIR NUMBER</label>
        </div>
            </div>
      
           <button class="btn waves-effect waves-light" type="submit" name="action">SEARCH
    <i class="material-icons right">send</i>
  </button>
    </form>
    </div><br>
      <?php echo $_POST['idd'];?>
       <table class="container right">
        <thead> 
           <tr>
              <th>PETITIONER ID</th>
              <th>PETITIONER NAME</th>
              <th>VICTIM ID</th>
              <th>VICTIM NAME</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $firno=$_POST['idd'];
                    //$show="select *from officer";
                    $show="SELECT `P`.`PETITIONER_ID`,`P`.`FIRST_NAME` AS 'PETITIONER_NAME',`P`.`LAST_NAME` AS 'PETITIONER_LNAME',`V`.`VICTIM_ID`,`V`.`FIRST_NAME` AS 'VICTIM_NAME',`V`.`LAST_NAME` AS 'VICTIM_LNAME' FROM `petitioner` `P` , `victim` `V` , `accused` WHERE `P`.`PETITIONER_ID` = (SELECT `fir`.`PETITIONER_ID` FROM `fir` WHERE `fir`.`FIR_NUMBER` = '$firno') and `V`.`VICTIM_ID`=(SELECT `fir`.`VICTIM_ID` FROM `fir` WHERE `fir`.`FIR_NUMBER` = '$firno') and `ACCUSED`.`ACCUSED_ID`=(SELECT `fir`.`ACCUSED_ID` FROM `fir` WHERE `fir`.`FIR_NUMBER` = '$firno');";
                    $run_query=mysqli_query($connection,$show);
                    //$run_query2=mysqli_query($connection,$contact);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?>
            <td><?php echo $result['PETITIONER_ID']; ?></td>
            <td><?php echo $result['PETITIONER_NAME']/*." ".$result['MIDDLE_NAME']*/." ".$result['PETITIONER_LNAME']; ?></td>
            <td><?php echo $result['VICTIM_ID']; ?></td>
            <td><?php echo $result['VICTIM_NAME']/*." ".$result['MIDDLE_NAME']*/." ".$result['VICTIM_LNAME']; ?></td>
          </tr>
        <?php } ?>        
        </tbody>
      </table>
      <?php } 
    else
    {   ?>
       <div class="left">
        <form class="col s6" action="#" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="idd" id="idd" type="text">
          <label for="idd">FIR NUMBER</label>
        </div>
            </div>
      
           <button class="btn waves-effect waves-light" type="submit" name="action">SEARCH
    <i class="material-icons right">send</i>
  </button>
    </form>
    </div>
<?php    }
    ?>
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
    <script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });

  // Or with jQuery

    $('.dropdown-trigger').dropdown();</script>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
    </script>    
            <script>
    
        function openPage(pageName, elmnt) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the background color of all tablinks/buttons
    tablinks = document.getElementsByClassName("tab");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "#fb8c00";
    }

    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";

    // Add the specific color to the button used to open the tab content
    elmnt.style.backgroundColor = "#e65100";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
        
    </script>
  </body>
</html>
