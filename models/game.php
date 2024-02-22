<?php

require_once __DIR__."/product.php";
require_once __DIR__.'/traits/HasName.php';

class game extends product {
    public $material;

    public function __construct(
        $name,
        $material,
        $description = null,
        $price = null,
        $image = null,
        $category = null,
    )
    {
        $this->name = $name;
        $this->material = $material;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}