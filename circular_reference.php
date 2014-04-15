<?php 

class OBJECT 
{
    public function __construct()
    {
        debug_print_backtrace();
    } 
}

class ABC extends OBJECT
{
    public function __construct()
    {
        print "abc..."; 
    }

    public function create_new()
    {
        $obj = new CDE();
        return $obj;
    }
}

class CDE extends OBJECT
{
    public function __construct()
    {
        $abc = new ABC();
        $abc->create_new();
    }
}

$abc = new ABC();
$abc->create_new();
