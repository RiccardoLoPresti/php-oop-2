<?php

class Product{
    
    public $id;
    public $name;
    public $brand;
    public $categorys;
    public $price;
    public $is_avaible = true;
    public $image;

    public function __construct($_id, $_name, $_brand, Category $_categorys, $_price, $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->categorys = $_categorys;
        $this->price = $_price;
        $this->image = $_image;
    }

}