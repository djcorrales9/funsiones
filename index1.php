<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>funciones</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
      <?php
      function opcion($opc){
              $saludo;
                if ($opc=="saludar") {
                echo $saludo=" Bienvenido gracias por usar nuestro servicios<br/>";
                }
                  else {
                    echo $saludo="Debe escojer la opcion saludar<br/>";

                  }
            // return $saludo;
      }
       ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
