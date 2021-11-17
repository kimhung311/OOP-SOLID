<?php 
  interface Cat{
    public function body();
}

class Header implements Cat{
    private $eye;
    private $nose;
    public function _construct($eye, $nose){
        $this->eye = $eye;
        $this->nose = $nose;
    }
    public function body(){
        return $this->eye + $this->nose;
    }
}
?>