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
}
$db = new Database();
echo $db->connection();