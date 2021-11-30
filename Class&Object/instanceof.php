<?php
class Animal6
{
    // Properties
    public $name;
    public $weight;

    // Phương thức
    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}
$buffalo = new Animal6();
if ($buffalo instanceof Animal6) {
    echo "Đối tượng buffalo là một thể hiện của class Animal";
}
// có thể sử dụng instanceof để kiểm tra xem object có thuộc về 1 class cụ thể hay không.