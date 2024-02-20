<?php

include '../dbconnect.php';

class adminlogin extends DB_con
{
	protected $table = 'tblusers';

	public function login($uname, $pasword)
    {
		return $this->select('userid','fullname','lastname')
		->where('username', '=', $uname)
		->where('password', '=', $pasword)
		->get();
    }

}
