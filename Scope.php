<?php
class Database
{
    const HOST = "localhost";
}
echo Database::HOST;
class Test
{
    public function showHost()
    {
        echo Database::HOST;
    }
}
$t = new Test();
$t->showHost();