<?php
require_once __DIR__ . '/../dbconnect.php';

class book extends DB_con
{
    protected $table = 'reserved';

    public function createbooking($car_type,$fare, $time, $date)
    {

        return $this->save(compact('car_type', 'fare', 'time', 'date'));
    }

    public function fetchdata()
    {
        $result = mysqli_query($this->dbh, "select * from reserved");
        return $result;

    }
    public function deletebook($rid)
    {
        return $this->where('id', '=', $rid)->delete();
    }

}
