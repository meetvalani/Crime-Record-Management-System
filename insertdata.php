<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Insert Data</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body bgcolor=#b2ebf2>
  <nav class="orange" role="navigation">
    
     <div class="nav-wrapper container">
       
            <a id="logo-container" href="insertdata.php" class="brand-logo">Refresh</a>
                   
       <ul class="right hide-on-med-and-down">
      
                <li><a class="waves-effect waves-purple" href="homeback.php">HOME</a></li>
                <li><a class="waves-effect waves-purple" href="enterintodatabase.php">Main</a></li>
                <li><a class="waves-effect waves-purple" href="data.php">Raw Data</a></li>
                <li><a class="waves-effect waves-purple" href="query.php">Query</a></li>
                <li class="active"><a class="waves-effect waves-purple" href="insertdata.php">Add Data</a></li>
                <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-red" href="index.php">Logout</a></li>
                </ul>   
      
      </ul>
       
        <ul id="nav-mobile" class="sidenav">
        <li><a href="homeback.php"><b>HOME</b></a></li>
        <li><a href="data.php">Raw Data</a></li>
        <li><a href="enterintodatabase.php">Main</a></li>
        <li><a href="insertdata.php">Add Data</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
    <div class="orange darken-1">
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab active" onclick="openPage('petitioner', this)" id="defaultOpen"><a href="#">PETITIONER</a></li>
        <li class="tab" onclick="openPage('victim', this)"><a href="#">VICTIM</a></li>
        <li class="tab" onclick="openPage('officer', this)"><a href="#">OFFICER</a></li>
        <li class="tab" onclick="openPage('lock_up', this)"><a href="#">LOCK-UP</a></li>
        <li class="tab" onclick="openPage('accused', this)"><a href="#">ACCUSED</a></li>
        <li class="tab" onclick="openPage('fir', this)"><a href="#">FIR</a></li>
        <li class="tab" onclick="openPage('cases', this)"><a href="#">CASES</a></li>
        <li class="tab" onclick="openPage('section_of_law', this)"><a href="#">SECTION OF LAW</a></li>
        <li class="tab" onclick="openPage('investigate', this)"><a href="#">INVESTIGATE</a></li>
        <li class="tab" onclick="openPage('case_outcome', this)"><a href="#">CASE OUTCOME</a></li>
            </ul>
    </div>
      </div>
  </nav>

  <div id="petitioner" class="tabcontent container">
    <br><br>
     <form class="col s12" action="validate.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="petitioner_id" id="petitioner_id" type="text">
          <label for="petitioner_id">Petitioner ID</label>
        </div>
        <div class="input-field col s6">
          <input name="first_name" id="first_name" type="text">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input name="middle_name" id="middle_name" type="text">
          <label for="middle_name">Middle Name</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" id="last_name" type="text">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s6">
          <input name="street" id="street" type="text">
          <label for="street">Street</label>
        </div>
        <div class="input-field col s6">
          <input name="city" id="city" type="text">
          <label for="city">City</label>
        </div>
        <div class="input-field col s6">
          <input name="contact" id="contact" type="text">
          <label for="contact">Contact</label>
        </div>
      </div>
        <p>Gender</p>
        <div>
            <p>
            <label>
              <input class="with-gap" name="gender" value="MALE" type="radio"/>
              <span>Male</span>
            </label>
            <label>
              <input class="with-gap" name="gender" value="FEMALE" type="radio"/>
              <span>Female</span>
            </label>
            </p>
        </div><input type="hidden" value="petitioner" name="value">
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>      
  </div>
  
  <div id="victim" class="tabcontent container">
      <br><br>
               <form class="col s12" action="validate.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="victim_id" id="victim_id" type="text">
          <label for="victim_id">Victim ID</label>
        </div>
        <div class="input-field col s6">
          <input name="first_name" id="first_name" type="text">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input name="middle_name" id="middle_name" type="text">
          <label for="middle_name">Middle Name</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" id="last_name" type="text">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s6">
          <input name="dob" id="dob" type="text">
          <label for="dob">DOB(yyyy-mm-dd)</label>
        </div>
        <div class="input-field col s6">
          <input name="street" id="street" type="text">
          <label for="street">Street</label>
        </div>
        <div class="input-field col s6">
          <input name="city" id="city" type="text">
          <label for="city">City</label>
        </div>
        <div class="input-field col s6">
          <input name="contact" id="contact" type="text">
          <label for="contact">Contact</label>
        </div>
        <div class="col s6">
            <p>Condition :
            <label>
              <input class="with-gap" name="condition" value="ALIVE" type="radio" checked />
              <span>Alive</span>
            </label>
            <label>
              <input class="with-gap" name="condition" value="DEAD" type="radio"/>
              <span>Dead</span>
            </label>
            </p>
        </div>
        <div class="col s6">
            <p>Gender :
            <label>
              <input class="with-gap" name="gender" value="MALE" type="radio"/>
              <span>Male</span>
            </label>
            <label>
              <input class="with-gap" name="gender" value="FEMALE" type="radio"/>
              <span>Female</span>
            </label>
            </p>
        </div>
      </div>
          <input type="hidden" value="victim" name="value">
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
  
  <div id="officer" class="tabcontent  container">
      <br><br>
                <form class="col s12" action="validate.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="io_id" id="io_id" type="text">
          <label for="io_id">Officer ID</label>
        </div>
        <div class="input-field col s6">
          <input name="first_name" id="first_name" type="text">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input name="middle_name" id="middle_name" type="text">
          <label for="middle_name">Middle Name</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" id="last_name" type="text">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s6">
          <input name="date_of_hire" id="date_of_hire" type="text">
          <label for="date_of_hire">Date of Hire (yyyy-mm-dd)</label>
        </div>
        <div class="input-field col s6">
          <input name="salary" id="salary" type="text">
          <label for="salary">Salary</label>
        </div>
        <div class="input-field col s6">
          <input name="contact" id="contact" type="text">
          <label for="contact">Contact</label>
        </div>
        <div class="input-field col s1">
            <select name="rank" id="rank">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            <label>Rank</label>
        </div>
      </div>
          <input type="hidden" value="officer" name="value">
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
  
  <div id="lock_up" class="tabcontent container">
      <br><br>
                <form class="col s12" action="validate.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="lock_up_id" id="lock_up_id" type="text">
          <label for="lock_up_id">Lock-up ID</label>
        </div>
        <div class="input-field col s6">
          <input name="type" id="type" type="text">
          <label for="type">Type</label>
        </div>
              </div><input type="hidden" value="lock_up" name="value">         
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
  
  <div id="accused" class="tabcontent container">
      <br><br>
               <form class="col s12" action="validate.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="accused_id" id="accused_id" type="text">
          <label for="accused_id">Accused ID</label>
        </div>
        <div class="input-field col s6">
          <input name="lock_up_id" id="lock_up_id" type="text">
          <label for="lock_up_id">Lock-up ID</label>
        </div>
        <div class="input-field col s6">
          <input name="first_name" id="first_name" type="text">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input name="middle_name" id="middle_name" type="text">
          <label for="middle_name">Middle Name</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" id="last_name" type="text">
          <label for="last_name">Last Name</label>
        </div>
        <div class="input-field col s6">
          <input name="dob" id="dob" type="text">
          <label for="dob">DOB(yyyy-mm-dd)</label>
        </div>
        <div class="input-field col s6">
          <input name="street" id="street" type="text">
          <label for="street">Street</label>
        </div>
        <div class="input-field col s6">
          <input name="city" id="city" type="text">
          <label for="city">City</label>
        </div>
        <div class="col s6">
            <p>Status :
            <label>
              <input class="with-gap" name="status" value="PROVED" type="radio" checked />
              <span>Proved</span>
            </label>
            <label>
              <input class="with-gap" name="status" value="NOT PROVED" type="radio"/>
              <span>Not proved</span>
            </label>
            </p>
        </div>
        <div class="col s6">
            <p>Gender
            <label>
              <input class="with-gap" name="gender" value="MALE" type="radio"/>
              <span>Male</span>
            </label>
            <label>
              <input class="with-gap" name="gender" value="FEMALE" type="radio"/>
              <span>Female</span>
            </label>
            </p>
        </div>
      </div>
          <input type="hidden" value="accused" name="value">
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
  
  <div id="fir" class="tabcontent container">
      <br><br>
               <form class="col s12" action="validate.php" method="post">
      <div class="row">
       <div class="input-field col s6">
          <input name="fir_number" id="fir_number" type="text">
          <label for="fir_number">Fir Number</label>
        </div>
        <div class="input-field col s6">
          <input name="victim_id" id="victim_id" type="text">
          <label for="victim_id">Victim ID</label>
        </div>
        <div class="input-field col s6">
          <input name="accused_id" id="accused_id" type="text">
          <label for="accused_id">Accused ID</label>
        </div>
        <div class="input-field col s6">
          <input name="petitioner_id" id="petitioner_id" type="text">
          <label for="petitioner_id">Petitioner ID</label>
        </div>
        <div class="input-field col s6">
          <input name="place_incident" id="place_incident" type="text">
          <label for="place_incident">Place of Incident</label>
        </div>
        <div class="input-field col s6">
          <input name="time_incident" id="time_incident" type="text">
          <label for="Time_incident">Time of Incident (HH:MM:SS)</label>
        </div>
        <div class="input-field col s6">
          <input name="date_incident" id="date_incident" type="text">
          <label for="date_incident">Date of Incident (yyyy-mm-dd)</label>
        </div>
        <div class="input-field col s6">
          <input name="date_file" id="date_file" type="text">
          <label for="date_file">Date File (yyyy-mm-dd)</label>
        </div><p>Accused Status</p>
        <div>
            <p>
            <label>
              <input class="with-gap" name="accused_status" value="PROVED" type="radio" />
              <span>Proved</span>
            </label>
            <label>
              <input class="with-gap" name="accused_status" value="NOT PROVED" type="radio"/>
              <span>Not proved</span>
            </label>
            </p>
        </div>
      </div>
          <input type="hidden" value="fir" name="value">
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
  
  <div id="cases" class="tabcontent container">
      <br><br>
               <form class="col s12" action="validate.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="case_id" id="case_id" type="text">
          <label for="case_id">Case ID</label>
        </div>
        <div class="input-field col s6">
          <input name="fir_number" id="fir_number" type="text">
          <label for="fir_number">Fir Number</label>
        </div>
        <div class="input-field col s6">
          <input name="io_id" id="io_id" type="text">
          <label for="io_id">Officer ID</label>
        </div>
      </div>
          <input type="hidden" value="cases" name="value">
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>          
  </div>

  <div id="section_of_law" class="tabcontent container">
      <br><br>
               <form class="col s12" action="validate.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="sol_id" id="sol_id" type="text">
          <label for="sol_id">Section of Law ID</label>
        </div>
        <div class="input-field col s6">
          <input name="section_of_law" id="section_of_law" type="text">
          <label for="section_of_law">Section of Law</label>
        </div>
        <div class="input-field col s6">
          <input name="sentence" id="sentence" type="text">
          <label for="sentence">Sentence</label>
        </div>
        <div class="input-field col s6">
          <input name="detail" id="detail" type="text">
          <label for="detail">Detail</label>
        </div>
      </div>
          <input type="hidden" value="section_of_law" name="value">
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>          
  </div>
  
  <div id="investigate" class="tabcontent container">
      <br><br>
               <form class="col s12" action="validate.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="investigate_id" id="investigate_id" type="text">
          <label for="investigate_id">Investigation ID</label>
        </div>
        <div class="input-field col s6">
          <input name="io_id" id="io_id" type="text">
          <label for="io_id">Officer ID</label>
        </div>
        <div class="input-field col s6">
          <input name="case_id" id="case_id" type="text">
          <label for="case_id">Case ID</label>
        </div>
        <div class="input-field col s6">
          <input name="officer_name" id="officer_name" type="text">
          <label for="officer_name">Officer Name</label>
        </div>
        <div class="input-field col s6">
          <input name="date_start" id="date_start" type="text">
          <label for="date_start">Date Start</label>
        </div>
        <div class="input-field col s6">
          <input name="date_end" id="date_end" type="text">
          <label for="date_end">Date End</label>
        </div>
      </div>
          <input type="hidden" value="investigation" name="value">
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>          
  </div>
  
  <div id="case_outcome" class="tabcontent container">
      <br><br>
               <form class="col s12" action="validate.php" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input name="outcome_id" id="outcome_id" type="text">
          <label for="outcome_id">Outcome ID</label>
        </div>
        <div class="input-field col s6">
          <input name="case_id" id="case_id" type="text">
          <label for="case_id">Case ID</label>
        </div>
        <div class="input-field col s6">
          <input name="sol_id" id="sol_id" type="text">
          <label for="sol_id">Section of Law ID</label>
        </div>
        <div class="input-field col s6">
          <input name="section_of_law" id="section_of_law" type="text">
          <label for="section_of_law">Section of Law</label>
        </div>
        <div class="input-field col s6">
          <input name="details" id="details" type="text">
          <label for="details">Details</label>
        </div><p>Status</p>
        <div>
            <p>
            <label>
              <input class="with-gap" name="status" value="PROVED" type="radio" checked />
              <span>Proved</span>
            </label>
            <label>
              <input class="with-gap" name="status" value="NOT PROVED" type="radio"/>
              <span>Not proved</span>
            </label>
            </p>
        </div>
        
      </div>
          <input type="hidden" value="case_outcome" name="value">
           <button class="btn waves-effect waves-light" type="submit" name="action">Add
    <i class="material-icons right">send</i>
  </button>
    </form>          

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
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });</script>
    <script>
     document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    var instances = M.Dropdown.init(elems, options);
  });
  // Or with jQuery
    $('.dropdown-trigger').dropdown();</script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.datepicker');
    var instances = M.Datepicker.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.datepicker').datepicker();
  });
    </script>
  <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  $(document).ready(function(){
    $('select').formSelect();
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