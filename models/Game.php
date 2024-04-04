<?php

require_once __DIR__ . "/Traits/HasComponents.php";


class Game extends Product
{
    public $genre;

    use HasComponents;
    function __construct($title, $price, Category $category, $genre, $components)
    {

        parent::__construct($title, $price, $category);

        $this->genre = $genre;
        $this->components = $components;
    }

}