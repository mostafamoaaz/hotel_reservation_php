<?php
include_once 'Database.php';

	class Update{
		private $table_name;
		private $data;
		private $cond;

		public function __construct($cond , $data , $table_name){
			if (is_array($data)) {
				$this->data       = $data;
				$this->table_name = $table_name;
			    $this->cond  = $cond;
			}else{
				throw new Exception("Error : Data must be in an array...!!!");	
			}	
		}

		/*private $pk_column;

		public function __construct($pk_column , $data , $table_name){
			if (is_array($data)) {
				$this->data       = $data;
				$this->table_name = $table_name;
			    $this->pk_column  = $pk_column;
			}else{
				throw new Exception("Error : Data must be in an array...!!!");	
			}	
		}*/

		/*public function updateData($id){
		    $sql   = "UPDATE $this->table_name SET ";

		    foreach ($this->data as $column => $value) {
		    	$sql .= " '" . $column . "'=:" . $column . ", ";
		    }

		    $pattern = "+-*0/";
		    $sql .= $pattern;
		    $sql  = str_replace(", ".$pattern , " " , $sql);
		    $sql .= "WHERE $this->pk_column = $id";

		    //var_dump($this->data);
            //echo "<br><br><br><br><br>";

			$query = Database::$connection->prepare($sql);  

			foreach ($this->data as $column => $value) {
				$bp = $query->bindParam(':$column' , $this->data[$column]);
			}
			//var_dump($bp);

			echo "<br><br><br><br><br>" . "Before Execute >>>>>>>>> " . $sql . "<br><br><br><br><br>";

		    if ($query->execute()) {
		    	return TRUE;
		    	//echo "<br><br><br><br><br>" . "Executed >>>>>>>>> " . $sql . "<br><br><br><br><br>";
			}else{
				throw new Exception("Error : Can't Update data...!!!");
				return FALSE;
			}
	    }*/





	    public function updateData(){
		    $sql   = "UPDATE $this->table_name SET ";

		    foreach ($this->data as $column => $value) {
		    	//$sql .= " '" . $column . "'=:" . $column . ", ";
		    	//$sql .= "'$column'=:$column, ";
		    	$sql   .= "'$column'" . "=" . ":$column" . ", ";
		    }

		    $pattern = "+-0*/";
		    $sql .= $pattern;
		    $sql  = str_replace(", ".$pattern , " " , $sql);
		    $sql .= "WHERE $this->cond";

		    //var_dump($this->data);
            //echo "<br><br><br><br><br>";

			$query = Database::$connection->prepare($sql);  

			foreach ($this->data as $column => $value) {
				$bp = $query->bindParam(':$column' , $this->data[$column]);
			}
			//var_dump($bp);

			echo "<br><br><br><br><br>" . "Before Execute >>>>>>>>> " . $sql . "<br><br><br><br><br>";

		    if ($query->execute()) {
		    	return TRUE;
		    	//echo "<br><br><br><br><br>" . "Executed >>>>>>>>> " . $sql . "<br><br><br><br><br>";
			}else{
				throw new Exception("Error : Can't Update data...!!!");
				return FALSE;
			}
	    }
    }