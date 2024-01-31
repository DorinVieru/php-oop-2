<?php
    require_once __DIR__ . '/Models/Product.php';
    require_once __DIR__ . '/Models/Category.php';
    require_once __DIR__ . '/Models/Food.php';
    require_once __DIR__ . '/Models/Game.php';
    require_once __DIR__ . '/Models/Accessory.php';

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