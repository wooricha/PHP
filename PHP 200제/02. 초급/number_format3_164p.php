<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>number_format3 164p</title>
  </head>
  <body>
    <?php
      $num = 123456789.794;
      echo number_format($num, 2, '-', ':');
      // number_format함수의 3번째 값으로 '-', 4번째 값으로 ':'를 입력
      // ':'는 ','대신 사용되고 '-'는 '.' 대신 사용
     ?>
  </body>
</html>
