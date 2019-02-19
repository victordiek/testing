<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Testing PHP Data</title>

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
    <h1>PHP Data Type Test</h1>
    <?php
      $name = "Rich";
      $age = 100;
      $salary = 575.25;
      echo "<h2>Infomation for $name</h2> \n";
      echo "Age: $age<br>\n";
      echo "Salary: $$salary\n"
    ?>
    <h1>End test</h1>
  </body>
</html>
