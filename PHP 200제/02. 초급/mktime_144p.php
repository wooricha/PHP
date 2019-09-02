<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>mktime 144p</title>
  </head>
  <body>
    <?php
      echo "2020년 01월 01일 9시 15분 10초의 타임스탬프는? <br>";
      $timeStamp = mktime(9, 15, 10, 1, 1, 2020);
      // 2020년 01월 01일 9시 15분 10초의 시간을 mktime함수에 보내는 값으로 시, 분, 초, 년, 월, 일 순으로 입력하며 반환값을 변수 timeStamp에 대입
      echo $timeStamp;
     ?>
  </body>
</html>
