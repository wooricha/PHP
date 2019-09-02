<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>substr 124p</title>
  </head>
  <body>
    <?php
      $str = "everdevel"; //자를 문자열을 변수 str에 대입

      // 0자리 시작하여 5글자를 자른 후 cutStr에 대입
      $cutStr = substr($str, 0, 5);

      echo $cutStr;
     ?>
  </body>
</html>
