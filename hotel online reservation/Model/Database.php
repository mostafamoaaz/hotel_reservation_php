<?php
include_once 'vars.php';
class Database{
	private $server_name;
	private $user;
	private $password;
	private $db_name;
	private $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
	public  static $connection;
	
	public function __construct(){ 
                        $ob_vars = new vars();
		
			$this->server_name = $ob_vars->server_name();
			$this->user        = $ob_vars->user();
			$this->password    = $ob_vars->password();
			$this->db_name     = $ob_vars->db_name();
			self::$connection  = new PDO("mysql:host=$this->server_name;dbname=$this->db_name", $this->user , $this->password , $this->options);
	    }
    
			
	public function connect(){
		try {
   		    self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		echo "Connected successfully" . "<br><br><br><br><br>"; 
        }catch(PDOException $e){
    	echo "Connection failed : " . $e->getMessage() . "...!!!";
     }
    }
    
	public function close(){
		self::$connection = NULL;
	}
}
