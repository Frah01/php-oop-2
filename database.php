<?php
include __DIR__ . './Models/Prodotti.php';
include __DIR__ . './Models/Giocattoli.php';
include __DIR__ . './Models/Accessori.php';
include __DIR__ . './Models/Cibo.php';

// CREO ISTANZE PER LA SEZIONE CIBO

$cibo1 = new Cibo('./img/royal-canin.jpg', 'Royal Canin Mini Adult', 'Cane', 'Prezzo:€ 43,99', 'Peso netto: 545g', 'Ingredienti: prosciutto, riso');
$cibo2 = new Cibo('./img/almo-nature.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', 'Prezzo: €44,99', 'Peso netto: 600g', 'Ingredienti: manzo, cereali');
$cibo3 = new Cibo('./img/almo-nature-cat.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto', 'Prezzo: €34,99', 'Peso netto: 400g', 'Ingredienti: tonno, pollo, prosciutoo');
$cibo4 = new Cibo('./img/guppy.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', 'Prezzo: €2,95', 'Peso netto: 30g', 'Ingredienti: Pesi e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

$cibi_array = [
    $cibo1,
    $cibo2,
    $cibo3,
    $cibo4
];

// CREO ISTANZE PER LA SEZIONE ACCESSORI

$accessorio1 = new Accessori('./img/voliera-wilma.webp', 'Voliera Wilma in Legno', 'Uccello', 'Prezzo: €184,99', 'Materiale: Legno', 'Dimensioni: M: L 83 xx P67 x H153 cm');
$accessorio2 = new Accessori('./img/cartucce.webp', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Prezzo: €2,29', 'Materiale: Materiale espanso', 'Dimensioni: ND');

$accessori_array = [
    $accessorio1,
    $accessorio2
];

// CREO ISTANZE PER LA SEZIONE GIOCATTOLI

$giocattolo1 = new Giocattoli('./img/kong.jpg', 'Kong Classic', 'Cane', 'Prezzo: €13,49', 'Caratteristiche: Galleggia e rimbalza', 'Dimensioni: M: L 83 xx P67 x H153 cm');
$giocattolo2 = new Giocattoli('./img/topo.jpg', 'Topini di peluche Trixie', 'Gatto', 'Prezzo: €4,99', 'Caratteristiche: Morbido con codina in corda', 'Dimensioni: 8,5cm x 10 cm');

$giocattoli_array = [
    $giocattolo1,
    $giocattolo2
];
