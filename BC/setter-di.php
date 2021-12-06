<?php
// Setter Injection - Cài cắm thông qua hàm setter
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
    private $item;
    private $code;

    public function __construct($code)
    {
        $this->code        = $code;
    }
    public function getStockItem()
    {
        return $this->item;
    }

    public function getCode()
    {
        return $this->code;
    }

    public function setStockItem(StockItem  $item) //  đối tượng phụ thuộc vào $item được cài vào Product thông qua một hàm setter: setStockItem($item)
    {
        return  $this->item = $item;
    }
}

$item = new StockItem(50, "Quần");
$product = new Product("12345");

$product->setStockItem($item);
echo "<pre>";

print_r($product->getCode());
echo "<pre>";
print_r($product->getStockItem());
 

// Cho phép tùy chọn các phụ thuộc và lớp có thể tạo ra với các giá trị mặc định
// Thêm các thành phần phụ thuộc một cách đơn giản thông qua hàm setter mà không làm hỏng logic của code.