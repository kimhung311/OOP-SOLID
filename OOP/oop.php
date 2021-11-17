<?php 
    // khai báo  class và object
    class lopA{
        var $hovaten;
        var $tuoi;
        var $address;
    }
// ------------------------------------
// ------------------------------------
    //  tính đa hình  & thừa kế
    class conmeo{
        public function an(){
            echo "<h1> con mèo đang ăn </h1>";
        }
    }
    class dichoi extends Conmeo{
        public function dichoi(){
            echo "<h1> Con mèo đang đi chơi";
        }
    }
    $conmeo = new conmeo();
    $conmeo->an();

    $conmeo1 = new dichoi();
    $conmeo1->dichoi();

    // ------------------------------------

    // tính đóng gói
    class laptrinh{
        public function ngonngu1(){
            //code
        }
        private function ngonngu2(){
            //code
        }
        protected function ngonngu3(){
            //code
        }
    }
    // ------------------------------------

    class laptrinh1{              //  mức truy câp private
        private $ngonngu;
        function setngonngu($ngonngu){
            return $this->ngonngu = $ngonngu;
        }
        function getngonngu(){
            return $this->ngonngu;
        }
    }
    $vidu = new laptrinh1();
    $vidu->setngonngu("lap trinh php");

    // ------------------------------------

    class laptrinh2{              //  Mức truy cập protected
        protected $ngonngu;
    }
    class ngonngu extends laptrinh2{
        function getngonngu(){
            $this->ngonngu = 'ngon ngu php';
        }
    }
    $ex = new ngonngu();
    $ex->getngonngu();
  
    // ------------------------------------

    
    class Infor{   // Mức truy cập public
        public $name = "Nguyễn Văn A";
        public $age;
        public function getname(){
            return $this->name;
        }
    }
    $vd = new Infor();
    echo $vd->name =  "Nguyễn Văn A";
    echo $vd->age = 22;
?>