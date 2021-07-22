<?php
//start with abstract keyword
//include at least abstract method 
//use extends another class
abstract class Building
{
    public $name = "sweet home";
    abstract public function getWindow();
    public function __construct()
    {
        echo $this->name;
    }
}
class Home extends Building
{
    public function getWindow()
    {
        echo 12;
    }
}
$h = new Home();
$h->getWindow();