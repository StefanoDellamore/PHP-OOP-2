<?php

require_once __DIR__."/product.php";

class game extends product {
    public $material;

    public function __construct($name, $price, $image, $description, $type, string $material)
    {   
        parent::__construct($name, $price, $image, $description, $type);
        $this->material = $material;
    }

    public function printDetails()
    {
        return "game";
    }
}