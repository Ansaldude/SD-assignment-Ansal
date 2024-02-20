<?php
include ('../dbconnect.php');

class register extends DB_con
{
    protected $table = 'tblusers';
    public function usernameavailblty($username) {
        $result =mysqli_query($this->dbh,"select username FROM tblusers WHERE username='$username'");
        return $result;
        
        }
        
        // Function for registration
        public function registration($fullname,$lastname,$username,$email,$password)
            {
              return $this->save(compact('fullname','lastname','username','email','password'));
            }
        

}


?>