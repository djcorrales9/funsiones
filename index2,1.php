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
      <h3>Funcion que calcule el cuadrado de un numero cualquiera y lo muestre en pantalla</h3>
    <form class="" action="index2,1.php" method="post">
      <label>Calcular area </label>
      <select class="" name="a"required="">
        <option value="">--seleccione--</option>
        <option value="cuadrado">Cuadrado</option>
        <option value="1">Triangulo</option>
      </select>
      <label>Ingrese un numero</label>
      <input type="number" name="b" value="">
      <input type="submit" name="" value="Enviar">
    </form>
    <?php
    include_once 'index2.php';
          if ($_POST) {
            $opc=$_POST['a'];
            //$numero=$_POST['b'];
            echo operacion($opc);
          }
     ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
