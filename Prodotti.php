<?php
class Prodotti
{
    public $name;
    public $price;
    public $weight;
    public $ingredients;

    public function __construct($name, $price, $weight, $ingredients)
    {
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
