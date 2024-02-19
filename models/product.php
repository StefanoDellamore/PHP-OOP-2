<?php
class singleProduct {
    public $name;
    public $description;
    public $price; 
    public $image;
    public $type;

    public function printDetails (){
        $className = get_class($this);
        if ($className === $className){
            echo $className;
        }
        else {
            echo "Error";
        }
    }

    public function __construct(string $name, string $description, string $price, string $image, string $type)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->type = $type;
    }
}

class product extends singleProduct {
    public function __construct($name, $price, $image)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->type = 'product';
    }
    
}