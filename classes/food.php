<?php
    require_once __DIR__.'/product.php';

    class food extends product{
        public $expireDate;
        public $flavor;
        public $load;
        
        function __construct
        (
            $name, 
            $image, 
            $price,
            $category, 
            $stock, 
            $description,
            $rate,
            $expireDate, 
            $flavor, 
            $load,
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
            $this->expireDate = $expireDate;
            $this->flavor = $flavor;
            $this->load = $load;
        }
    }

?>