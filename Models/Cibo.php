<?php
class Cibo
{
    public $image;
    public $name;
    public $type;
    public $price;
    public $weight;
    public $ingredients;

    public function __construct($image, $name, $type, $price, $weight, $ingredients)
    {
        $this->image = $image;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
