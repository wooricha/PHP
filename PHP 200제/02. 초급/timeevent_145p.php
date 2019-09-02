<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>timeevent 145p</title>
  </head>
  <body>
    <?php
      // 현재 테스트 가능한 시작 시간, 종료 시간을 입력

      // 시작 시간 설정 2019년 1월 1일 0시 0분 0초
      $startTime = mktime(0, 0, 0, 1, 1, 2019);

      //종료 시간 설정 2019년 1월 1일 0시 59분 59초
      $endTime = mktime(0, 59, 59, 1, 1, 2019);

      $nowTime = time();

      if ($nowTime >= $startTime && $nowTime <= $endTime) {
        echo "현재 이벤트에 참여할 수 있는 시간입니다.";
      }else{
        echo "이벤트 시작 전이거나 종료되었습니다.";
      }
     ?>
  </body>
</html>
