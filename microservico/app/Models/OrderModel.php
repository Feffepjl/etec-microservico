<?php

namespace App\Models;

class OrderModel
{
    public string $id;



    public string $product;


    public int $quantity;


    public function getId () {
        return $this->id;
    }

    public function getProduct () {
        return $this->product;
    }

    public function getQuantity () {
        return $this->quantity;
    }

    public function setId(int $id) {
        $this->id = $id;
    }

    public function setProduct(string $product) {
        $this->product = $product;
    }

    public function setQuantity(int $quantity) {
        $this->quantity = $quantity;
    }

    public function __construct() {}

}
