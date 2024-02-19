<?php

require_once __DIR__."/product.php";

class dogKennel extends product {
    public $size;

    public function __construct($name, $price, $image, $description, $type, string $size)
    {
        parent::__construct($name, $price, $image, $description, $type);
        $this->size = $size;
    }

    public function printDetails()
    {
        return "Dog Kannel";
    }
}