<?php

require_once __DIR__."/product.php";

class food extends product {
    public $weight;
    public $ingredients;
    
    public function __construct(
        $name,
        $weight,
        $ingredients,
        $description = null,
        $price = null,
        $image = null,
        $category = null,
    )
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->ingredients = $ingredients;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}