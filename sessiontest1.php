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
    <h1>Setting a session cookie</h1>
    <?php
      $_SESSION['test2'] = "test cookie 2";
    ?>
    <a href="sessiontest2.php">Click to continue</a>
  </body>
</html>
