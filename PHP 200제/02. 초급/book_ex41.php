<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>foreach 111p</title>
  </head>
  <body>
    <?php
      $memberList = ['name'=>'미우','id'=>'miu'];

      foreach ($memberList as $index => $value) {
        echo "인덱스 {$index}의 값 : {$value}";
        echo '<br>';
      }
     ?>
  </body>
</html>
