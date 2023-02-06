<?php

class Accessori
{
    public $image;
    public $name;
    public $type;
    public $price;
    public $specifics;
    public $size;

    public function __construct($image, $name, $type, $price, $specifics, $size)
    {
        $this->image = $image;
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->specifics = $specifics;
        $this->size = $size;
    }
}
