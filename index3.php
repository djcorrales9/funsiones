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
      <h3>function que calcule el precio promedio de un articulo considerando que se conoce el precio del articulo en tres establecimientos distintos.debe mostrar por pantalla los tres establecimiento con sus precios y el precio promedio</h3>
    <?php
    function precios($precio1,$precio2,$precio3){
      $promedio=($precio1+$precio2+$precio3)/3;
      echo "El precio del primer establecimiento es: $precio1 <br>";
      echo "El precio del segundo establecimiento es: $precio2 <br>";
      echo "El precio del tercer establecimiebto es: $precio3 <br>" ;
      echo "El promedio del articulos es $promedio";
    }
     precios($_POST['valor1'],$_POST['valor2'],$_POST['valor3']);
     ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
