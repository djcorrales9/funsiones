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
      function operaciones($n1,$n2,$operaciones){
        $resultado=0;
        if ($operaciones=='Sumar') {
          $resultado=$n1+$n2;
        }
        elseif ($operaciones=='Resta') {
          $resultado=$n1-$n2;
        }
        elseif ($operaciones=='Multiplicar') {
        $resultado=$n1*$n2;
        }
        return $resultado;
      }
       ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
