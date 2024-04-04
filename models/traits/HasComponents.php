<?php

trait HasComponents
{
    public $components;

    public function getComponents()
    {
        return $this->components;
    }

    public function setComponents($components)
    {
        $this->components = $components;
    }
}