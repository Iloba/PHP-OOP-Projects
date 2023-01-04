<?php
require_once 'Book.php';
    class PhysicalBook extends Book{
    public $weight;

    public function __construct(string $title, string $author, int $price, int $weight)
    {
        parent::__construct($title, $author, $price);
        $this->weight = $weight;
    }
    
}