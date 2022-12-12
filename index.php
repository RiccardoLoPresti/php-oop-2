<?php

require_once __DIR__ . './Models/Product.php';
require_once __DIR__ . './Models/Category.php';
require_once __DIR__ . './Models/Food.php';
require_once __DIR__ . './Models/Gadget.php';
require_once __DIR__ . './Models/Toy.php';

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
    <title>OOP-2 php</title>
</head>
<body>

    <header class="bg-dark py-5 text-white text-center">
        <h1>AnimalStore</h1>
    </header>

    <main>
        <div class="container">
            <div class="row py-5">
                <?php foreach($product_list as $product) : ?>

                    <div class="col-6 mb-5">
                        <div class="card">
                            <img src="<?php echo $product->image ?>" class="card-img-top" alt="<?php echo $product->name ?>">
                            <div class="card-body">
                                <h5 class="card-title text-capitalize"><?php echo $product->name ?><?php echo ' ' ?><?php echo $product->categorys->name ?></h5>
                                <h6 class="text-capitalize"><?php echo $product->brand ?></h3>
                                <p class="text-capitalize">Categoria: <?php echo $product->categorys->name ?></p>
                                <div class="food">
                                    <p>Caratteristiche:</p>
                                    <ul class="text-capitalize">
                                        <li><?php echo $product->weight ?? '-' ?> kg</li>
                                        <li><?php echo $product->ingredients ?? '-' ?></li>
                                        <li><?php echo $product->taste ?? '-' ?></li>
                                        <li><?php echo $product->getOutPut() ?></li>
                                    </ul>
                                </div>
                                
                                <p class="text-capitalize">Prezzo: &euro; <?php echo $product->price ?></p>
                                <p class="text-capitalize">Disponibilità: <?php echo $product->setIsAvaible() ?></p>
                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach; ?>
            </div>
            
        </div>
    </main>

    <footer class="bg-dark py-5 text-white text-center">
        <span>By RiccardoLoPresti</span>
    </footer>
</body>
</html>