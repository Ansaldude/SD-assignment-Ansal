<?php
require_once '../../model/adminlogin.php';
use PHPUnit\Framework\TestCase;

class admintest extends TestCase
{
    public function tess_AdminLogin($uname, $password)
    {
        $this->assertEquals($uname, $password);
    }
}
