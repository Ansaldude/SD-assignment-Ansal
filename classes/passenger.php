<?php
include ('../dbconnect.php');

class passenger extends DB_con{
	protected $table = 'passengerdetails';
    public function addpassenger($name,$address,$contact,$email)
	{
	
	return $this->save(compact('name','address','contact','email'));
	}

}


?>