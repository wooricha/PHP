<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>rand 165p</title>
  </head>
  <body>
    <?php
      $randNum = rand(1, 3); // rand함수를 사용하여 1부터 3까지의 수 중 하나를 변수 randNum에 대입
      $kawibawibo = ''; // 가위, 바위, 보 중 하나의 값을 대입할 변수 kawibawibo를 선언

      switch ($randNum) {
        case 1:
          $kawibawibo = '가위';
          break;
        case 2:
          $kawibawibo = '바위';
          break;
        case 1:
          $kawibawibo = '보';
          break;

        default:
          $kawibawibo = '';
          break;
      }
      // 변수 randNum의 값에 따라 1이면 가위, 2이면 바위, 3이면 보를 변수 kawibawibo에 값으로 대입
      echo "컴퓨터의 선택은 : {$kawibawibo}";
     ?>
  </body>
</html>
