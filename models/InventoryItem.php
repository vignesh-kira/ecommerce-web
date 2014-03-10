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
