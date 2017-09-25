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
      <h3>Funcion que valide si el caracter introducido es un numero y muestre por pantalla el resultado </h3>
    <form class="" action="index7,1.php" method="post">
      <label >Ingrese letras o numeros:</label>
      <input type="text" name="a" value=""required>
      <input type="submit" name="" value="Enviar">
    </form>
    <hr>
    <?php
    include_once 'index7.php';
    echo numero($n1=$_POST['a']);
     ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
