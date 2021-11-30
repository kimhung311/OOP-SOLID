<?php
class Animal
{
    public $leg;
    public $wing;
    public function __construct($leg, $wing)
    {
        $this->leg = $leg;
        $this->wing = $wing;
    }
    public function getLeg()
    {
        return 'Animal has legs:' . $this->leg;
    }
    public function getWing()
    {
        return 'Animal has  wings:' . $this->wing;
    }
}
class Human
{
    public $animal;
    public function __construct(Animal $animal)
    {
        return  $this->animal = $animal;
    }
    public function leg()
    {
        return  $this->animal->getLeg();
    }
    public function wing()
    {
        return  $this->animal->getWing();
    }
}
$human = new Human(new Animal('chó ', 'chim '));
echo $human->leg();
echo '<br>';
echo $human->wing();

// var_dump($human);