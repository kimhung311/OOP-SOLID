<?php
interface Allproduct
{
    public function setItem(StockItem $item); // Phương thức
}
class StockItem
{
    public $quantity;
    public function __construct($quantity)
    {
        $this->quantity = $quantity;
    }
}

class Product implements Allproduct
{
    
    public $item;  // Properties thuộc tính
    public function setItem(StockItem $item)
    {
        return $this->item = $item;
    }
}
$a = new StockItem(100); //object
$b  = new Product($a);
var_dump($b->setItem($a));