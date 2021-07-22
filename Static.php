<?php
class Test
{
    public static $name = "Thura Aung";
    public static function showName()
    {
        echo "this is static method";
    }
}
Test::showName();
class Some
{
    public function __construct()
    {
        Test::showName();
    }
}
$s = new Some();
// echo Test::$name;