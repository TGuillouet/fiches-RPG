<?php
session_start();
$pseudo = $_SESSION['name'];
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="stats">
      <?php

      $fichierouvert = fopen ($pseudo.'.txt', 'r+');
      while (($buffer = fgets($fichierouvert, 4096)) !== false) {
        echo $buffer . '<br />';
      }

      fclose ($fichierouvert);
       ?>
    </div>
  </body>
</html>
