<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>isset 130p</title>
  </head>
  <body>
    <?php
      if (isset($str)) {
        echo "변수 str이 존재합니다.";
      }else{
        echo "변수 str이 존재하지 않습니다.";
      } // 선언되지 않은 변수인 str을 isset함수로 존재 유무를 확인

      echo "<br>";

      $str = "string"; // 변수 str을 선언

      if (isset($str)) {
        echo "변수 str이 존재합니다.";
      }else{
        echo "변수 str이 존재하지 않습니다.";
      } // 변수가 선언되었으므로 작동해 true를 반환
     ?>
  </body>
</html>
