<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP foreach Test</title>

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
    <h1>My favorites</h1>
    <?php
      $favs = array("fruit"=>"banana","veggie"=>"carrot","meat"=>"roast beef");
      foreach($favs as $food => $type) {
        echo "$food - $type<br>\n";
      }
    ?>
  </body>
</html>
