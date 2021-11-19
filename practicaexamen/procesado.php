<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/estilo.css">
  </head>
  <body>
    <div id="header">
      <img src="./blanco.png" class="fotoizquierda"><img src="./laroca.jpg" class="fotoderecha"><h1>PRUEBA DE EXAMEN</h1>
    </div>
    <div class="formulario">
      <h2 class="guardado">MUCHAS GRACIAS SU INFORMACION SE HA GUARDADO</h2>

    <?php
   $fichero = 'datos.txt';
   // Abre el fichero para obtener el contenido existente
   $actual = file_get_contents($fichero);
   // Añade una nueva persona al fichero
   $actual .= $_POST['nombre']."\n";
   $actual .= $_POST['comentarios']."\n";
   // Escribe el contenido al fichero
   file_put_contents($fichero, $actual);
   ?>
   <a href="lista.php">Ir a la lista</a>
   </div>
  </body>
</html>
