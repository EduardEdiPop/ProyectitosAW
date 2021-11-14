<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div><b>Nombre:</b><?php echo $_POST['nombre'] ?></div>
    <div><b>Apodo:</b><?php echo $_POST['apodo'] ?></div>
    <div><b>Apellido:</b><?php echo $_POST['apellido'] ?></div>
    <div><b>Fecha de nacimiento:</b><?php echo $_POST['fecha-nacimiento'] ?></div>
    <div><b>Color:</b><span style="background-color:<?php print $_POST ['color'] ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></div>
    <div><b>Nota:</b><?php echo $_POST['nota'] ?></div>
    <div><b>Signo del zodiaco:</b><?php echo $_POST['zodiaco'] ?></div>
    <?php
   $fichero = 'datos.txt';
   // Abre el fichero para obtener el contenido existente
   $actual = file_get_contents($fichero);
   // Añade una nueva persona al fichero
   $actual .= $_POST['nombre']." ";
   $actual .= $_POST['apellido']."\n";
   $actual .= $_POST['apodo']."\n";
   $actual .= $_POST['fecha-nacimiento']."\n";
   $actual .= $_POST['color']."\n";
   $actual .= $_POST['nota']."\n";
   $actual .= $_POST['zodiaco']."\n \n";
   // Escribe el contenido al fichero
   file_put_contents($fichero, $actual);
   ?>
   <h1>Guardado</h1>
   <a href="listado.php">Ir a listado</a>
  </body>
</html>
