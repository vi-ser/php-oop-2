<?php

class Game extends Product
{
    public $genre;
    function __construct($title, $price, Category $category, $genre)
    {

        parent::__construct($title, $price, $category);

        $this->genre = $genre;
    }

}