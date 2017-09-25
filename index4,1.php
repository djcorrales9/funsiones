
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
      <h3>Funcion que muestre las opciones sumar, restar, multipplicar, dividir, potencia y raiz. debe mostrar por pantalla la operaciones y resultados</h3>
      <form class="" action="index4,1.php" method="post">
      <label>Seleccione</label>
      <select class="" name="a"required>
        <option value="">--selecione--</option>
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="dividir">Dividir</option>
        <option value="potencia">Potencia</option>
        <option value="raiz">Raiz</option>
      </select>
      <label >Numero 1:</label>
      <input type="number" name="b" value=""required>
      <label>Numero 2:</label>
      <input type="number" name="c" value=""required>
      <input type="submit" name="" value="Enviar">
      </form>
      <hr>
      <?php
      include_once 'index4.php';
      echo operacion($n1=$_POST['b'],$n2=$_POST['c'],$opc=$_POST['a']);
       ?>
    </div>
  </body>
  <!-- jQuery first, then Tether, then Bootstrap JS. -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</html>
