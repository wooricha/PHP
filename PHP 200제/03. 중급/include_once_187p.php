<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>include_once 187p</title>
  </head>
  <body>
    <?php
      include "include2_183p.php";
      echo '<br>';
      include "include2_183p.php";
      echo '<br>'; //include로 파일을 여러번 불러옴
     ?>
     <?php
        echo '<br>';
       include "include2_183p.php";
       echo '<br>';
       include_once "include2_183p.php"; // include_once를 이용해 1번만 불러옴
      ?>
  </body>
</html>
