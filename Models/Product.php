<?php

class Product{
    
    public $id;
    public $name;
    public $brand;
    public $categorys;
    public $price;
    public $is_avaible;
    public $image;

    public function __construct($_id, $_name, $_brand, Category $_categorys, $_price, $_is_avaible, $_image)
    {
        $this->id = $_id;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->categorys = $_categorys;
        $this->price = $_price;
        $this->is_avaible = $_is_avaible;
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

    /*public function getOutPut(){
        if(property_exists($Food,$weight)){
            return $this->weight;
        }else if (property_exists($this->feature)){
            return $this->feature;
        }else if(property_exists($this->material)){
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
    }*/
}