<?php
class Category
{
    public $name;
    public $icon;
    /**
     * __construct
     *
     * @param  string $_name
     * @param  string $_icon
     */
    function __construct($_name, $_icon, )
    {
        $this->name = $_name;
        $this->icon = $_icon;
    }

}
