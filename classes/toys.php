<?php
    require_once __DIR__.'/product.php';
    require_once __DIR__.'./../traits/HasMaterial.php';

    class toys extends product{

        use HasMaterial;
     
        
        function __construct ($name, $image, $price,$category, $stock, $description,$rate,$material)
        {
            parent::__construct
            ($name, $image, $price, $category, $stock, $description, $rate);
            $this->material = $material;
        }
    }
?>