<?php
class Cibo extends Prodotti
{

    public $weight;
    public $ingredients;

    public function __construct($image, $name, $type, $price, $weight, $ingredients)
    {
        parent::__construct($image, $name, $type, $price);
        $this->weight = $weight;
        $this->$ingredients = $ingredients;
    }
}

echo "<pre>";
$product = new Cibo('immagine', 'nome', 'tipo', 'prezzo', 'peso', 'ingredienti');
$product2 = new Cibo('immagine2', 'nome2', 'tipo2', 'prezzo2', 'peso2', 'ingredienti2');
var_dump($product);
var_dump($product2);
