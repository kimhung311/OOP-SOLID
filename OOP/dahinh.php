<?php 
    //  tính đa hình
    class convat{
        public function an(){
            echo "<h1> con vật đang ăn </h1>";
        }
    }
    class conmeo1 extends convat{
        public function an(){
            echo "<h1> Con mèo đang ă cá";
        }
    }
    class concho extends convat{
        public function an(){
            echo "<h1> Con chó đang ăn cơm"; 
        }
    }
    $conmeo = new convat();
    $conmeo->an();

    $conmeo1 = new conmeo1();
    $conmeo1->an();

    $conmeo1 = new concho();
    $conmeo1->an();

?>