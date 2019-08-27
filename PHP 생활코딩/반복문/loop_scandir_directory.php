<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <h1><a href="loop_scandir_directory.php">WEB</a></h1>
  <body>
    <ol>
      <?php
        /*
        반복문을 사용하지 않았을 경우 코드
        echo "<li>$list[0]</li>";
        echo "<li>$list[1]</li>";
        echo "<li>$list[2]</li>";
        echo "<li>$list[3]</li>";
        echo "<li>$list[4]</li>";
        echo "<li>$list[5]</li>";
        */
        $list = scandir('../반복문');
        // ./:현재 디렉토리 ../:부모 디렉토리
        //배열 폴더안에 있는 디렉토리를 가져온다
        //그 데이터를 $list안에 넣는다
        $i = 0;
        while ($i < 6) {
          echo "<li>$list[$i]</li>";
          $i = $i + 1;
        }
        //$i<6은 개수가 정해져 있다 : 정적이다
        ?>
        <?php
          $list = scandir('../반복문');
          $i = 0;
          while ($i < count($list)) {
            echo "<li><a href=\"loop_scandir_directory.php?id=$list[$i]\">$list[$i]</a></li>";
            // \직후에 나오는 코드는 기능을 무시하고 문자로 인식
            $i = $i + 1;
        }
        //그때그때 동적으로 만들어 주려면
        //Count():개수를 세어주는 함수
        /*
        결과 소스코드
          <li><a href="loop_scandir_directory.php?id=.">.</a></li>
          <li><a href="loop_scandir_directory.php?id=..">..</a></li>
          <li><a href="loop_scandir_directory.php?id=Readme.md">Readme.md</a></li>
          <li><a href="loop_scandir_directory.php?id=loop_scandir_directory.php">loop_scandir_directory.php</a></li>
          <li><a href="loop_scandir_directory.php?id=loop_statements.php">loop_statements.php</a></li>
        */
       ?>
    </ol>
  </body>
</html>
