<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>includeNoneFile 185p</title>
  </head>
  <body>
    <?php
      include "noneFile.php"; // include문의 경로에 없는 파일 입력
      echo "페이지에 오류가 없습니다."; // 존재하지 않은 페이지를 불러오도록 했지만 include를 사용했으므로 오류없이 페이지 표시
     ?>
  </body>
</html>
