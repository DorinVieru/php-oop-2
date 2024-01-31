<!-- SEZIONE PHP LOGICA -->
<?php
// DEFINIZIOPNE CLASSE PRPDOTTI
class Product
{
    public $img;
    public $title;
    public $price;
    public $category;

    function __construct($_img, $_title, $_price, $_category)
    {
        $this->img = $_img;
        $this->title = $_title;
        $this->price = $_price;
        $this->category = $_category;
    }
}

// DEFINIZIO CLASSE CATEGORIA
class category
{
    public $name;

    function __construct($_name)
    {
        $this->name = $_name;
    }
}

// DEFINIZIONE SOTTO CLASSE CIBO
class food extends Product
{
    public $type;

    function __construct($_img, $_title, $_price, $_category, $_type)
    {
        parent::__construct($_img, $_title, $_price, $_category);
        $this->type = $_type;
    }
}

// DEFINIZIONE SOTTO CLASSE GIOCO
class game extends Product
{
    public $type;

    function __construct($_img, $_title, $_price, $_category, $_type)
    {
        parent::__construct($_img, $_title, $_price, $_category);
        $this->type = $_type;
    }
}

// DEFINIZIONE SOTTO CLASSE ACCESSORI
class accessory extends Product
{
    public $type;

    function __construct($_img, $_title, $_price, $_category, $_type)
    {
        parent::__construct($_img, $_title, $_price, $_category);
        $this->type = $_type;
    }
}

// CREO ISTANZE PER LA CLASSE CATEGORIA
$categoryCane = new Category('Cane');
$categoryGatto = new Category('Gatto');
$categoryUccelli = new Category('Uccelli');
$categoryPesci = new Category('Pesci');

// CREO ISTANZA PER LA SOTTO CLASSE CIBO
$product1 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000", "Royal Canin Mini Adult", "25.99 €", $categoryCane, "Crocchette");
$product2 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg", "Almo Nature Holistic Medium Large Tonno e Riso", "32.99 €", $categoryCane, "Crocchette");
$product3 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg", "Almo Nature Cat Daily Lattina", "12.99 €", $categoryGatto, "carne in scatola");
$product4 = new Food("https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg", "Mangime per Pesci Guppy in Fiocchi", "5.99€", $categoryPesci, "Fiocchi");

// CREO ISTANZA PER LA SOTTO CLASSE GIOCO
$product5 = new Game("https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg", "Kong Classic", "15.99 €", $categoryCane, "sonaglio");
$product6 = new Game("https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg", "Topini di peluche Trixie", "7.99 €", $categoryGatto, "peluche");

// CREO ISTANZA PER LA SOTTO CLASSE ACCESSORI
$product7 = new Accessory("https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg", "Voliera Wilma in Legno", "89.99 €", $categoryUccelli, "Voliera");
$product8 = new Accessory("https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg", "Cartucce Filtranti per Filtro EasyCrystal", "8.99 €", $categoryPesci, "Cartuccia filtrante");

// CREO ARRAY DI PRODOTTI
$products = [
    $product1,
    $product2,
    $product3,
    $product4,
    $product5,
    $product6,
    $product7,
    $product8,
];

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