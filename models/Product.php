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
     * @param  string $_category
     */
    function __construct($_title, $_price, $_category)
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
    }
}
