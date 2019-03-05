<?php
  if (!isset($_COOKIE['test1'])) {
    setcookie("test1", "This is a test cookie", time() + 600);
  } else {
    setcookie("test1", "", time() - 1);
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Deleting a cookie</title>

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
    <h1>Cookie status</h1>
    <?php
      if (isset($_COOKIE['test1'])) {
        $data = $_COOKIE['test1'];
        echo "<p>Cookie set: $data</p>\n";
      } else {
        echo "<p>Cookie not set</p>\n";
      }
    ?>
    <a href="cookietest3.php">Click to try again</a>
  </body>
</html>
