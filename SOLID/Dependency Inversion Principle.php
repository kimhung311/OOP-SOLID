<?php 
interface Laptrinh
{
    public function ngonngu();
}
class php implements Laptrinh{
    public function ngonngu(){
        echo "ngon ngữ php";
    }
}

class IOS implements Laptrinh{
    public function ngonngu(){
        echo "ngon ngữ ios";
    }
}
class  Code {
    public $ngonngu;
    public function __construct(Laptrinh $ngonngu){
        $this->ngonngu = $ngonngu;
    }
    public function code() {
        $this->ngonngu->ngonngu();
    }
}
$ngonngu = new Code(new php());
$ngonngu->code();

?>