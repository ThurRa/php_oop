<?php
//instances.
//property static $
class Db
{
    public static $instance;
    public function __construct()
    {
        self::$instance = new PDO("mysql:host=localhost;dbname=php_course", "root", "");
        echo "connected";
    }
    public function getinstance()
    {
        if (!self::$instance) {
            new Db();
        }
        return $this;
    }
    public function getAll($table)
    {
        $sql = "select * from $table";
        $res = self::$instance->prepare($sql);
        $res->execute();
        return $res->fetchAll(PDO::FETCH_OBJ);
    }
    public function getOne()
    {
        $sql = "select * from users where id=2";
        $res = self::$instance->prepare($sql);
        $res->execute();
        return $res->fetch(PDO::FETCH_OBJ);
    }
}






$db = new Db();
// $user = $db->getinstance()->getAll('users');
$user = $db->getinstance()->getOne();
echo "<pre/>";
print_r($user->name);