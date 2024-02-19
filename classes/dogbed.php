<?php
    require_once __DIR__.'/product.php';

    class dogbed extends product{
        public $material;
        public $dimension;
        
        function __construct
        (
            $name, 
            $image, 
            $price,
            $category, 
            $stock, 
            $description,
            $rate,
            $material, 
            $dimension, 
        )
        {
            parent::__construct
            (
                $name, 
                $image, 
                $price,
                $category, 
                $stock, 
                $description,
                $rate
            );
            $this->material = $material;
            $this->dimension = $dimension;
        }
    }
?>