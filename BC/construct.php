<?php
class MyClass
{
    // Constructor
    public function __construct()
    {
        echo 'Lớp "' . __CLASS__ . '" đã được khởi tạo!<br>';
    }

    // Destructor
    public function __destruct()
    {
        echo 'Lớp "' . __CLASS__ . '" đã được phá hủy.<br>';
    }
}

// Tạo một đối tượng mới
$obj = new MyClass;

// Phá hủy đối tượng
unset($obj);

// Xuất một in nhắn ở cuối file
echo "Kết thúc tập tin.";