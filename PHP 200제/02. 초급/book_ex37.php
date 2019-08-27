<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>for in for 105p</title>
  </head>
  <body>
    <?php
      for ($i=1; $i <= 3; $i++) {
        echo "바깥쪽 for문 횟수 : {$i}<br>";

        for ($n=1; $n <= 3; $n++) {
          echo "안쪽 for문 횟수 : {$n}<br>";
        }
        echo '<br>';
      }
     ?>
  </body>
</html>
