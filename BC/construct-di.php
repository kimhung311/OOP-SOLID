<?php
class StockItem
{

    private $quantity;
    private $status;

    public function __construct($quantity, $status)
    {
        $this->quantity = $quantity;
        $this->status = $status;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getStatus()
    {
        return $this->status;
    }
}
class Product
{
    private $stockItem;
    private $code;

    public function __construct($code, StockItem $stockItem) //truyền vào Product thông qua chính đối tượng StockItem
    {
        $this->stockItem   = $stockItem;
        $this->code        = $code;
    }

    public function getStockItem()
    {
        return $this->stockItem;
    }

    public function getCode()
    {
        return $this->code;
    }
}

$stockItem = new StockItem(50, "Áo Dài");
$product = new Product("101010", $stockItem);
var_dump($product->getStockItem());
// đối tượng StockItem không còn khởi tạo bên trong hàm tạo Product nữa, mà nó được truyền vào Product thông qua chính đối tượng StockItem, như vậy khi thay đổi cách khởi tạo StockItem thì lớp Product không phải thay đổi gì