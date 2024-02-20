<?php

require_once __DIR__."/product.php";

class PetHouse extends product {
    public $size;
    
    public function __construct(
        $name,
        $size,
        $description = null,
        $price = null,
        $image = null,
        $category = null,
    )
    {
        $this->name = $name;
        $this->size = $size;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}