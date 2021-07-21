<?php
class Database
{
    //property 
    public $host = "localhost";
    //method 
    function connection()
    {
        echo "connected";
    }
}
$db = new Database();
// var_dump($db->connection());
$db->connection();
echo $db->host;