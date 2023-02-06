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

echo "<pre>";
$giocattolo1 = new Giocattoli('immagine', 'nome', 'tipo', 'prezzo', 'peso', 'ingredienti');
$giocattolo2 = new Giocattoli('immagine2', 'nome2', 'tipo2', 'prezzo2', 'peso2', 'ingredienti2');
var_dump($giocattolo1);
var_dump($giocattolo2);
