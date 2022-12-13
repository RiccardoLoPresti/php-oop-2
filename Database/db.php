<?php

require_once __DIR__ . '/../Models/Product.php';
require_once __DIR__ . '/../Models/Category.php';
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Gadget.php';
require_once __DIR__ . '/../Models/Toy.php';

$product_list=[
    new Product(12150,'generico', 'animalix',new Category('cani','icon'),30,true, 'https://medias.ultrapremiumdirect.com/italy/production/catalog/products/001005/1.jpg?tr=w-496,h-496&v=2118014580'),
    new Food(24381,'croccantini','animal&co', new Category('gatti','icon'),25,false, 'https://shop-cdn-m.mediazs.com/bilder/ultima/cat/sterilized/pollo/orzo/2/400/1605795670170_1_2.jpg', 15, 'pesce', 'salmone'),
    new Toy(284381,'frisbee','animal&go', new Category('cani','icon'),17, true, 'https://shop-cdn-m.mediazs.com/bilder/trixie/dog/activity/disc/2/400/27423_PLA_Trixie_Dog_Activity_Disc_Durchmesser_23_cm_2.jpg','gioco da lancio',20),
    new Gadget(243,'Cuccia','animal&go', new Category('gatti','icon'),210, true, 'https://m.media-amazon.com/images/I/5149DWJnytL.__AC_SX300_SY300_QL70_ML2_.jpg','Alcantara',40),
    new Food(26761,'Snack','UltraDoggo', new Category('cani','icon'),35, false, 'https://www.zooexpert.it/5099-large_default/camon-snack-cane-pollo-e-mela-80-gr.jpg', 35,'pollo','pollo'),
    new Toy(654531,'Cannetta con piume','animal&go', new Category('gatti','icon'),14.99, true, 'https://shop-cdn-m.mediazs.com/bilder/cannetta/gioco/con/piume/in/xxl/8/400/217817_pla_katzenangel_3in1_xxl_fg_7800_8.jpg','gioco manuale',17),
    new Food(24381,'Cibo','animal&co', new Category('pesci','icon'),9.99,false, 'https://ibrio.it/5145-large_default/tetra-goldfish-granules-mangime-in-granuli-per-pesci-rossi-250-ml-stimola-benessere-e-vitalita.jpg', 0.5, 'gamberetti', 'gamberetti'),
    new Gadget(243,'Acquario','AcqquariSupremi', new Category('pesci','icon'),309, true, 'https://staticfanpage.akamaized.net/wp-content/uploads/sites/5/2020/04/12.jpg','vetro',60)
];

