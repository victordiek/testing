<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP Function Test</title>

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
    <?php
      function factorial($value1) {
      $factorial = 1;
      $count = 1;
      while($count <= $value1) {
        $factorial *= $count;
        $count++;
      }
      return $factorial;
      }
    ?>
    <h1>Calculating factorials</h1>
    <?php
      echo "The factorial of 10 is " . factorial(10) . "<br>\n";
      echo "The factorial of 5 is " . factorial(5) . "<br>\n";
    ?>
  </body>
</html>
