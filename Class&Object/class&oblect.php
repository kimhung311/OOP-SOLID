<?php
class Animals
{
    // Properties thuộc tính
    public $name;
    public $weight;

    // Animal bao gồm 2 thuộc tính (name, weight) và 2 phương thức (setName, getName) 
  

    // Phương thức
    function set_name($name) // phương thức set_name() dùng để thiết lập giá trị cho thuộc tính $name,
    {
        $this->name = $name; // $this là chỉ object hiện tại và sử dụng  bên trong phương thức
    }


    function get_name() //  còn phương thức get_name() thì dùng để lấy giá trị của thuộc tính $name.
    {
        return $this->name;
    }

    function set_weight($weight)
    {
        $this->weight = $weight;
    }

    function get_weight()
    {
        return $this->weight;
    }
}
//  object $buffalo, $pig là thể hiện của class Animal.
// Các object của một class được tạo bằng cách sử dụng từ khóa new.
//  object $buffalo, $pig là thể hiện của class Animal.
$buffalo = new Animals();  //Các object của một class được tạo bằng cách sử dụng từ khóa new.
$pig = new Animals();

$buffalo->set_name('Con trâu');
$buffalo->set_weight(200);
$pig->set_name('Con heo');
$pig->set_weight(100);


echo $buffalo->get_name();
echo $buffalo->get_weight();
echo "<br>";
echo $pig->get_name();
echo $pig->get_weight();



//  ta có thể tạo nhiều object từ một class. Mỗi object có nhiều thuộc tính và phương thức được định nghĩa trong class, nhưng chúng sẽ có các giá trị thuộc tính khác nhau.