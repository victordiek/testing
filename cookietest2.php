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
    <h1>Retrieving the test cookie</h1>
    <?php if (isset($_COOKIE['test1'])) {
      $data = $_COOKIE['test1'];
      echo "<p>The cookie was set: $data</p>\n";
    } else {
      echo "<p>no cookie</p>\n";
    }
    ?>
  </body>
</html>
