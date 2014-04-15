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
    private $fg;

    public function __construct()
    {
        print "abc..."; 
    }

    public function setVar($obj)
    {
        $this->fg = $obj;
    }
}

class CDE extends OBJECT
{
    public $member = null;

    public function __construct($obj)
    {
        $this->member = $obj;
    }
}

class FG extends OBJECT
{
    public $member = null;

    public function __construct($obj)
    {
        $this->member = $obj;
    }
}



$abc = new ABC();
$cde = new CDE($abc);
$fg = new FG($cde);
$abc->setVar($fg);

