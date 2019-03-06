<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>

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
    <h1>Items:</h1>
    <form action="carttest.php" method="post">
      <table>
        <tr>
          <th>Item</th><th>Quantity</th>
        </tr>
        <tr>
          <td>Apples</td><td><input type="text" name="apples" size="2"</td>
        </tr>
        <tr>
          <td>Bananas</td><td><input type="text" name="bananas" size="2"</td>
        </tr>
      </table>
      <input type="submit" value="Click to add to cart">
    </form>
    <br>
    <?php
      if (isset($_POST['apples'])) {
        if (is_numeric($_POST['apples'])) {
          $_SESSION['cart']['apples'] = $_POST['apples'];
        } elseif ($_POST['apples'] == "Remove") {
          unset($_SESSION['cart']['apples']);
        }
      }

      if (isset($_POST['bananas'])) {
        if (is_numeric($_POST['bananas'])) {
          $_SESSION['cart']['bananas'] = $_POST['bananas'];
        } elseif ($_POST['bananas'] == "Remove") {
          unset($_SESSION['cart']['bananas']);
        }
      }
    ?>
    <fieldset style="width:300px">
      <legend>Current Cart</legend>
      <?php
        if (!isset($_SESSION['cart'])) {
          $_SESSION['cart'] = array();
          echo "Your cart is empty\n";
        } else {
          echo "<form action=\"carttest.php\" method=\"post\">\n";
          echo "<table>\n";
          echo "<tr><th>Item</th><th>Quantity</th></tr>\n";
          foreach($_SESSION['cart'] as $key => $value) {
            echo "<tr><td>$key</td><td>$value</td>\n";
            echo "<td><input type=\"submit\" name=\"$key\" value=\"Remove\"></td></tr>\n";
          }
          echo "</table>\n";
          echo "</form>\n";
        }
      ?>
    </fieldset>
  </body>
</html>
