<?php
class StockItem // StockItem biểu diễn mặt hàng trong kho (số lượng, tình trạng)
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
class Product  //biểu diễn mặt hàng bán trên trang web, liên quan đến mặt hàng lưu trữ trong kho.
{
    private $stockItem;
    private $code;

    public function __construct($code, $stockQuantity, $stockStatus)
    {
        $this->stockItem  = new StockItem($stockQuantity, $stockStatus);
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

$product = new Product("101010", 50, "Áo ");
var_dump($product->getStockItem());
var_dump($product->getCode());
// Code trên tạo ra lớp Product, khi khởi tạo Product thì cũng khởi tạo đối tượng StockItem trong hàm tạo của lớp Product bằng cách truyền các tham số $stockQuantity, $stockStatus
// Với cách sử dụng code như trên, đó là đoạn code bình thường không có vấn đề gì, tuy nhiên khi vận hành, bảo trì, mở rộng có thể phát sinh một số vấn đề:
// StockItem và Product là một cặp cố định, vậy thì một lúc nào đó StockItem thay đổi tham số khởi tạo (thêm, bớt) thì sao? Vậy bạn cần phải viết lại hàm khởi tạo trong Product cũng như tất cả các lớp có sử dụng phiên bản cũ của StrockItem