<?php
require_once __DIR__ . '/../dbconnect.php';

class car extends DB_con
{
    protected $table = 'cardetails';

    public function addcar($car_type,  $fare,  $time, $date)
    {
        return $this->save(compact('car_type',  'fare', 'time', 'date'));
    }

    public function fetchdata()
    {
        $result = mysqli_query($this->dbh, "select * from cardetails");
        return $result;

    }

    public function fetchonerecord($id)
    {
        return $this->select('*')->where('carid', '=', $id)->get();
    }

    public function updatecar($fno,  $fare,  $time, $date, $id)
    {
        return $this->where('carid', '=', $id)->update([
            'car_type' => $fno,
            
            'fare' => $fare,
            
            'time' => $time,
            'date' => $date,
       
        ]);

    }
    public function deletecar($rid)
    {
        return $this->where('carid', '=', $rid)->delete();
    }

}
