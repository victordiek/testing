<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP OOP Test</title>

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
    <h1>Testing inheritance in PHP OOP</h1>
    <?php

      spl_autoload_register(function($class) {
        include $class . ".inc.php";
      });

      $prod1 = new Soda("Root Beer", 1.25, 10, false, 18);
      echo $prod1;

      echo "<p>Buying 6 bottles:</p>\n";
      $prod1->buyProduct(6);
      echo $prod1;

      echo "<p>Restocking 4 bottles:</p>\n";
      $prod1->restock(4);
      echo $prod1;
    ?>
  </body>
</html>
