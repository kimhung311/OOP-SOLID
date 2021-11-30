<?php 

    class laptrinh {
        protected $ngonngu;
    }
    
    class ngonngu extends laptrinh {

        function getngongu(){
            return $this->ngonngu = 'ngon ngữ php';
        }
        
    }
       
    $ex= new ngonngu();
    echo $ex->getngongu();
?>


