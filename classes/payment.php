<?php
include ('../dbconnect.php');

class payment extends DB_con
{
	protected $table = 'payment';
    public function addpayment($name,$postal_code,$card_type,$card_no,$expiry_date)
	{
		return $this->save(compact('name','postal_code','card_type','card_no','expiry_date'));
	}

}


?>