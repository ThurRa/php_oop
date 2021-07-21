<?php
class Test
{
    //access modifier
    // public ->all for all scope
    //protected ->use inside the class scope 1 and extends other class
    //private
    //scope 
    private $name = "thura";
    public function showName()
    {
        echo $this->name;
    }
    private function showAge()
    {
        echo "this show age private method";
    }
    public function some()
    {
        $this->showAge();
    }
}
$t = new Test();
echo $t->showName();
$t->some();

// scope 2

class Person
{
    //scope 3

}