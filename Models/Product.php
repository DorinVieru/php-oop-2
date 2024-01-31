<?php
    require_once __DIR__ . '/Category.php';
    
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
?>