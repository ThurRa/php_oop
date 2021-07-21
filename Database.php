<?php
class Database
{
    //property name
    public $host = "localhost";
    //method name
    function connection()
    {
        return $this->host;
    }
}
$db = new Database();
// echo $db->connection();
echo $db->host;