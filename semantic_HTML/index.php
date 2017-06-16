<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>semantic HTML</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png">
      <h1><a href="http://localhost/webStudy/semantic_HTML/index.html">JavaScript</a></h1>
    </header>

    <nav>
      <ol>
        <?php
          echo file_get_contents("list.txt");
         ?>
      </ol>
    </nav>
    <article>
      <?php
      if( empty($_GET['id']) == false ){
          echo file_get_contents($_GET['id'].".txt");
        }
       ?>
    </article>
  </body>
</html>
