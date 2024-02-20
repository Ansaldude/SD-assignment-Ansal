<?php
include ('../dbconnect.php');

class register extends DB_con
{
    protected $table = 'users';
    public function usernameavailblty($uname) {
        $result =mysqli_query($this->dbh,"select username FROM users WHERE username='$uname'");
        return $result;
        
        }
        
        // Function for registration
        public function registration($fullname,$lastname,$username,$email,$password)
            {
              return $this->save(compact('fullname','lastname','username','email','password'));
            }
        

}


?>