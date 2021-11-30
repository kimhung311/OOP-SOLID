<?php
interface Car
{
    public function run();
}
class Driver
{
    private $car;
    public function __construct(Car $car)
    {
        $this->car = $car;
    }
    public function drive()
    {
        $this->car->run();
    }
}

class Mercedes implements Car  // những người lái xe và những cái xe ô tô đều phụ thuộc vào interface Car,
{
    public function run()
    {
        echo 'Mẹc xà đí...!';
    }
}

class BMV implements Car
{
    public function run()
    {
        echo 'Bì èm ví...!';
    }
}
//  các class cụ thể như BMV, Mercedes phụ thuộc vào interface Car,
$a = new BMV();
echo $a->run();
echo "<br>";
$b = new Mercedes();
echo $b->run();