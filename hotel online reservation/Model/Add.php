<?php
include_once 'common.php';
include_once 'Database.php';


	class Add extends common{
		private $data;
		private $table_name;
		private $db;

		public function __construct($data , $table_name){
			if (is_array($data)) {
				$this->data       = $data;
				$this->table_name = $table_name;
			}else{
				throw new Exception("Error : Data must be in an array...!!!");	
			}
			
			//$this->connectToDB();
			$this->addData($this->data);
			//$this->closeDB();
		}

		public function addData($data){
			foreach ($data as $column => $value) {
				$columns[] = $column;
				$values[]  = $value;
			}

			$table_columns      = implode($columns , ",");
			$bindParam_columns  = ':' . implode($columns , ",:");

			$sql   = "INSERT INTO $this->table_name ($table_columns) VALUES ($bindParam_columns)";
			//$db    = new Database(null);
			$query = $conection->prepare($sql);  //error here >.<

			foreach ($columns as $column) {
				$query->bindParam(":$column" , $data[$column]);
			}

			if ($query->execute()) {
				return TRUE;
				echo $sql;

			}else{
				throw new Exception("Error : Can't insert data...!!!");
				return FALSE;
			}
		}
	}