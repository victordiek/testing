<?php
  include("Product.inc.php");

  class Soda extends Product {
    private $ounces;

    public function __construct($name, $value, $amount, $sale, $size) {
      parent::__construct($name, $value, $amount, $sale);
      $this->ounces = $size;
    }

    public function __toString() {
       $output = "<p>Product: " . $this->description . "<br>\n";
       $output .= "Price: $" . number_format($this->price,2) . "<br>\n";
       $output .= "Inventory: " . $this->inventory . "<br>\n";
       $output .= "On sale: ";
       if ($this->onsale) {
         $output .= "Yes<br>\n";
       } else {
         $output .= "No<br>\n";
       }
       $output .= "Ounces: " . $this->ounces . "</p>\n";
       return $output;
    }

    public function restock($amount) {
      $this->inventory += $amount;
    }
   }
?>
