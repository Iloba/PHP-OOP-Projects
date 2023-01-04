<?php

class Book
{
    public $title;
    public $author;
    public $price;


    public function __construct(string $title, string $author, int $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }




}
