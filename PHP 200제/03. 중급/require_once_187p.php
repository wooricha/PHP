<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>require_once 187p</title>
  </head>
  <body>
    <?php
      require "include2_183p.php";
      echo '<br>';
      require "include2_183p.php";
      echo '<br>'; //require로 파일을 여러번 불러옴
     ?>
     <?php
        echo '<br>';
       require "include2_183p.php";
       echo '<br>';
       require_once "include2_183p.php"; //require_once를 이용해 1번만 불러옴
      ?>
  </body>
</html>
