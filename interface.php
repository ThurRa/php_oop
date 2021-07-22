<?php
//interface use implements other class
//must be abstract method
//don't use properties 
// all methods 

interface Animal
{
    public function attack();
    public function makeSong();
}
class Cat implements Animal
{
    public function attack()
    {
        echo "scratches";
    }
    public function makeSong()
    {
        echo "mewo";
    }
}
class Dog implements Animal
{
    public function attack()
    {
        echo "bite";
    }
    public function makeSong()
    {
        echo "wook wook";
    }
}

$c = new Cat();
$c->attack();
$c->makeSong();

$d = new Dog();
$d->attack();
$d->makeSong();