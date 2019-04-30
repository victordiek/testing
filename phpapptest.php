<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>App Test</title>

    <!--Nav Bar-->
    <script src=jquery-3.3.1.min.js></script>
?
    <div id="nav-placeholder">

    </div>

    <script>
    $(function(){
      $("#nav-placeholder").load("nav.html");
    });
    </script>
    <!--End Nav Bar-->

    <style>
      table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>My Bowling Team</h1>
      <tr><th>Bowler</th><th>Games Played</th><th>Average</th></tr>
      <?php
        $db = new mysqli("localhost", "appuser1", "MyL0ngP@ssword", "apptest1");
        if (!$db) {
          echo "Sorry, I could not connect to the database server";
          exit;
        }

        $query = "SELECT bowlerid, name FROM bowlers ORDER BY name";
        $result = $db->query($query);
        while($row = $result->fetch_assoc()) {
          $bowlerid = $row['bowlerid'];
          $name = $row['name'];
          $query2 = "SELECT COUNT(score) AS games, AVG(score) AS average FROM games" .
          " WHERE bowlerid = $bowlerid";
          $result2 = $db->query($query2);
          $row2 = $result2->fetch_assoc();$games = $row2['games'];
          $average = $row2['average'];
          echo "<tr><td>$name</td><td>$games</td><td>$average</td>\n";
        }
      ?>
  </body>
</html>
