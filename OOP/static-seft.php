<?php

class ConNguoi
{
    protected static $name = 'ConNguoi';

    public function getName()
    {

        // echo self::$name;
        echo 'connguoi';
        // echo static::$name;
    }
    public function getage()
    {
        echo '22';
    }
    public function say_name()
    {
        self::getName();
    }
}

class NguoiLon extends ConNguoi
{
    protected static $name = 'NguoiLon2';
    public function getName()
    {
        echo static::$name;
    }
    public function getage()
    {
        echo '23';
    }
}

$a = new NguoiLon();
$a->getName();
$a->say_name();