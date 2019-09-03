<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>return 172p</title>
  </head>
  <body>
    <?php
      //함수 생성
      function sum($num1, $num2){
        $sum = $num1 + $num2;
        return $sum;

        //아래의 코드는 작동하지 않음
        echo '함수';
      }

      //argument 5와 10을 전달
      echo sum(5,10);

      $plus = sum(5, 10);
      echo '<br>';
      echo $plus + 20;
     ?>
  </body>
</html>
