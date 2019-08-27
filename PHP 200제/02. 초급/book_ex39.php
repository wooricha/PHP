<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>foreach 109p</title>
  </head>
  <body>
    <?php
      $memberList = ['미우','유나','민후','해윤'];

      foreach ($memberList as $ml) {
        echo $ml;
        echo '<br>';
        /*foreach ($배열변수 as $배열의 값을 대입할 변수) {
          배열의 값을 대입할 변수 사용*/
        }
      }
     ?>
  </body>
</html>
