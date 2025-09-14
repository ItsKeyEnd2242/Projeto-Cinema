<?php

class ShopCart
{
    private static array $items; 
    private float $discount;
    
    public function __construct(float $discount = 0){
        self::$items = array();
        $this->discount = $discount;
    }

    {
        return self::$items;
    }

    public function addItem(Book $book): bool
    {
        if (empty($book)) {
            return false;
        }
        return array_unshift(self::$items, $book);
    }

    public function removeItem($ISBN13): void
    {
        self::$items = array_filter(
            self::$items,
            function ($item) use ($ISBN13): bool {
                return $item->ISBN13 != $ISBN13;
            }
        );
    }

    public function subtotal(): float
    {
        return array_reduce(
            self::$items,
            function ($amountPay, $item) {
                return $amountPay + $item->price;
            },
            0
        );
        if($this->discount>0){
            $total -= $total * $this-> $discount;
        }
        return $total;
    }
};
