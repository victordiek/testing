<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP While Test</title>

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
      <h1>The Beatles</h1>
      <?php
      $group = array("John", "Paul", "George", "Ringo");
      $count = 0;
      while ($count < 4) {
        echo "Member #$count of the Beatles is
          $group[$count]<br>\n";
          $count++;
      }
      ?>
  </body>
</html>
