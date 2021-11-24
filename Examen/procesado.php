<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="derecha">
      <img src="./mario.jpeg">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3038.09943763614!2d-3.6020842846043655!3d40.406647879366304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd42255d3a247575%3A0xd8a0a40edf810cff!2sIES%20Villablanca!5e0!3m2!1ses!2ses!4v1637668079650!5m2!1ses!2ses" width="250px" height="300px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="central">
      <div class="formulario">
        <h1 class="terminado">Su Pedido estara listo en 30 minutos</h1>
        <?php
       $fichero = 'datos.txt';
       // Abre el fichero para obtener el contenido existente
       $actual = file_get_contents($fichero);
       // Añade una nueva persona al fichero
       $actual .= $_POST['jamon'];
       $actual .= $_POST['piña'].",";
       $actual .= $_POST['Champignon'].",";
       $actual .= $_POST['Bacon'].",";
       $actual .= $_POST['Cebolla'].",";
       $actual .= $_POST['Pimientos'].",";
       $actual .= $_POST['Calabacin'].",";
       $actual .= $_POST['salsa']."\n";
       $actual .= $_POST['masa']."\n";
       // Escribe el contenido al fichero
       file_put_contents($fichero, $actual);
       ?>
       <a href="lista.php">Ir a la lista</a>

    </div>
  </body>
</html>
