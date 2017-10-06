<?php
if(isset($_POST['name'])){
  $pseudo = $_POST['name'];
  $force = $_POST['force'];
  $intel = $_POST['intel'];
  $toucher = $_POST['toucher'];
  $pouvoir = $_POST['pouvoir'];
  $fichierouvert = fopen ($pseudo.'.txt', 'r+');
  if (!fwrite($fichierouvert, 'Pseudo: ' . $pseudo . PHP_EOL . 'Force: ' . $force . PHP_EOL . 'Intelligence: ' . $intel . PHP_EOL . 'Toucher: ' . $toucher . PHP_EOL . 'Pouvoir: ' . $pouvoir . PHP_EOL)) {
    die("Impossible d'écrire dans le fichier 'config.txt'");
  }
  fclose ($fichierouvert);
}
header('location:index.php');
?>
