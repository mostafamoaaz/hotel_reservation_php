<?php
include_once 'Database.php';

	class Delete{
		private $table_name;
		private $pk_column;

		public function __construct($pk_column , $table_name){
			$this->table_name = $table_name;
			$this->pk_column  = $pk_column;
		}

		public function deleteData($id){
		    $sql   = "DELETE FROM $this->table_name WHERE $this->pk_column = $id";
			$query = Database::$connection->prepare($sql); 

			//echo "<br><br><br><br><br>" . $sql . "<br><br><br><br><br>";
			//echo "<pre>"; var_dump($data); echo "</pre>";

		    if ($query->execute()){
				return TRUE;
			}else{
				throw new Exception("Error : Can't delete data...!!!");
				return FALSE;
			}
	    }
    }