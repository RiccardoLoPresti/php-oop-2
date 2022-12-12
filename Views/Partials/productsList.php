<body>

    <main>
        <div class="container">
            <div class="row py-5">
                <?php foreach($product_list as $product) : ?>

                    <div class="col-6 mb-5">
                        <div class="card">
                            <img src="<?php echo $product->image ?>" class="card-img-top" alt="<?php echo $product->name ?>">
                            <div class="card-body">
                                <img src="<?php echo $product->categorys->setIcon() ?>" alt="<?php echo $product->categorys->name ?>">
                                <h5 class="card-title text-capitalize"><?php echo $product->name ?><?php echo ' ' ?><?php echo $product->categorys->name ?></h5>
                                <h6 class="text-capitalize"><?php echo $product->brand ?></h3>
                                <p class="text-capitalize">Categoria: <?php echo $product->categorys->name ?></p>
                                <div class="food">
                                    <p>Caratteristiche:</p>
                                    <ul class="text-capitalize">
                                        <li>Peso: <?php echo $product->weight ?? 'n/d' ?> kg</li>
                                        <li>Ingredienti: <?php echo $product->ingredients ?? 'n/d' ?></li>
                                        <li>Gusto: <?php echo $product->taste ?? 'n/d' ?></li>
                                        <li>Tipo di Gioco: <?php echo $product->feature ?? 'n/d'  ?></li>
                                        <li>Materiale: <?php echo $product->material ?? 'n/d'  ?></li>
                                        <li><?php echo $product->size ?? 'n/d'  ?> cm</li>
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

</body>