<?php

class Giocattoli extends Prodotti
{
    public $specifics;
    public $size;

    public function __construct($image, $name, $type, $price, $specifics, $size)
    {
        parent::__construct($image, $name, $type, $price);
        $this->specifics = $specifics;
        $this->size = $size;
    }
}
