<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>parameterDefault 174p</title>
  </head>
  <body>
    <?php
      function sum($param1 = 50, $param2 = 100){
        $sum = $param1 + $param2;
        return $sum;
      }

      //argument를 모두 적어서 호출
      echo "sum(5, 10) = ".sum(5, 10);
      echo "<br>";
      //argument를 하나만 적어서 호출
      echo "sum(5) = ".sum(5);
      echo "<br>";
      //argument를 적지 않고 호출
      echo "sum() = ".sum();
      echo "<br>";
     ?>
  </body>
</html>
