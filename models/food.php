<?php

require_once __DIR__."/product.php";

class food extends product {
    public $weight;
    public $ingredients;
    public $cut;


    public function __construct($name, $price, $image, $description, $type, string $weight, string $ingredients, string $cut)
    {   
        parent::__construct($name, $price, $image, $description, $type);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        $this->cut = $cut;
    }

    public function printDetails()
    {
        return "food";
    }
}