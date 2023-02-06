<?php

include __DIR__ . '/database.php';

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
                <div class="col-4 mt-2">
                    <div class="card">
                        <img src="<?php echo $cibi->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $cibi->name ?></h5>
                            <p class="card-text"><?php echo $cibi->type ?></p>
                            <p class="card-text"><?php echo $cibi->price ?></p>
                            <p class="card-text"><?php echo $cibi->weight ?></p>
                            <p class="card-text"><?php echo $cibi->ingredients ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php foreach ($accessori_array as $accessori) { ?>
                <div class="col-4 mt-2">
                    <div class="card">
                        <img src="<?php echo $accessori->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $accessori->name ?></h5>
                            <p class="card-text"><?php echo $accessori->type ?></p>
                            <p class="card-text"><?php echo $accessori->price ?></p>
                            <p class="card-text"><?php echo $accessori->material ?></p>
                            <p class="card-text"><?php echo $accessori->size ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php foreach ($giocattoli_array as $giocattoli) { ?>
                <div class="col-4 mt-2">
                    <div class="card">
                        <img src="<?php echo $giocattoli->image ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $accessori->name ?></h5>
                            <p class="card-text"><?php echo $giocattoli->type ?></p>
                            <p class="card-text"><?php echo $giocattoli->price ?></p>
                            <p class="card-text"><?php echo $giocattoli->specifics ?></p>
                            <p class="card-text"><?php echo $giocattoli->size ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>