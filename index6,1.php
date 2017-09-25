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
      <h3>Funcion que muestre por pantalla si el numero es par o impar</h3>
    <form class="" action="index6,1.php" method="post">
      <label >Numero 1:</label>
      <input type="number" name="a" value=""required>
      <input type="submit" name="" value="Enviar">
    </form>
    <hr>
    <?php
    include_once 'index6.php';
    echo par($n1=$_POST['a']);
     ?>
        </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
