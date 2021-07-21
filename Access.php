<?php
class Test
{
    //access modifier
    // public ->all for all scope
    //protected ->use inside the class scope 1 and extends other class
    //private
    //scope 1
    protected $age = 22;
    public function showAge()
    {
        echo $this->age;
    }
}
$t = new Test();
$t->showAge();
// scope 2

class Person extends Test
{
    //scope 3
    public function showAge()
    {
        echo $this->age;
    }
}
$p = new Person();
$p->showAge();