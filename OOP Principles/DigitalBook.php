<?php
require_once 'Book.php';
class DigitalBook extends Book
{
    public $fileSize;

    public function __construct(string $title, string $author, int $price, int $fileSize)
    {
        parent::__construct($title, $author, $price);
        $this->fileSize = $fileSize;
    }
}
