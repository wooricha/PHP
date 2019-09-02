<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>str_replace 123p</title>
  </head>
  <body>
    <?php
      $str = "Welcome to everdevel"; // 치환할 문자열을 변수 str에 대입

      //변수 str에 있는 everdevel을 beanscent로 치환
      $changeWord = str_replace('everdevel', 'beanscent', $str); // str_replace함수가 반환한 값을 변수 changeWord에 대입
      echo $changeWord;
     ?>
  </body>
</html>
