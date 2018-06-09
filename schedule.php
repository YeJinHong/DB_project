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

  <h2>상영작 안내</h2>
    <table border="1">
      <tr>
        <td>영화 이름</td><td>영화 정보</td><td>상영관</td><td>좌석수</td><td>상영 시간</td>
        <?php
        $sql = "SELECT*FROM movie NATURAL JOIN schedule NATURAL JOIN theater";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          $filtered = array(
            'MovieName'=>htmlspecialchars($row['MovieName']),
            'MovieInfo'=>htmlspecialchars($row['MovieInfo']),
            'idTheater'=>htmlspecialchars($row['idTheater']),
            'Seats'=>htmlspecialchars($row['Seats']),
            'showTime'=>htmlspecialchars($row['showTime'])
          );
          ?>
          <tr>
            <td><?=$filtered['MovieName']?></td>
            <td><?=$filtered['MovieInfo']?></td>
            <td><?=$filtered['idTheater']?></td>
            <td><?=$filtered['Seats']?></td>
            <td><?=$filtered['showTime']?></td>
          </tr>
          <?php
        }
        ?>
      </tr>
    </table>


  </body>
</html>
