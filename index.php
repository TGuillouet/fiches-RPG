<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <style media="screen">
      body {
        font-family:"trebuchet ms",sans-serif;
        font-size:140%;
      }
      select {
        width:100%;
        padding : 1%;
      }

      input, button {
        margin: 5px;
        width: 100%;
        padding: 1%;
        font-size: 100%;
        border : solid 1px black;
      }
      input[type=submit], button {
        border-radius: 10px;
        background-color: white;
      }
    </style>
    <title>RPG Stat</title>
  </head>
  <body>
    <div class="stats">
      <?php
      include('select.php');
      if(isset($chara) && $chara != '#'){
        $fichierouvert = fopen ($chara.'.txt', 'r+');
        while (($buffer = fgets($fichierouvert, 4096)) !== false) {
          echo $buffer . '<br />';
        }
        fclose ($fichierouvert);
      }
      ?>
      <br><br>
      Voir les statistiques d'un personnage:<br><br>
      <form class="" action="index.php" method="post">
        <label for="" >Nom du personnage:</label><br>
        <select class="" name="charaname">
          <option value="#" selected>-Sélectionnez votre personnage-</option>
          <option value="Manfrite" >Manfrite</option>
          <option value="Wazo">Wazo</option>
          <option value="Kuro">Kuro</option>
          <option value="flo">flo</option>
        </select>
        <input type="submit" name="" value="Voir">
        <button type="button" class="btnstats">Modifier les stats</button>
      </form>
    </div>
    <br>
    <br>
    <div class="modify" style="display: none;">
      Modifier les statistiques d'un personnage:<br><br>
      <form class="" action="file.php" method="post">
        <label for="">Nom du personnage:</label><br>
        <select class="" name="name">
          <option value="#" selected>-Sélectionnez votre personnage-</option>
          <option value="Manfrite" >Manfrite</option>
          <option value="Wazo">Wazo</option>
          <option value="Kuro">Kuro</option>
        </select><br>
        <label for="">Force :</label><input class="force" type="text" name="force" value="0"><br>
        <label for="">Intelligence :</label><input class="intel" type="text" name="intel"value="0"><br>
        <label for="">Toucher :</label><input class="toucher" type="text" name="toucher" value="0"><br>
        <label for="">Pouvoir :</label><input class="pouvoir" type="text" name="pouvoir" value="0"><br>
        <input type="submit" class="submit" value="Modifier"></input>
      </form>
      <button type="button" class="btnmodify">Voir les stats</button>
    </div>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
      $(function() {
        $('.btnstats').click(function() {
          $('.stats').css('display', 'none');
          $('.modify').css('display', 'block')
        });
        $('.btnmodify').click(function() {
          $('.stats').css('display', 'block');
          $('.modify').css('display', 'none')
        });
      });
    </script>
  </body>
</html>
