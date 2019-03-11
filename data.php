<!DOCTYPE html>
<?php
include("connectdatabase.php");
?>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Raw Data</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial;
}

/* Style tab links */
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: black;
    display: none;
    padding: 100px 20px;
    height: 100%;
}

#Home {background-color: red;}
#News {background-color: green;}
#Contact {background-color: blue;}
#About {background-color: orange;}
</style>


  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body bgcolor=#b2ebf2>
  <nav class="orange" role="navigation">
      <nav class="nav-extended">
   <div class="orange">
    <div class="nav-wrapper container">
            <a id="logo-container" href="data.php" class="brand-logo">Refresh</a>
       <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-purple" href="homeback.php">HOME</a></li>
                <li><a class="waves-effect waves-purple" href="enterintodatabase.php">Main</a></li>
                <li class="active"><a class="waves-effect waves-purple" href="data.php">Raw Data</a></li>
                <li><a class="waves-effect waves-purple" href="query.php">Query</a></li>
                <li><a class="waves-effect waves-purple" href="insertdata.php">Add Data</a></li>
                <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-red" href="index.php">Logout</a></li>
                </ul>   
      </ul>
      </div>
      </div>
    <div class="orange darken-1">
    <div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab active" onclick="openPage('petitioner', this)" id="defaultOpen"><a href="#">PETITIONER</a></li>
        <li class="tab" onclick="openPage('victim', this)"><a href="#">VICTIM</a></li>
        <li class="tab" onclick="openPage('accused', this)"><a href="#">ACCUSED</a></li>
        <li class="tab" onclick="openPage('officer', this)"><a href="#">OFFICER</a></li>
        <li class="tab" onclick="openPage('fir', this)"><a href="#">FIR</a></li>
        <li class="tab" onclick="openPage('investigation', this)"><a href="#">INVESTIGATION</a></li>
        <li class="tab" onclick="openPage('cases', this)"><a href="#">CASES</a></li>
        <li class="tab" onclick="openPage('case_outcome', this)"><a href="#">CASE OUTCOME</a></li>
        <li class="tab" onclick="openPage('section_of_law', this)"><a href="#">SECTION OF LAW</a></li>
      </ul>
    </div>
      </div>
  </nav>  
     
  </nav>
  
<div id="petitioner" class="tabcontent">
 <table>
        <thead>
           <tr>
              <th>ID</th>
              <th>NAME FML</th>
              <th>CONTACT</th>
              <th>STREET</th>
              <th>GENDER</th>
              <th>CITY</th>
          </tr>
        </thead>
        <tbody>
          
           
           <?php  
                    $show="select *from petitioner";
                    $contact="SELECT DISTINCT `petitioner_contact`.* FROM `petitioner_contact` LEFT JOIN `petitioner` ON `petitioner`.`PETITIONER_ID` = `petitioner`.`PETITIONER_ID`";
                    $run_query=mysqli_query($connection,$show);
        
                    $run_query2=mysqli_query($connection,$contact);
                    while($result=mysqli_fetch_assoc($run_query))
                    {
                        $result2=mysqli_fetch_assoc($run_query2);
                        if($result['PETITIONER_ID']==$result2['PETITIONER_ID'])
                        {
                            $tmp=$result2['CONTACT'];
                        }
                        else
                        {$tmp="-";}
        ?><tr>
            <td><?php echo $result['PETITIONER_ID']; ?></td>
            <td><?php echo $result['FIRST_NAME']." ".$result['MIDDLE_NAME']." ".$result['LAST_NAME']; ?></td>
            <td><?php echo $tmp; ?></td>
            <td><?php echo $result['STREET']; ?></td>
            <td><?php echo $result['GENDER']; ?></td>
            <td><?php echo $result['CITY']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
  </div>
  
<div id="victim" class="tabcontent">
  
    <table>
        <thead>
           <tr>
              <th>ID</th>
              <th>NAME FML</th>
              <th>BIRTH DATE (Y-M-D)</th>
              <th>CONDITION</th>
              <th>CONTACT</th>
              <th>STREET</th>
              <th>GENDER</th>
              <th>CITY</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $show="select *from VICTIM";
                    $contact="SELECT DISTINCT `victim_contact`.* FROM `victim_contact` LEFT JOIN `victim` ON `victim`.`VICTIM_ID` = `victim`.`VICTIM_ID`";
                    $run_query=mysqli_query($connection,$show);
                    $run_query2=mysqli_query($connection,$contact);
                    while($result=mysqli_fetch_assoc($run_query))
                    {
                        $result2=mysqli_fetch_assoc($run_query2);
                        if($result['VICTIM_ID']==$result2['VICTIM_ID'])
                        {
                            $tmp=$result2['CONTACT'];
                        }
                        else
                        {$tmp="-";}
        ?>
            <td><?php echo $result['VICTIM_ID']; ?></td>
            <td><?php echo $result['FIRST_NAME']." ".$result['MIDDLE_NAME']." ".$result['LAST_NAME']; ?></td>
            <td><?php echo $result['DOB']; ?></td>
            <td><?php echo $result['CONDITION']; ?></td>
            <td><?php echo $tmp; ?></td>
            <td><?php echo $result['STREET']; ?></td>
            <td><?php echo $result['GENDER']; ?></td>
            <td><?php echo $result['CITY']; ?></td>
          </tr>
        <?php } ?>        
        </tbody>
      </table>
</div>
 
 <div id="accused" class="tabcontent">
    <table>
        <thead>
           <tr>
              <th>ACCUSED ID</th>
              <th>LOCKUP ID</th>
              <th>NAME FML</th>
              <th>STATUS</th>
              <th>BIRTH DATE</th>
              <th>STREET</th>
              <th>GENDER</th>
              <th>CITY</th>
              <th>NO OF CRIMES</th>
          </tr>
        </thead>
        <tbody>
          
           
           <?php  
                    $show="select *from accused";
                    $run_query=mysqli_query($connection,$show);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?><tr>
            <td><?php echo $result['ACCUSED_ID']; ?></td>
            <td><?php echo $result['LOCK_UP_ID'] ?></td>
            <td><?php echo $result['FIRST_NAME']." ".$result['MIDDLE_NAME']." ".$result['LAST_NAME']; ?></td>
            <td><?php echo $result['STATUS']; ?></td>
            <td><?php echo $result['DOB']; ?></td>
            <td><?php echo $result['STREET']; ?></td>
            <td><?php echo $result['GENDER']; ?></td>
            <td><?php echo $result['CITY']; ?></td>
            <td><?php echo $result['NO_OF_CRIMES']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
</div>

<div id="officer" class="tabcontent">
    <table>
        <thead> 
           <tr>
              <th>ID</th>
              <th>NAME FML</th>
              <th>CONTACT</th>
              <th>DATE OF HIRE</th>
              <th>SALARY</th>
              <th>RANK</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $show="select *from officer";
                    $contact="SELECT DISTINCT `officer_contact`.* FROM `officer_contact` LEFT JOIN `officer` ON `officer`.`IO_ID` = `officer`.`IO_ID`";
                    $run_query=mysqli_query($connection,$show);
                    $run_query2=mysqli_query($connection,$contact);
                    while($result=mysqli_fetch_assoc($run_query))
                    {
                        $result2=mysqli_fetch_assoc($run_query2);
                        if($result['IO_ID']==$result2['IO_ID'])
                        {
                            $tmp=$result2['CONTACT'];
                        }
                        else
                        {$tmp="-";}
        ?>
            <td><?php echo $result['IO_ID']; ?></td>
            <td><?php echo $result['FIRST_NAME']." ".$result['MIDDLE_NAME']." ".$result['LAST_NAME']; ?></td>
            <td><?php echo $tmp; ?></td>
            <td><?php echo $result['DATE_OF_HIRE']; ?></td>
            <td><?php echo $result['SALARY']; ?></td>
            <td><?php echo $result['RANK']; ?></td>
          </tr>
        <?php } ?>        
        </tbody>
      </table>

</div>
<div id="fir" class="tabcontent">
      <table>
        <thead> 
           <tr>
              <th>FIR NUMBER</th>
              <th>VICTIM ID</th>
              <th>ACCUSED ID</th>
              <th>PETITIONER ID</th>
              <th>ACCUSED STATUS</th>
              <th>PLACE INCIDENT</th>
              <th>TIME INCIDENT</th>
              <th>DATE INCIDENT</th>
              <th>DATE FILE</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $show="select *from fir";
                    $run_query=mysqli_query($connection,$show);
                    while($result=mysqli_fetch_assoc($run_query))
                    {
        ?>
            <td><?php echo $result['FIR_NUMBER']; ?></td>
            <td><?php echo $result['VICTIM_ID']; ?></td>
            <td><?php echo $result['ACCUSED_ID']; ?></td>
            <td><?php echo $result['PETITIONER_ID']; ?></td>
            <td><?php echo $result['ACCUSED_STATUS']; ?></td>
            <td><?php echo $result['PLACE_INCIDENT']; ?></td>
            <td><?php echo $result['TIME_INCIDENT']; ?></td>
            <td><?php echo $result['DATE_INCIDENT']; ?></td>
            <td><?php echo $result['DATE_FILE']; ?></td>    
          </tr>
        <?php  }?>        
        </tbody>
      </table>           
</div>
<div id="investigation" class="tabcontent">
  <table>
        <thead>
           <tr>
              <th>INVESTIGATE ID</th>
              <th>IO ID</th>
              <th>CASE ID</th>
              <th>OFFICER NAME</th>
              <th>DATE_START</th>
              <th>DATE_END</th>
           </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $show="select *from investigate";
                    $run_query=mysqli_query($connection,$show);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?>
            <td><?php echo $result['INVESTIGATE_ID']; ?></td>
            <td><?php echo $result['IO_ID'] ?></td>
            <td><?php echo $result['CASE_ID']; ?></td>
            <td><?php echo $result['OFFICER_NAME']; ?></td>
            <td><?php echo $result['DATE_START']; ?></td>
            <td><?php echo $result['DATE_END']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>

</div>
<div id="cases" class="tabcontent container">
    <table>
        <thead>
           <tr>
              <th>CASE ID</th>
              <th>FIR NUMBER</th>
              <th>OFFICER ID</th>
           </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $show="select *from cases";
                    $run_query=mysqli_query($connection,$show);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?>
            <td><?php echo $result['CASE_ID']; ?></td>
            <td><?php echo $result['FIR_NUMBER'] ?></td>
            <td><?php echo $result['IO_ID']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>  
</div>
<div id="case_outcome" class="tabcontent">
    <table>
        <thead> 
           <tr>
              <th>OUTCOME ID</th>
              <th>CASE ID</th>
              <th>SOL ID</th>
              <th>SECTION OF LAW</th>
              <th>STATUS</th>
              <th>DETAILS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $show="select *from case_outcome";
                    $run_query=mysqli_query($connection,$show);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?>
            <td><?php echo $result['OUTCOME_ID']; ?></td>
            <td><?php echo $result['CASE_ID']; ?></td>
            <td><?php echo $result['SOL_ID']; ?></td>
            <td><?php echo $result['SECTION_OF_LAW']; ?></td>
            <td><?php echo $result['STATUS']; ?></td>
            <td><?php echo $result['DETAILS']; ?></td>
          </tr>
        <?php } ?>        
        </tbody>
      </table>              
</div>
<div id="section_of_law" class="tabcontent">
        <table>
        <thead> 
           <tr>
              <th>ID</th>
              <th>SECTION OF LAW</th>
              <th>SENTENCE</th>
              <th>DETAIL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
           
           <?php  
                    $show="select *from section_of_law";
                    $run_query=mysqli_query($connection,$show);
                    while($result=mysqli_fetch_assoc($run_query))
                    {

        ?>
            <td><?php echo $result['SOL_ID']; ?></td>
            <td><?php echo $result['SECTION_OF_LAW']; ?></td>
            <td><?php echo $result['SENTENCE']; ?></td>
            <td><?php echo $result['DETAIL']; ?></td>
          </tr>
        <?php } ?>        
        </tbody>
      </table>              
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
