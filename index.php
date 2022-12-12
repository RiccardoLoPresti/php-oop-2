<?php

require_once __DIR__ . './Models/Product.php';

$product1 = new Product(12150,'mangiare', 'animalix','cani',30, 'https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001005/1.jpg?tr=w-496,h-496&v=2118014580');

var_dump($product1);

?>