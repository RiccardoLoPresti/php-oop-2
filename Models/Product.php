<?php

class Product{
    
    public $id;
    public $name;
    public $brand;
    public $categorys;
    public $price;
    public $is_available;
    public $image;

    public function __construct($_id, $_name, $_brand, Category $_categorys, $_price, $_is_available, $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->categorys = $_categorys;
        $this->price = $_price;
        $this->is_available = $_is_available;
        $this->image = $_image;
    }

    public function setIsAvaible(){
        if($this->is_available){
            return 'Disponibile';
        }else{
            return 'Non Disponibile';
        }
    }

    public function getIsAvaible(){
        return $this->is_available;
    }
}