<?php
setcookie("test1", "This is a test cookie", time() + 600);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Cookie Test</title>

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
    <h1>Trying to set a cookie</h1>
  </body>
</html>
