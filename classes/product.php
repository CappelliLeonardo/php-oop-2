<?php
    class product{
        public $name;
        public $image;
        public $price;
        public $category;
        public $stock;
        public $description;
        public $rate;

        function __construct(
            $name, 
            $image, 
            $price, 
            $category,
            $stock,
            $description = 'Not found',
            $rate = null,
            )
        {
            $this->name = $name;
            $this->image = $image;
            
            if (is_numeric($price)) {
                $this->price = $price;
            }
            else {
                // Dì al programmatore che sta sbagliando (e cosa)
                throw new Exception('valore not numeric');
            }
            
            $this->category = $category;
            $this->stock = $stock;
            $this->description = $description;
            $this->rate = $rate;
        }
    }

    
?>