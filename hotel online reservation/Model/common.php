<?php

	class common{

		public function connectToDB(){
			$connect_ob = new Database();
                        $connect_ob->connect();
                        
 		}

		public function closeDB(){
			$connect_ob2 =new Database();
                        $connect_ob2->close();
		}		
	}