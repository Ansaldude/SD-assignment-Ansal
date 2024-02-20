<?php
include '../dbconnect.php';

class user extends DB_con
{
	protected $table = 'users';
	
    public function login($uname, $pasword)
    {
		return $this->select('userid','fullname','lastname')
		->where('username', '=', $uname)
		->where('password', '=', $pasword)
		->get();
    }

}
