<?php

class Food extends Product
{
    public $calories;
    function __construct($title, $price, Category $category, $calories)
    {

        parent::__construct($title, $price, $category);

        $this->calories = $calories;
    }

}