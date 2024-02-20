<?php
    require_once __DIR__.'/product.php';

    class toys extends product{
        public $material;
        
        function __construct ($name, $image, $price,$category, $stock, $description,$rate,$material)
        {
            parent::__construct
            ($name, $image, $price, $category, $stock, $description, $rate);
            $this->material = $material;
        }
    }
?>