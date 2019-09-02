<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>empty 134p</title>
  </head>
  <body>
    <?php
      $var = '';
      echo '값이 빈 문자열인 경우';
      var_dump(empty($var));
      echo '<br>';

      $var = NULL; // 소문자로 작성해도 무관
      echo '값이 NULL인 경우';
      var_dump(empty($var));
      echo '<br>';

      $var = array(); //array 대신 []를 작성해도 무관
      echo '값이 NULL인 경우';
      var_dump(empty($var));
      echo '<br>';

      $var = 0;
      echo '값이 정수 0인 경우';
      var_dump(empty($var));
      echo '<br>';

      $var = '0';
      var_dump(empty($var));
      echo '<br>';

      $var = 'string';
      echo '값이 문자열 string 경우';
      var_dump(empty($var));
    ?>
  </body>
</html>
