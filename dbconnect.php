<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'car');


class DB_con
{

    protected $dbh;
	protected $table;
	protected $sql;

    public function __construct()
    {
        $this->dbh = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    public function save($data)
    {
        $cols = implode(',', array_keys($data));
        $values = '"' . implode('","', $data) . '"';
        $sql = "INSERT INTO $this->table ($cols) VALUES($values)";

        return $this->dbh->query($sql);
	}
	
	public function select(...$columnNames)
	{
		$this->sql = implode(',', $columnNames);
		$this->sql = "SELECT $this->sql FROM $this->table";
		return $this;
	}
	public function update(array $data)
	{
		$sql = "UPDATE $this->table SET";
		$len = count($data) - 1;
		$counter = 1;
		$append = ',';
		foreach($data as $columnName => $value) {
			if($counter == $len) {
				$append = 'AND';
			}
			$sql = "$sql $columnName = '$value' " . $append;
			$counter++;
		}
		$sql = trim($sql, ' AND');
		$sql = trim($sql, ' ,');
		$this->sql = "$sql $this->sql";
		return $this->dbh->query($this->sql);
	}
	public function delete()
	{
		$this->sql = "DELETE FROM $this->table $this->sql";
		return $this->dbh->query($this->sql);	
	}

	public function where($column, $operator, $value)
	{
		if(strpos($this->sql, 'where') === false) {
			$this->sql = "$this->sql where $column $operator '$value'";
		} else {
			$this->sql = "$this->sql and $column $operator '$value'";
		}
		return $this;
	}

	public function get()
	{
		$data = [];
		$result = $this->dbh->query($this->sql);
		if($result && $result->num_rows) {
			while($item = $result->fetch_assoc()) {
				$data[] = $item;
			}
		} 
		return $data;
	}

}


function dump($data) {
	echo '<pre>';
	print_r($data);
	echo '</pre>';
	exit;
}