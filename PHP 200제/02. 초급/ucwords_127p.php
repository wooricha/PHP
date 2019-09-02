<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ucwords 127p</title>
  </head>
  <body>
    <?php
      $str = "everdevel, tomodevel, startwebcoding";
      echo ucwords($str);

      echo '<br>';

      $str = 'one sugar dream'; // 띄어쓰기가 들어간 영문을 변수 str에 대입
      $str = ucwords($str);
      echo $str;
     ?>
  </body>
</html>
