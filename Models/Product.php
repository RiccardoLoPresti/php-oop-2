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

    public function setIsAvaible(){
        if($this->is_avaible){
            return 'Disponibile';
        }else{
            return 'Non Disponibile';
        }
    }

    public function getIsAvaible(){
        return $this->is_avaible;
    }

    public function getOutPut(){
        if($this->weight){
            return $this->weight;
        }else if ($this->feature){
            return $this->feature;
        }else if($this->material){
            return $this->material;
        }else{
            return '-';
        }

        if($this->ingredients){
            return $this->ingredients;
        }else if ($this->size){
            return $this->size;
        }else{
            return '-';
        }

        if($this->taste){
            return $this->taste;
        }else{
            return '-';
        }
    }
}