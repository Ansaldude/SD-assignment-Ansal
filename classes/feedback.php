<?php
require_once __DIR__ . '/../dbconnect.php';

class feedback1 extends DB_con {

	protected $table = 'feedback';
    public function addfeedback($name,$email,$date,$comment)
	{

	return $this->save(compact('name','email','date','comment'));
    }
    
	public function fetchdata()
    {
        $result = mysqli_query($this->dbh, "select * from feedback");
        return $result;

	}
	public function deletefeedback($rid)
    {
        return $this->where('fid', '=', $rid)->delete();
    }
}


?>