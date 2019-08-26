<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>for반복문 안에 if 조건문 사용</title>
  </head>
  <body>
    <?php
      $sum = 0;
      $maxvalue = 50;
      for ($i=1; $i<=$maxvalue ; $i++) {
        if ($i % 2 == 0) {
          $sum += $i;
        }
      }
      echo "1부터 {$maxvalue}까지의 짝수 누적합 : {$sum}";
     ?>
  </body>
</html>
