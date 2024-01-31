<!-- SEZIONE PHP LOGICA -->
<?php
    require_once __DIR__ . '/db.php';
?>

<!-- SEZIONE HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>OOP Shop</title>
</head>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 pb-4 text-center">
                <h1 class="text-warning">OOP Shop</h1>
                <h4 class="text-warning">l'e-commerce minimale essenziale</h4>
            </div>
            <?php foreach ($products as $product) { ?>
                <div class="col-3">
                    <div class="card text-bg-light mb-3">
                        <img src="<?php echo $product->img ?>" class="card-img-top" alt="<?php echo $product->title ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->title ?></h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Prezzo: <?php echo $product->price ?> </li>
                                <li class="list-group-item">Ideale per: <?php echo $product->category->name ?> </li>
                                <li class="list-group-item">Tipologia: <?php echo $product->type ?> </li>
                            </ul>
                            <a href="#" class="btn btn-primary mt-3">Compralo compulsivamente</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>