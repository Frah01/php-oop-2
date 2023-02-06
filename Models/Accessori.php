<?php

class Accessori extends Prodotti
{

    public $material;
    public $size;

    public function __construct($image, $name, $type, $price, $material, $size)
    {
        parent::__construct($image, $name, $type, $price);
        $this->material = $material;
        $this->size = $size;
    }
}
