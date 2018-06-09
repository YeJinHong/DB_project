<?php
$conn = mysqli_connect('localhost', 'root', 'mountainwithme0717', 'project_movie');

$article = array(
'title'=>'Welcome',
'description'=>'DB시네마 메인 페이지입니다.'
);

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DB시네마</title>
  </head>
  <body>
    <h1><a href="mainsite.php">DB시네마</a></h1>
    <ol>
    <a href="movies.php">상영작</a>
    <p><a href="schedule.php">상영스케쥴</a></p>
    <p><a href="information.php">이용안내</a></p>
    </ol>

    <h2><?=$article['title']?></h2>
      <p><?=$article['description']?></p>
  </body>
</html>
