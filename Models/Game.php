<?php
    require_once __DIR__ .'/Product.php';
    
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
?>