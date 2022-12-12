<?php

require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/Category.php';
require_once __DIR__ . './Models/Food.php';
require_once __DIR__ . './Models/Gadget.php';
require_once __DIR__ . './Models/Toy.php';

$product1 = new Product(12150,'mangiare', 'animalix',new Category('cani','icona'),30, 'https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001005/1.jpg?tr=w-496,h-496&v=2118014580');

var_dump($product1);

?>