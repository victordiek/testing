<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>XSS Test</title>
    <style media="screen">
      input {
        margin: 5px
      }
    </style>

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
    <h1>XSS Test</h1>
    <?php
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_STRING);
    echo "<p>Welcome, $fname</p>\n";
    ?>
    <h2>end of test</h2>
  </body>
</html>
