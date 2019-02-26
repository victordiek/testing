<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Testing PHP Program control</title>

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
    <h1>Random number test</h1>
    <?php
      $number = rand(1, 100);
      if ($number > 50) {
        echo "<h2>The value $number is big!</h2>\n";
      } elseif ($number > 25) {
        echo "<h2>The value $number is medium</h2>\n";
      } else {
        echo "<h2>The value $number is small</h2>\n";
      }
    ?>
  </body>
</html>
