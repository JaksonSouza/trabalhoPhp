 <?php
    include 'connection.php';
    include 'crud.php';
 ?>

 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

       <nav>
          <div class="nav-wrapper black">
            <a href="#" class="brand-logo">ProvaWeb</a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                  <li><a href="vendedor.php">Vendedor</a></li>
                  <li><a href="collapsible.html">JavaScript</a></li>
              </ul>
          </div>
       </nav>

       <!--JavaScript at end of body for optimized loading-->
       <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>