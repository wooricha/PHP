<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>continue 103p</title>
  </head>
  <body>
    <?php
      for ($i=0; $i < 10; $i++) {
        if ($i == 5) {
          continue;
        }
        echo $i.',';
      }
     ?>
  </body>
</html>
