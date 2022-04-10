<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
      echo '<p>Hello World</p>';
      $today = date('d/m/Y');
      echo "<p>Hoje é dia ${today}</p>";
      $timeNow = date('H:i:s');
      echo "<p>Agora são ${timeNow}</p>";
      echo <<<"FOOBAR"
        <ol>
          <li><a href="./projects/calendario.php">Calendário</a></li>
          <li><a href="./projects/tarefas.php">Tarefas</a></li>
          <li><a href="./desafios/desafio-date.php">Desafio date</a></li>
          <li><a href="./desafios/desafio-php-com-html.php">Desafio PHP com HTML</a></li>
          <li><a href="./desafios/desafio-lista-de-contatos.php">Desafio Lista de Contatos</a></li>
        </ol>
        FOOBAR;
    ?> 
  </body>
</html>