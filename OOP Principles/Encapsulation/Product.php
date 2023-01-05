<?php 

//Item Class (Product That Can be Aded to a Cart)

class Product {
    public $title;
    public $price;
    public $quantity;

    private $total;

    public function __construct(string $title, int $price, int $quantity)
    {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;

    }

    // public function getTotal (): int{
    //     return $this->total $this->price * $this->quantity;
    // }
}
