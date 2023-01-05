<?php

// Practicing Encapsulation
class Cart
{
    private array $items = [];
    private int $numberOfItems;
    private int $totalBill = 0;

    public function addItemsToCart(Product $item): void
    {
        $this->items[] = $item;
    }

    public function getItemsInCart(): array
    {
        return $this->items;
    }
   

    public function getTotal()
    {
        foreach ($this->getItemsInCart() as $item) {
            $total =  $item->quantity * $item->price;
            $this->totalBill += $total;
        }
        return $this->totalBill;
    }

    public function getNumberOfItemsInCart(): int
    {
        return $this->numberOfItems = count($this->items);
    }

    public function getTotalBill(): int{
        return $this->totalBill;
    }
  
}
