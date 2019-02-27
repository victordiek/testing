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
    <h1>Testing the PHP class</h1>
    <?php

      spl_autoload_register(function($class) {
        include $class . ".inc.php";
      });

      $prod1 = new Product("Carrots", 4.00, 10, false);
      echo "<p>Creating product:</p>\n";
      echo $prod1;

      $prod2 = new Product("Eggplant", 2.00, 5, true);
      echo "<p>Creating product:</p>\n";
      echo $prod2;

      echo "<p>Putting $prod1->description on sale:</p>\n";
      $prod1->price = 3.00;
      $prod1->putonsale();
      echo "<p>New product status:</p>\n";
      echo $prod1;

    ?>
  </body>
</html>
