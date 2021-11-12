<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <body>
    <meta charset="utf-8">
    <title>Primer formulario procesado</title>
    <link rel="stylesheet" href="./estilo.css">
    <h1>Introduce tus datos :)</h1>
    <form class="" action="procesado.php" method="post">
      <p>Nombre:<input type="text" name="nombre" value=""></p>
      <p>Apodo:<input type="text" name="apodo" value=""></p>
      <p>Apellido:<input type="text" name="apellido" value=""></p>
      <p>Fecha de nacimiento:<input type="date" name="fecha-nacimiento"></p>
      <p>Color favorito: <input type="color" name="color"></p>
     <p>Tu nota en AW sera:<input type="number" min="0" max="10" name="nota"></p>
     <p>Signo del zodiaco:<select name="zodiaco">
                       <option value="aries">Aries</option>
                       <option value="tauro">Tauro</option>
                       <option value="geminis">Géminis</option>
                       <option value="cancer">Cáncer</option>
                       <option value="leo">Leo</option>
                       <option value="virgo">Virgo</option>
                       <option value="libra">Libra</option>
                       <option value="escorpio">Escorpio</option>
                       <option value="sagitario">Sagitario</option>
                       <option value="capricornio">Capricornio</option>
                       <option value="acuario">Acuario</option>
                       <option value="piscis">Piscis</option>
                     </select></p>
      <input type="submit" name="" value="enviar">
    </form>
  </body>
  </head>
</html>
