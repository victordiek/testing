<?php

class Product{
  protected $description;
  protected $price;
  protected $inventory;
  protected $onsale;

  public function __construct($name, $cost, $quantity, $sale) {
    $this->description = $name;
    $this->onsale = $sale;
    if ($cost < 0) {
      $this->price = 0;
    } else {
      $this->price = $cost;
    }
    if ($quantity < 0) {
      $this->inventory = 0;
    } else {
      $this->inventory = $quantity;
    }
  }

  public function __set($name, $value) {
    if ($name == "price && $value <0") {
      echo "<p>Invalid price set</p>\n";
      $this->price = 0;
    } elseif ($name == "inventory" && $value < 0) {
      echo "<p>Invalid inventory set: $value</p>\n";
    } else {$this->$name = $value;}
  }

  public function __get($name) {
    return $this->$name;
  }

  public function __clone() {
    $this->price = 0;
    $this->inventory = 0;
    $this->onsale = false;
  }

  public function __toString() {
    $output = "<p>Product: " . $this->description . "<br>\n";
    $output .= "Price: $" . number_format($this->price,2) . "<br>\n";
    $output .= "Inventory: " . $this->inventory . "<br>\n";
    $output .= "On sale: ";
    if ($this->onsale) {
      $output .= "Yes</p>\n";
    } else {
      $output .= "No</p>\n";
    }
    return $output;
  }

  public function buyProduct($amount) {
    if ($this->inventory >= $amount) {
      $this->inventory -= $amount;
    } else {
      echo "<p>Sorry, invalid inventory requested: $amount</p>\n";
      echo "<p>There are only $this->inventory left</p>\n";
    }
  }

  public function putonsale() {
    $this->onsale = true;
  }
  public function takeoffsale() {
    $this->onsale = false;
  }
}
?>
