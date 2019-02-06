<?php
include_once 'Database.php';

	class select{
		private $table_name;
		private $cond;
		private $selected_columns;

		public function __construct($selected_columns ,  $table_name , $cond){
			$this->table_name = $table_name;
			$this->cond  = $cond;
			$this->selected_columns = $selected_columns;
		}
		/*private $column;

		public function __construct($column , $table_name){
			$this->table_name = $table_name;
			$this->column  = $column;
		}

		public function getRecord($val){
			$sql   = "SELECT * FROM $this->table_name WHERE $this->column = '$val'";

			$query = Database::$connection->prepare($sql); 

			if (!$query->execute()) {
				throw new Exception("Error : Can't Select data...!!!");
			}else{
				$data = $query->fetchAll(PDO::FETCH_ASSOC);
				echo "<br><br><br><br><br>" . $sql . "<br><br><br><br><br>";
				echo "<pre>"; var_dump($data); echo "</pre>";
			}
			return $data;
		}
		*/

		/*public function getRecord(){

			if ($this->cond !== NULL) {
				$sql   = "SELECT * FROM $this->table_name WHERE $this->cond";
			}else{
				$sql   = "SELECT * FROM $this->table_name";
			}
			
			$query = Database::$connection->prepare($sql); 

			if (!$query->execute()) {
				throw new Exception("Error : Can't Select data...!!!");
			}else{
				$data = $query->fetchAll(PDO::FETCH_ASSOC);
				echo "<br><br><br><br><br>" . $sql . "<br><br><br><br><br>";
				echo "<pre>"; var_dump($data); echo "</pre>";
			}
			return $data;
		}*/
		public function getRecord(){

			if ($this->cond !== NULL) {
				$sql   = "SELECT $this->selected_columns FROM $this->table_name WHERE $this->cond";
			}else{
				$sql   = "SELECT $this->selected_columns FROM $this->table_name";
			}
			
			$query = Database::$connection->prepare($sql); 

			if (!$query->execute()) {
				throw new Exception("Error : Can't Select data...!!!");
			}else{
				$data = $query->fetchAll(PDO::FETCH_ASSOC);
				echo "<br><br><br><br><br>" . $sql . "<br><br><br><br><br>";
				echo "<pre>"; var_dump($data); echo "</pre>";
			}
			return $data;
		}

        }