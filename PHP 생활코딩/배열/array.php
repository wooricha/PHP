<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>array</title>
  </head>
  <body>
    <h1>array</h1>
    <?php
      $coworkers = array('egoing', 'leezche', 'duru', 'taeho');
      //변수 coworkers에 배열을 담음
      echo $coworkers[1].'<br>'; //leezche
      echo $coworkers[3].'<br>'; //taeho
      //count() : 숫자를 세는 함수
      //var_dump : 데이터 타입을 나타내주는 함수
      var_dump(count($coworkers)); //int(4)

      //array_push($변수명,추가값) : 배열에 값을 추가하고 싶을 때 사용하는 함수
      array_push($coworkers, 'graphittie');
      var_dump($coworkers);
     ?>
  </body>
</html>
