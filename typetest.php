<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data Type Test</title>
    <style media="screen">
      .warning {
        color: red;
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
    <h1>Form results:</h1>
    <?php
      $name = htmlspecialchars($_POST['name']);
      $email = htmlspecialchars($_POST['email']);
      $age = htmlspecialchars($_POST['age']);

      echo "<p>Name: $name</p>\n";
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>Email: $email</p>\n";
      } else {
        echo "<p class='warning'>Please enter a valid email address</p>\n";
      }
      if (is_numeric($age)) {
        echo "<p>Age: $age</p>\n";
      } else {
        echo "<p class='warning'>Please enter a valid age</p>\n";
      }
    ?>
    <br>
    <a href="typetest.html">Return to form</a>
  </body>
</html>
