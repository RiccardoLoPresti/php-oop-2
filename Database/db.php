<?php

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Gadget.php';
require_once __DIR__ . '/../Models/Toy.php';

$product1 = new Product(12150,'generico', 'animalix',new Category('cani','icon'),30, 'https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001005/1.jpg?tr=w-496,h-496&v=2118014580');

$product1->categorys->setIcon();
//var_dump($product1);


$product2 = new Food(2881,'croccantini','animal&co', new Category('gatti','icon'),25, 'https://shop-cdn-m.mediazs.com/bilder/ultima/cat/sterilized/pollo/orzo/2/400/1605795670170_1_2.jpg', 15, 'pesce', 'salmone');

$product2->categorys->setIcon();
$product2->is_avaible=false;
//var_dump($product2);


$product3 = new Toy(2881,'frisbee','animal&go', new Category('cani','icon'),17, 'https://shop-cdn-m.mediazs.com/bilder/trixie/dog/activity/disc/2/400/27423_PLA_Trixie_Dog_Activity_Disc_Durchmesser_23_cm_2.jpg','gioco da lancio',20);

$product3->categorys->setIcon();
//var_dump($product3);

$product4 = new Gadget(2881,'Cuccia','animal&go', new Category('gatti','icon'),210, 'https://m.media-amazon.com/images/I/5149DWJnytL.__AC_SX300_SY300_QL70_ML2_.jpg','Alcantara',40);

$product4->categorys->setIcon();
//var_dump($product4);

$product_list=[$product1,$product2,$product3,$product4];
//var_dump($product_list);
