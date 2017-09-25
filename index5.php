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
    function grados($n1,$opc){
      if ($_POST) {

      $r=0;
          
          if ($opc=="fahrenheit") {
            $r=($n1*1.8)+32;
            //echo "$r";
        }
        else {
          $r=$n1+273.15;
        //  echo "$r";
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
