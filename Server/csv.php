<?php

class csv extends mysqli
{
	
	public function __construct()
	{
		parent::__construct("localhost", "root", "", "csv");
		if($this->connect_error) {
			echo "Fail to connetc to DataBase : ". $this->connect_error;
		}
	}

	public function import($file)
	{
		$file = fopen($file, 'r');
		while ($row = fgetcsv($file)) {
			var_dump($row);
		}
	}
}