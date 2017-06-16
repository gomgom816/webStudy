<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php
      //echo file_get_contents("1.txt");
      echo file_get_contents($_GET['id'].".txt");
     ?>
  </body>
</html>
