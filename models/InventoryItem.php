<?php

class InventoryItem {

    private $item_id;
    private $item_name;
    private $item_availability;
    private $item_price;
    private $category_id;
    private $subcategory_id;

    function __construct($item_id, $item_name, $item_availability, $item_price, $category_id, $subcategory_id) {
        $this->item_id = $item_id;
        $this->item_name = $item_name;
        $this->item_availability = $item_availability;
        $this->item_price = $item_price;
        $this->category_id = $category_id;
        $this->subcategory_id = $subcategory_id;
    }

    public function display() {
        echo 'Item ID: #' . $this->item_id . "<br />";
        echo 'Item Name: ' . $this->item_name . "<br />";
        echo 'Item Available: ' . $this->item_availability . "<br />";
        echo 'Item Price: $' . $this->item_price . "<br />";
        echo 'subcategory_id: #' . $this->subcategory_id . "<br />";
        echo 'category_id: #' . $this->category_id . "<br /> <br /> <br />";
    }

    public function getItem_id() {
        return $this->item_id;
    }

    public function setItem_id($item_id) {
        $this->item_id = $item_id;
    }

    public function getItem_name() {
        return $this->item_name;
    }

    public function setItem_name($item_name) {
        $this->item_name = $item_name;
    }

    public function getItem_availability() {
        return $this->item_availability;
    }

    public function setItem_availability($item_availability) {
        $this->item_availability = $item_availability;
    }

    public function getItem_price() {
        return $this->item_price;
    }

    public function setItem_price($item_price) {
        $this->item_price = $item_price;
    }

    public function getCategory_id() {
        return $this->category_id;
    }

    public function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    public function getSubcategory_id() {
        return $this->subcategory_id;
    }

    public function setSubcategory_id($subcategory_id) {
        $this->subcategory_id = $subcategory_id;
    }

}

$one = new InventoryItem(8235, "HTC X", 10, 500, 99, 11);
$one->display();

$two = new InventoryItem(5286, "Sony Vaio", 20, 600, 99, 12);
$two->display();

$three = new InventoryItem(1135, "HP", 30, 300, 99, 13);
$three->display();

$four = new InventoryItem(6359, "Levi Shirt XL", 5, 150, 88, 21);
$four->display();

$five = new InventoryItem(2315, "Woodland Shoes", 6, 100, 88, 22);
$five->display();

$six = new InventoryItem(0986, "Arrow XL", 4, 98, 77, 31);
$six->display();

$seven = new InventoryItem(1289, "Slipper", 6, 67, 77, 32);
$seven->display();

$eight = new InventoryItem(5490, "Kookaburra Ball", 25, 15, 66, 41);
$eight->display();

$nine = new InventoryItem(6243, "Yonex Nanospeed", 13, 143, 66, 42);
$nine->display();

$ten = new InventoryItem(3410, "Nike Football", 22, 45, 66, 43);
$ten->display();
