<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Main Database</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body bgcolor=#b2ebf2>
  <nav class="orange" role="navigation">
    
     <div class="nav-wrapper container">
       
            <a id="logo-container" href="enterintodatabase.php" class="brand-logo">Refresh</a>
                   
       <ul class="right hide-on-med-and-down">
      
                <li><a class="waves-effect waves-purple" href="homeback.php">HOME</a></li>
                <li class="active"><a class="waves-effect waves-purple" href="enterintodatabase.php">Main</a></li>
                <li><a class="waves-effect waves-purple" href="data.php">Raw Data</a></li>
                <li><a class="waves-effect waves-purple" href="query.php">Query</a></li>
                <li><a class="waves-effect waves-purple" href="insertdata.php">Add Data</a></li>
                <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-red" href="index.php">Logout</a></li>
                </ul>   
      
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="homeback.php"><b>HOME</b></a></li>
        <li><a href="data.php">Raw Data</a></li>
        <li><a href="query.php">Query</a></li>
        <li><a href="insertdata.php">Add Data</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  
  
  
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
  
  
  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m12">
          <h4 class="left">Goal:-</h4><br><br><br>
           <h6 align="justify">
            The need for good record-keeping and information
        sharing practices has taken on added significance in
        today's global environment. Not only do good
        records provide crucial internal information (i.e.,
        business operations and case management
        support-not to mention the official memory of an
        agency's investigations), law enforcement agencies
        now need to communicate agency-to-agency and
        across continents in order to protect the Nation's
        citizens. Nothing is more important to
        accomplishing that mission than having accessibility
        to accurate and timely records. Calls for service
        records and investigative, arrest, criminal
        identification, detention, and even civil records hold
        information that by themselves mean little;
        however, when pieced together with information
        from other jurisdictions, the result can help with all
        Nation levels of investigations and aid in safeguarding the nation.
          
          <br>
          Crime Record Management system applies to all police stations across the country and specifically looks into the
          subject of crime prevention, detection and conviction of criminal depends on a highly responsive backbone of Information 
          Management
           </h6>
        <h4 class="left">Functionalities:-</h4><br><br><br>
           <h6 class="left">
                <li>Data Entry in Easy Manner</li>
                <li>Criminal's List Across All Over The Nation</li>
                <li>Valuable Officer's List</li>
                <li>Tracking of Crimes In Different City</li>
                <li>Real-time Case Progress Analysis</li>
           </h6>
            </div>
      </div>

    </div><p> </p>
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
    
  </body>
</html>
