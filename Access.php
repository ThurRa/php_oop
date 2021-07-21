<?php
class Test
{
    //access modifier
    // public
    //protected
    //private
    //scope 1
    public $name = "thura";
    public function showName()
    {
        echo $this->name;
    }
}
// scope 2
$test = new Test();
$test->showName();
class Person
{
    public function showname()
    {
        $test = new Test();
        $test->showName();
    }
}
$p = new Person();
$p->showname();