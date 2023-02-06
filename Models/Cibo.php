<?php
class Cibo extends Prodotti
{

    public $weight;
    public $ingredients;

    public function __construct($image, $name, $type, $price, $weight, $ingredients)
    {
        parent::__construct($image, $name, $type, $price);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
