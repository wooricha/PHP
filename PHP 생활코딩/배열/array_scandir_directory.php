<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <h1><a href="array_scandir_directory.php">WEB</a></h1>
  <body>
    <ol>
      <?php
        $list = scandir('../배열');
        // ./:현재 디렉토리 ../:부모 디렉토리
        //배열 폴더안에 있는 디렉토리를 가져온다
        //그 데이터를 $list안에 넣는다
        var_dump($list);
       ?>
    </ol>
  </body>
</html>
