<?php

include __DIR__ . '/database.php';
echo "<pre>";
$product = new Cibo('immagine', 'nome', 'tipo', 'prezzo', 'peso', 'ingredienti');
$product2 = new Cibo('immagine2', 'nome2', 'tipo2', 'prezzo2', 'peso2', 'ingredienti2');
var_dump($product);
var_dump($product2);

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
            <div class="col">

            </div>
        </div>
    </div>
</body>

</html>