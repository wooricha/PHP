<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>microtime 154p</title>
  </head>
  <body>
    <?php
      //마이크로초를 따로 표시
      echo microtime();
      echo "<br>";
      //마이크로초를 함께 표시
      echo microtime(true);
     ?>
  </body>
</html>
