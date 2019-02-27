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
    <h1>testing PHP OOP set and get</h1>
    <?php
      class Product {
        private $description;
        private $price;
        private $inventory;
        private $onsale;

        public function __set($name, $value) {
          if ($name == "price" && $value < 0) {
            echo "<p>Invalid price set</p>\n";
            $this->price = 0;
          } elseif ($name == "inventory" && $value < 0) {
            echo "<p>Invalid inventory set: $value</p>\n";
          } else {
            $this->$name = $value;
          }
        }

        public function __get($name) {
          return $this->$name;
        }

        public function buyProduct($amount) {
          if ($this->inventory >= $amount) {
            $this->inventory -= $amount;
          } else {
            echo "<p>Invalid inventory requested: $amount</p>\n";
            echo "<p>There are only $this->inventory left</p>\n";
          }
        }
      }

      $prod1 = new Product();
      $prod1->description = "Carrots";
      $prod1->price = 1.50;
      $prod1->inventory = 5;
      $prod1->onsale = false;
      echo "<p>Added $prod1->inventory $prod1->description<p>\n";

      echo "<p>Now buying 4 carrots...</p>\n";
      $prod1->buyProduct(4);
      echo "<p>Inventory of $prod1->description is now $prod1->inventory</p>\n";

      echo "<p>Trying to set carrot inventory to -1:</p>\n";
      $prod1->invetory = -1;

      echo "<p>Now trying to buy 10 carrots...</p>\n";
      $prod1->buyProduct(10);
      echo "<p>Inventory of $prod1->description is now $prod1->inventory</p>\n";
    ?>
  </body>
</html>
