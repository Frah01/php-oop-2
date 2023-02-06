<?php
include __DIR__ . './Models/Prodotti.php';
include __DIR__ . './Models/Giocattoli.php';
include __DIR__ . './Models/Accessori.php';
include __DIR__ . './Models/Cibo.php';

$cibo1 = new Cibo('https://picsum.photos/200', 'Royal Canin Mini Adult', 'Cane', 'Prezzo:€ 43,99', 'Peso netto: 545g', 'Ingredienti: prosciutto, riso');
$cibo2 = new Cibo('https://picsum.photos/200', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', 'Prezzo: €44,99', 'Peso netto: 600g', 'Ingredienti: manzo, cereali');
$cibo3 = new Cibo('https://picsum.photos/200', 'Almo Nature Cat Daily Lattina', 'Gatto', 'Prezzo: €34,99', 'Peso netto: 400g', 'Ingredienti: tonno, pollo, prosciutoo');
$cibo4 = new Cibo('https://picsum.photos/200', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', 'Prezzo: €2,95', 'Peso netto: 30g', 'Ingredienti: Pesi e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

$cibi_array = [
    $cibo1,
    $cibo2,
    $cibo3,
    $cibo4
];

$accessorio1 = new Accessori('https://picsum.photos/200', 'Voliera Wilma in Legno', 'Uccello', 'Prezzo: €184,99', 'Materiale: Legno', 'Dimensioni: M: L 83 xx P67 x H153 cm');
$accessorio2 = new Accessori('https://picsum.photos/200', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Prezzo: €2,29', 'Materiale: Materiale espanso', 'Dimensioni: ND');

$accessori_array = [
    $accessorio1,
    $accessorio2
];

$giocattolo1 = new Giocattoli('https://picsum.photos/200', 'Kong Classic', 'Cane', 'Prezzo: €13,49', 'Caratteristiche: Galleggia e rimbalza', 'Dimensioni: M: L 83 xx P67 x H153 cm');
$giocattolo2 = new Giocattoli('https://picsum.photos/200', 'Topini di peluche Trixie', 'Gatto', 'Prezzo: €4,99', 'Caratteristiche: Morbido con codina in corda', 'Dimensioni: 8,5cm x 10 cm');

$giocattoli_array = [
    $giocattolo1,
    $giocattolo2
];
