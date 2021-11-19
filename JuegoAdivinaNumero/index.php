  <?php
    session_start();

    if( ! isset($_POST["numero"])){//si no envio nada
      $_SESSION["numero"]=rand(1,10);
      $_SESSION["intentos"]=0;
    }
    $numero_aleatorio=$_SESSION["numero"];
    $intentos=$_SESSION["intentos"];
    $_SESSION["intentos"]=$_SESSION["intentos"]+1;
  ?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title>El adivinador</title>
      <link rel="stylesheet" href="/estilo.css">
    </head>
    <body>
      <h1>ADIVINA EL NUMERO(MAXIMO 10)</h1>
      <div>
        <form class="" action="index.php" method="post">
          <input type="text" name="numero" value="">
          <input type="submit" name="" value="Enviar">
        </form>
        <?php
        if (isset($_POST["numero"] ) ){
            echo "<h3> Has enviado algo: ". $_POST["numero"]. "</h3>";
            if ($numero_aleatorio == $_POST["numero"]) {
              echo "<img src=./ganar.gif >";
            }
            if ($numero_aleatorio < $_POST["numero"]) {
              echo "<img src=./menos.png >";
            }
            if ($numero_aleatorio > $_POST["numero"]) {
              echo "<img src=./mas.jpg >";
            }
            if ($intentos > 4) {
              echo "<h1>Eres bastante malo has fallado mas de 4 veces replanteatelo</h1>";
              echo "<img src=./calavera.jpeg >";
            }
      } else {
            echo "Bienvenido al juego";
        }
         ?>
      </div>
      <p>
        <a href="index.php">Reiniciar partida</a>
      </p>
      INTENTOS:
      <?php
        echo $intentos
      ?>
  </body>
</html>
