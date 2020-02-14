<?php


namespace App\Http;


class Cart
{
    public $items = null;
    public $totalPrice = 0;
    public $totalQty = 0;


    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
                $this->totalPrice = $oldCart->totalPrice;
            $this->totalQty = $oldCart->totalQty;
        }
    }

    public function add($product)
    {
        $storesItem = [
            'product' => $product,
            'totalPrice' => 0,
            'totalQty' => 0
        ];
        //kiem tra san pham da ton tai hay chua
        if ($this->items) {
            if (array_key_exists($product->id, $this->items)) {
                $storesItem = $this->items[$product->id];
            } else {
                $this->totalQty++;
            }
        }
        $storesItem['totalQty']++;
        $storesItem['totalPrice'] += $product->price;
        //xua li gio hang
        $this->items[$product->id] = $storesItem;
        $this->totalPrice += $product->price;


    }


}
