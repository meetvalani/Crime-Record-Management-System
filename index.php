  <!DOCTYPE html>
  <html>
    <head>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
       <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Login</title>
        </head>
    <body bgcolor="#a7ffeb">
     <div align="center" ><b><header></header></b></div>
      <script type="text/javascript" src="js/materialize.min.js"></script>
        <div class="card-panel orange accent-4" align=center></div>
        <div class="card-panel white" align=center><Server></Server></div>
        <div class="card-panel green darken-3" align=center><Server></Server></div>

   <img class="col s6 center" src="1.jpg" height="400" width="650">       
    <div class="row right">
    <form class="col s11" action="home.php" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input name="first_name" id="first_name" type="text">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s12">
          <input name="last_name" id="last_name" type="text">
          <label for="last_name">Last Name</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s12">
          <input name="password" id="password" type="password">
          <label for="password">Password</label>
        </div>
      </div>
      
           <button class="btn waves-effect waves-light" type="submit" name="action">Login
    <i class="material-icons right">send</i>
  </button>
    </form>
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
  <footer class="footer grey">
        <div class="footer-copyright">
      <div class="container">
      CRIME RECORD MANAGEMENT SYSTEM
      </div>
    </div>
  </footer>

        </body>
  </html>