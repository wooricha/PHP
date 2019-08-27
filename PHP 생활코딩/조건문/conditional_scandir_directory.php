<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <h1><a href="conditional_scandir_directory.php">WEB</a></h1>
  <body>
    <ol>
        <?php
          $list = scandir('../조건문');
          $i = 0;
          while ($i < count($list)) {
            if($list[$i] != '.'){
              if($list[$i] != '..'){
            //.,..이 나오지 않도록 설정
            // != 다를때 true 같을때 fasle
            echo "<li><a href=\"conditional_scandir_directory.php?id=$list[$i]\">$list[$i]</a></li>";
            // \직후에 나오는 코드는 기능을 무시하고 문자로 인식
              }
            }
            $i = $i + 1;
        }
        //그때그때 동적으로 만들어 주려면
        //Count():개수를 세어주는 함수
        /*
        결과 소스코드
          <li><a href="conditional_scandir_directory.php?id=Readme.md">Readme.md</a></li>
          <li><a href="conditional_scandir_directory.php?id=loop_scandir_directory.php">loop_scandir_directory.php</a></li>
          <li><a href="conditional_scandir_directory.php?id=loop_statements.php">loop_statements.php</a></li>
        */
       ?>
    </ol>
  </body>
</html>
