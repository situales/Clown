<!DOCTYPE html>
<html>
<body>
<?php 



   $numero = rand(0, 100);
   $mensaje = "";
   echo $numero."       %       ";

   if ($numero == 0) {
      $mensaje = "nmms we";
   } else if (    $numero >= 1 && $numero <      50  ) {// rango: (1, 98)
      $mensaje= "nmms pvto";
   }else if (   $numero >= 50  && $numero <  101   ) { // rango: (50, 101)
      $mensaje = "prueba 2";
   }
   
   echo $mensaje;
   

















?>
</body>
</html>