<?php
class Database
{
    //property
    public $host = "localhost";
    //method
    function connection()
    {
        return $this->hot;
    }
    function all($talbe = 'some')
    {
        return $table;
    }
}
$db = new Database();
echo $db->all('users');
echo $db->connection();