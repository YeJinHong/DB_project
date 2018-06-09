<?php
$conn = mysqli_connect('localhost', 'root', 'mountainwithme0717', 'project_movie');
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

    <h2>상영작</h2>
    <table border="1">
      <tr>
        <td>idMovie</td><td>영화 이름</td><td>영화 정보</td>
        <?php
        $sql = "SELECT*FROM movie";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          $filtered = array(
            'idMovie'=>htmlspecialchars($row['idMovie']),
            'MovieName'=>htmlspecialchars($row['MovieName']),
            'MovieInfo'=>htmlspecialchars($row['MovieInfo']),
          );
          ?>
          <tr>
            <td><?=$filtered['idMovie']?></td>
            <td><?=$filtered['MovieName']?></td>
            <td><?=$filtered['MovieInfo']?></td>
          </tr>
          <?php
        }
        ?>
      </tr>
    </table>
    <h3>독전</h3>
    <img src="독전.jpg" width="200" >
    <h3>데드풀</h3>
    <img src="데드풀.jpg" width="200" >
    <h3>어벤져스-인피니티워</h3>
    <img src="어벤져스-인피니티워.jpg" width="200" >
    <h3>쥬라기월드-폴른킹덤</h3>
    <img src="쥬라기월드-폴른킹덤.jpg" width="200">



  </body>
</html>
