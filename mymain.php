<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Testing PHP includes</title>

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
    <header>
      <?php require ("mybadinclude.inc.php"); ?>
    </header>
    <section>
      <br><br>
      <h2>This is the the body</h2>
    </section>
  </body>
</html>
