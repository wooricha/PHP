<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>strpos 129p</title>
  </head>
  <body>
    <?php
      $str = "web development"; //전체 문자열에 해당하는 문자열을 변수 str에 대입
      $findStr = 'd'; // 찾을 문자열에 해당하는 문자열을 변수 findStr에 대입
      $pos = strpos($str, $findStr); // strpos함수가 찾은 위치를 변수 pos에 대입
      echo "문자열 {$findStr}의 위치는 : ".$pos;
     ?>
  </body>
</html>
