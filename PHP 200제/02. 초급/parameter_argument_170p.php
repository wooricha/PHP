<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>parameter, argument 170p</title>
  </head>
  <body>
    <?php
      /*
      argument 사용법
      함수명 (argument1, argument2);
      */
      /*
      parameter 사용법
      함수명 (parameter1, parameter2);
      */
      // 함수생성
      function sum($num1, $num2){
        $sum = $num1 + $num2;
        echo $sum;
      }

      //argument 5와 10을 전달
      sum(5, 10);
     ?>
  </body>
</html>
