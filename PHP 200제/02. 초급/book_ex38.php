<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>for multiple 106p</title>
  </head>
  <body>
    <?php
      for ($i=2; $i <= 3; $i++) {
        echo "{$i}단<br>";

        for ($n=0; $n <= 9; $n++) {
          $mul = $i * $n;
          echo "{$i} 곱하기 {$n} = {$mul}<br>";
        }
        echo "<br><br>";
      }
     ?>
  </body>
</html>
