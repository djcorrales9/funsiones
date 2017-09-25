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
      <h3>Funcion que pida por pantalla una temperatura en grado celsius, muestre un menu para convertirlos a a fahreheit o kelvin y muestre el equivalente por pantalla</h3>
    <form class="" action="index5,1.php" method="post">
      <label >Grados celsius:</label>
      <input type="number" name="a" value=""required>
      <label>Converitr a:</label>
      <select class="" name="b"required>
        <option value="">--selecione--</option>
        <option value="fahrenheit">Fahrenheit</option>
        <option value="kelvin">Kelvin</option>
      </select>
      <input type="submit" name="" value="Enviar">
    </form>
    <hr>
      <?php  include_once'index5.php';
      echo grados($n1=$_POST['a'],$opc=$_POST['b']);

       ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
