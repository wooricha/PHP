<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>break</title>
  </head>
  <body>
    <?php
      for ($i=0; $i < 10; $i++) {
        if ($i == 5) {
          break;
        }
        echo $i.',';
      }
     ?>
  </body>
</html>
