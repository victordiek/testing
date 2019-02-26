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
    <h1>Testing PHP OOP code</h1>
    <?php
      class Product {
        public $description;
        public $price;
        public $inventory;
        public $onsale;

        public function buyProduct($amount) {
          $this->inventory -= $amount;
        }
      }

      $prod1 = new Product();
      $prod1->description = "Carrots";
      $prod1->price = 1.50;
      $prod1->inventory = 10;
      $prod1->onsale = false;
      echo "<p>Added $prod1->description<p>\n";

      $prod2 = new Product();
      $prod2->description = "Eggplants";
      $prod2->price = 2.00;
      $prod2->inventory = 5;
      $prod2->onsale = true;
      echo "<p>Added $prod2->description<p>\n";

      echo "<p>Now buying 4 carrots...<p>\n";
      $prod1->buyProduct(4);
      echo"<p>Inventory of $prod1->description is now $prod1->inventory</p>\n";
      echo"<p>Inventory of $prod2->description is still $prod2->inventory</p>\n";
    ?>
  </body>
</html>
