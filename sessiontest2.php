<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Testing Session Cookies</title>

    <!--Nav Bar-->
    <script src=jquery-3.3.1.min.js></script>

    <div id="nav-placeholder">

    </div>

    <script>
    $(function(){
      $("#nav-placeholder").load("nav.html");
    });
    </script>
    <!--End Nav Bar-->
  </head>
  <body>
    <h1>Retrieving session cookie</h1>
    <?php
      if (isset($_SESSION['test2'])) {
        $data = $_SESSION['test2'];
        echo "<p>Session cookie: $data</p>\n";
      } else {
        echo "<p>Error accessing the session cookie</p>\n";
      }
    ?>
    <a href="sessiontest1.php">Back to start</a>
  </body>
</html>
