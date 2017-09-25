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
      <h3>Funcion que muestre un saludo por pantalla,utilizar un procedimiento</h3>
        <form class="" action="index1,1.php" method="post">
        <label>Selecciones una opcion</label>
        <select class="" name="a" required="">
          <option value="">--seleccione--</option>
          <option value="saludar">Saludar</option>
          <option value="otra">Otra</option>
        </select>
        <input type="submit" name="" value="Enviar">
      </form>
      <?php
      include_once 'index1.php';
      if ($_POST) {
      $opc=$_POST['a'];
      echo opcion($opc);
      }
         ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
