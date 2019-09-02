<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>trim() 118p</title>
  </head>
  <body>
    <?php
      $str = " 양쪽 모두 공백 없앰 ";
      echo '|'.trim($str)'|'; // \는 공백 확인을 위해 사용
      echo "<br>";

      $str = " 앞만 공백 없앰 ";
      echo '|'.ltrim($str).'|'; // \는 공백 확인을 위해 사용
      echo "<br>";

      $str = " 뒤만 공백 없앰 ";
      echo '|'.rtrim($str).'|'; // \는 공백 확인을 위해 사용
     ?>
  </body>
</html>
