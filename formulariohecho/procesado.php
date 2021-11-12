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
  </body>
</html>
