<?php
class Person
{
    private $name, $age;
    public function setName()
    {
        $this->name = "Thura";
        return $this;
    }
    public function setAge()
    {
        $this->age = 23;
        return $this;
    }
    public function detail()
    {
        echo $this->name . $this->age;
        return $this;
    }
}
$p = new Person();
$p->setName()->setAge()->detail();