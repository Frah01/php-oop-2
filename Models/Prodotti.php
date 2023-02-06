<?php
class Prodotti
{
    public $image;
    public $name;
    public $type;
    public $price;


    public function __construct($image, $name, $type, $price)
    {
        $this->image = $image;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
    }
}
