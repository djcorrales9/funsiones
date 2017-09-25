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
      function operacion($n1,$n2,$opc){
        if ($_POST) {
          $r=0;
          if ($opc=="sumar") {
              $r=$n1+$n2;
              //echo "$r";
          }
            elseif ($opc=="restar") {
              $r=$n1-$n2;
              //echo "$r";
            }
            elseif ($opc=="multiplicar") {
              $r=$n1*$n2;
            //echo "$r";
            }
            elseif ($opc=="dividir") {
            $r=$n1/$n2;
            //echo "$r";
            }
            elseif ($opc=="potencia") {
              $r=pow($n1,$n2);
              //echo "$r";
            }
            else {
              $r=sqrt($n1);
              $r=sqrt($n2);
              //echo "$r";
            }
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
