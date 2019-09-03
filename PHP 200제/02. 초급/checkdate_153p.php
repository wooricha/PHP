<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>checkdate 153p</title>
  </head>
  <body>
    <?php
      $isDateCheck = checkdate(2, 29, 2019);
      // 2019년 2월 29일이 유효한 날짜인지 확인
      if ($isDateCheck) {
        echo "유효한 날짜입니다.";
      }else{
        echo "유효하지 않은 날짜입니다.";
      } // 반환값이 true, false로 반환
     ?>
  </body>
</html>
