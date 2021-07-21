<?php
class Test
{
    public function __construct()
    {
        echo "constuct";
    }
    public function show()
    {
        echo "show method";
    }
    public function __destruct()
    {
        echo "destruct";
    }
}
$test = new Test();
$test->show();