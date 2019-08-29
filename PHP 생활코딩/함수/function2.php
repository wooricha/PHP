<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    echo "Welcome";
  }
}//제목 WEB -> function.php 연결
function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("함수/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('../함수');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<li><a href=\"function.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="function.php">WEB</a></h1>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
     ?>
  </body>
</html>
