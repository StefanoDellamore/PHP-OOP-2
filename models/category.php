<?php
require_once __DIR__.'/traits/HasName.php';
class category {
    public $name;

    public function __construct(
        $name
    )
    {
        $this->name = $name;
    }
}