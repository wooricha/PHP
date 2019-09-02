<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>strlen 122p</title>
  </head>
  <body>
    <?php
      $str = "beanscent";
      echo "문자열 수 : ".strlen($str);

      echo '<br>';

      $str = " b e a n s c e n t ";
      echo "문자열 수 : ".strlen($str);

      // strlen함수에 사용할 문자열을 str변수에 대입
      // strlen함수가 띄어쓰기까지 문자열로 세는지 확인하기 위해 공백과 문자열을 입력
     ?>
  </body>
</html>
