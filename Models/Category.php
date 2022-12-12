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
        }else if($this->name == 'pesci'){
            return $this->icon = 'https://cdn.dribbble.com/userupload/2846276/file/original-41a386d13e015e020f334b635a25b040.png?compress=1&resize=400x300&vertical=top';
        }
    }

    public function getIcon(){
        return $this->icon;
    }
}