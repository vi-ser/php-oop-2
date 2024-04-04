<?php

require_once __DIR__ . "/Traits/HasComponents.php";

class Food extends Product
{
    use HasComponents;
    public $calories;
    function __construct($title, $price, Category $category, $calories, $components)
    {

        parent::__construct($title, $price, $category);

        $this->calories = $calories;
        $this->components = $components;
    }

}