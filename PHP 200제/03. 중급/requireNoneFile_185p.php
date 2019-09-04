<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>requireNoneFile 185p</title>
  </head>
  <body>
    <?php
      require "noneFile.php"; //require문의 경로에 없는 파일 입력
      echo "페이지에 오류가 없습니다."; //require을 사용해 존재하지 않는 파일을 불러왔으므로 페이지에 오류가 발생
     ?>
  </body>
</html>
