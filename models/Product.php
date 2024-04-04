<?php
class Product
{
    public $title;
    public $price;
    public $category;
    public $image = "https://cdn.shopify.com/s/files/1/0586/7883/7309/files/product-placeholder.png?v=1704436166";

    /**
     * __construct
     *
     * @param  string $_title
     * @param  float $_price
     * @param  Category $_category
     */
    function __construct($_title, $_price, Category $_category)
    {
        $this->title = $_title;

        if (is_numeric($_price)) {

            $this->price = $_price;

        } else {
            throw new Exception("Il formato del prezzo inserito non è valido");
        }

        $this->category = $_category;
    }

    public function getIcon()
    {
        $icon = $this->category->icon;
        return "<i class='fa-solid fa-$icon'></i>";
    }
}