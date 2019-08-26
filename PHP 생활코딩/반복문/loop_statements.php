<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>loop</title>
  </head>
  <body>
    <h1>while</h1>
    <?php
      echo '1<br>';
      $i = 0;
      while($i < 3){
        echo '2<br>';
        $i = $i + 1;
      }
      //1.0<3 true -> 2
      //2.1<3 true -> 2
      //3.2<3 true -> 2
      //4.3<3 false -> 종료
      echo '3<br>';
     ?>
  </body>
</html>
