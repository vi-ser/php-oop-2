<?php

require './Models/Category.php';
require './Models/Product.php';
require './Models/Food.php';
require './Models/Game.php';

$cat = new Category("Cat", "cat");
$dog = new Category("Dog", "dog");

$categories = [
    $cat,
    $dog
];

$products = [
    new Food("Croccantini premium per cani", 25.99, $dog, "400", "cereali"),
    new Game("Palla rimbalzante resistente per cani", 9.99, $dog, "ball", "gomma"),
    new Product("Guinzaglio in pelle per cani di grossa taglia", 18.49, $dog),
    new Food("Scatoletta di tonno e salmone per gatti", 1.49, $cat, "200", "tonno, salmone"),
    new Game("Tunnel giocattolo per gatti", 12.99, $cat, "strutture", "tessuto"),
    new Product("Lettiera igienica in cristalli per gatti", 7.99, $cat),
];

// set delle immagini
$products[0]->image = "https://laspesaonline.eurospin.it/photo/2022/10/29/792/main/photo/6986201-16821501-20221028094343.jpg";
$products[1]->image = "https://www.sbsupply.it/media/catalog/product/cache/11/image/800x/602f0fa2c1f0d1ba5e241f914e856ff9/b/l/blanco_pagina_kopie_243_copy_221_1.jpg";
$products[2]->image = "https://www.fordogtrainers.it/images/large/Guinzaglio-pelle-L12_LRG.jpg";
$products[3]->image = "https://static.zoomalia.com/prod_img/131197/xl_315ad13a2a07ca4b7642959dc0c4c740ab61682426549.jpg";
$products[4]->image = "https://img.fruugo.com/product/5/26/985286265_max.jpg";
$products[5]->image = "https://m.media-amazon.com/images/I/517ES1nzSSL.jpg";


// var_dump($categories);
// var_dump($products);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce OOP</title>

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <nav class="navbar bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">
                <img src="./img/logo.svg" alt="Logo" width="auto" height="30px" class="d-inline-block align-text-top">
                Pet Shop
            </a>
        </div>
    </nav>
    <div class="container p-5">

        <div class="row d-flex justify-content-between">
            <div class="col-6">
                <h1 class="display-1">
                    Esplora il Mondo degli Animali Domestici!
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore fugiat atque expedita. Et, labore
                    aliquid
                    soluta commodi accusamus ipsam veritatis sequi quasi, error neque voluptatum qui doloremque natus
                    maxime
                    vel.</p>
            </div>
            <div class="col-6 d-flex justify-content-end rounded-3">
                <img src="./img/pets.jpeg" alt="pets" style="height: 600px; border-radius: 40px">
            </div>
        </div>

        <h2 class="text-center mt-5 mb-5">In evidenza</h2>
        <div class="row d-flex" style="gap: 16px;">
            <?php
            foreach ($products as $product) {
                ?>
                <div class="card" style="width: calc(100% / 3 - 20px / 3 * 2);">
                    <img src="<?= $product->image ?>" class="card-img-top" alt="product">
                    <div class="card-body">
                        <h5 class="product-title">
                            <?= $product->title ?>
                        </h5>

                        <?php
                        if ($product instanceof Food) {
                            echo "<span class='badge bg-success'>Food</span>";
                        } elseif ($product instanceof Game) {
                            echo "<span class='badge bg-primary'>Game</span>";
                        } else {
                            echo "<span class='badge bg-warning'>Product</span>";
                        }
                        ?>

                        <?php
                        if ($product instanceof Food) {
                            echo "<span class='info'>Calorie: {$product->calories}</span>";
                        } elseif ($product instanceof Game) {

                            echo "<span class='info'>Genere: {$product->genre}</span>";
                        }
                        ?>

                        <?php
                        if ($product instanceof Food || $product instanceof Game) {
                            echo "<br><span class='info'>Componenti: {$product->components}</br>";
                        }
                        ?>

                        <h6 class="product-price mt-3 text-info ">
                            <?= "€ " . $product->price ?>
                        </h6>
                        <?= $product->getIcon() ?>
                    </div>
                </div>
                <?php
            }
            ?>

        </div>

    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>