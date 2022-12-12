<?php

require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/Category.php';
require_once __DIR__ . './Models/Food.php';
require_once __DIR__ . './Models/Gadget.php';
require_once __DIR__ . './Models/Toy.php';

$product1 = new Product(12150,'mangiare', 'animalix',new Category('cani','icon'),30, 'https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001005/1.jpg?tr=w-496,h-496&v=2118014580');

$product1->categorys->setIcon();

var_dump($product1);
var_dump($product1->categorys->icon);

$product2 = new Food(2881,'croccantini','animal&co', new Category('gatti','icon'),25, 'url', 15, 'pesce', 'salmone');

$product2->categorys->setIcon();

var_dump($product2);
var_dump($product2->categorys->icon);


$product3 = new Toy(2881,'frisbee','animal&go', new Category('cani','icon'),17, 'url','gioco da lancio',20);
var_dump($product3);

$product4 = new Gadget(2881,'Cuccia','animal&go', new Category('gatti','icon'),210, 'url','Alcantara',40);
var_dump($product4);
?>