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
            $this->price = $price;
            $this->category = $category;
            $this->stock = $stock;
            $this->description = $description;
            $this->rate = $rate;
        }
    }
?>