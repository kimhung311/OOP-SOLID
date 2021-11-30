<?php 
    class Animal{
        function ann(){
            echo 'Động vật đang ăn';
        }
        function an($a){
            echo 'Con '.$a.' dang ăn';
        }
    }
    $a = new Animal();
    $a->ann();
    $a->an("Chós");
?>