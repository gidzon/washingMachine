<?php

class Product{
    public $nameProduct;
    public $price;

    function getProduct($nameProduct, $price){
        $this->nameProduct = $nameProduct;
        $this->price = $price;
    }

}