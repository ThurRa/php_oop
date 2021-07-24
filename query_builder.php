<?php
class DB
{
    private static $dbh = null;
    private static $res, $data, $count, $sql;
    public function __construct()
    {
        self::$dbh = new PDO("mysql:host=localhost;dbname=php_course", "root", "");
    }
    public function query($sql)
    {
        self::$res = self::$dbh->prepare($sql);
        self::$res->execute();

        self::$count = self::$res->rowCount();
        return $this;
    }
    public function get()
    {
        self::$data = self::$res->fetchAll(PDO::FETCH_OBJ);
        return self::$data;
    }
    public function getOne()
    {
        self::$data = self::$res->fetch(PDO::FETCH_OBJ);
        return self::$data;
    }
    public function count()
    {
        return self::$count;
    }
    public static function table($table)
    {
        $sql = "select * from $table";
        self::$sql = $sql;
        $db = new DB();
        $db->query(self::$sql);
        return $db;
    }
    public function orderBy($col, $value)
    {
        self::$sql .= " order by $col $value";
        $this->query(self::$sql);
        return $this;
    }
    public function where($col, $operator, $value = "")
    {
        if (func_num_args() == 2) {
            self::$sql .= " where $col=$operator";
        } else {
            self::$sql .= " where $col $operator $value";
        }
        $this->query(self::$sql);
        return $this;
    }
}
// $db = new DB();
// $user = $db->query("select * from users")->count();
// echo $user;
// echo "<pre>";
// print_r($user);
//$db->query('crud')->getOne();//wanna get user object
//$db->query('crud')->get()->count();//wanna get user object
$user = DB::table("users")->orderBy('id', 'desc')->get();
$user = DB::table("users")->where('id', 1)->getOne();
echo "<pre>";
print_r($user);