<?php

class Category{
    public $name;
    public $icon;

    public function __construct($_name, $_icon)
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

    public function setIcon(){
        if($this->name == 'cani'){
            return $this->icon = 'https://img.freepik.com/free-vector/cute-dog-sticking-her-tongue-out-cartoon-icon-illustration_138676-2709.jpg?w=2000';
        }else if($this->name == 'gatti'){
            return $this->icon = 'https://img.freepik.com/free-vector/cute-cat-unicorn-play-box-cartoon-icon-illustration_138676-2645.jpg?w=2000';
        }
    }

    public function getIcon(){
        return $this->icon;
    }
}