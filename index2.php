<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>-funciones</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="container">
    <?php
        function operacion($opc){
      $numero=$_POST['b'];
      $r=0;
      if ($opc=="cuadrado") {
        $r=$numero*$numero;
      }
      else {
     echo'Debe escojer la opcion cuadrado<br/>';
      }
      return $r;
    }

     ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
