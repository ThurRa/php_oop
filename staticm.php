<?php
class Test
{
    public $name = "Thura";
    public static function showName()
    {
        $t = new Test();
        echo $t->name;
    }
}
$t = new Test();
$t->showName();