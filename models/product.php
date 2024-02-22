<?php
require_once __DIR__.'/traits/HasName.php';
class product {
    public $name;
    public $description;
    public $price; 
    public $image;
    public $category;

    public function __construct(
        $name,
        $description = null,
        $price = null,
        $image = null,
        $category = null,
    )
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->category = $category;
    }
}