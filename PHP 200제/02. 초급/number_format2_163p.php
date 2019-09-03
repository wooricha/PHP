<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>number_format2 163p</title>
  </head>
  <body>
    <?php
      $num = 123456789.794; // 123456789.794 값을 변수 num에 대입
      echo number_format($num, 2);
      // number_format함수에 123456789.794값을 첫번째 값으로 전달하고 두번째 값으로 2(소수점 둘째자리까지 표시를 의미)를 전달
     ?>
  </body>
</html>
