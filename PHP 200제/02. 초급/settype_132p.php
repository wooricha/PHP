<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>settype 132p</title>
  </head>
  <body>
    <?php
      $val = "true"; // settype함수를 확인하기 전에 값을 확인하기 위한 변수 선언
      echo "변수 val의 데이터형 ".gettype($val); // gettype함수를 사용해 데이터형 확인

      echo "<br>";
      settype($val, 'bool'); // 데이터형을 boolean으로 변경, bool과 boolean은 동일
      echo "변수 val의 데이터형 ".gettype($val); // 데이터형이 boolean으로 변경되었는지 확인
      echo "<br>";
      var_dump($val); // 데이터형을 변경 후 값은 어떻게 변경되었는지 확인하기 위해 var_dump함수를 사용해 값을 확인
     ?>
  </body>
</html>
