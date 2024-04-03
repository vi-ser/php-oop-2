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
    new Food("Croccantini premium per cani", 25.99, $dog, "400"),
    new Game("Palla rimbalzante resistente per cani", 9.99, $dog, "ball"),
    new Product("Guinzaglio in pelle per cani di grossa taglia", 18.49, $dog),
    new Food("Scatolette di tonno e salmone per gatti", 1.49, $cat, "200"),
    new Game("Tunnel giocattolo per gatti", 12.99, $cat, "strutture"),
    new Product("Lettiera igienica in cristalli per gatti", 7.99, $cat),
];

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

        <div class="row">
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
        </div>

    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>