<?php
class Animal1
{
    public $name;
    function set_name($name)
    {
        return  $this->name = $name;
    }
}
class People extends Animal1
{
    public $weight;
    function set_weight($weight)
    {
        return $this->weight = $weight;
    }
}
$buffalo = new People();
echo $buffalo->set_name("Con trâu");
echo $buffalo->set_weight("200");