<?php

include __DIR__ . '/database.php';
echo "<pre>";
$cibo1 = new Cibo('https://picsum.photos/200', 'Royal Canin Mini Adult', 'Cane', 'Prezzo:€ 43,99', 'Peso netto: 545g', 'Ingredienti: prosciutto, riso');
$cibo2 = new Cibo('https://picsum.photos/200', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', 'Prezzo: €44,99', 'Peso netto: 600g', 'Ingredienti: manzo, cereali');
$cibo3 = new Cibo('https://picsum.photos/200', 'Almo Nature Cat Daily Lattina', 'Gatto', 'Prezzo: €34,99', 'Peso netto: 400g', 'Ingredienti: tonno, pollo, prosciutoo');
$cibo4 = new Cibo('https://picsum.photos/200', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', 'Prezzo: €2,95', 'Peso netto: 30g', 'Ingredienti: Pesi e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

$cibi_array = [
    $cibo1,
    $cibo2,
    $cibo3,
    $cibo4
]

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($cibi_array as $cibi) { ?>
                <div class="col-6">
                    <div class="card">
                        <img src="<?php echo $cibi->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $cibi->name ?></h5>
                            <p class="card-text"><?php echo $cibi->type ?></p>
                            <p class="card-text"><?php echo $cibi->weight ?></p>
                            <p class="card-text"><?php echo $cibi->ingredients ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</body>

</html>