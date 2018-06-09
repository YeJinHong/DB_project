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

    <h2>가격표</h2>

    <table border="1">
      <tr>
        <td>구분</td><td>가격</td>
        <?php
        $sql = "SELECT*FROM pricetable";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          $filtered = array(
            'Class'=>htmlspecialchars($row['Class']),
            'Price'=>htmlspecialchars($row['Price']),
          );
          ?>
          <tr>
            <td><?=$filtered['Class']?></td>
            <td><?=$filtered['Price']?></td>
          </tr>
          <?php
        }
        ?>
      </tr>
    </table>

    <h2>상영관 정보</h2>

    <table border="1">
      <tr>
        <td>상영관</td><td>위치(floor)</td><td>좌석수</td>
        <?php
        $sql = "SELECT*FROM theater";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          $filtered = array(
            'idtheater'=>htmlspecialchars($row['idtheater']),
            'Location'=>htmlspecialchars($row['Location']),
            'Seats'=>htmlspecialchars($row['Seats']),
          );
          ?>
          <tr>
            <td><?=$filtered['idtheater']?></td>
            <td><?=$filtered['Location']?></td>
            <td><?=$filtered['Seats']?></td>
          </tr>
          <?php
        }
        ?>
      </tr>
    </table>




  </body>
</html>
