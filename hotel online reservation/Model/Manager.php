<?php

/**
* 
*/
class Manager
{

	//attributes

	private $id;
	private $Name;
	private $User_name;
	private $Password;
	private $Phone_num;
	private $Address;

 //functions

	// login fun.
	public function __construct(){ 
			include_once "common.php";
		include_once "select.php";
		$connect_database = new common ();
		$connect_database->connectToDB();
	}

	public function Login_admin($User_name,$Password) 
	{
		include_once "common.php";
		
		
		$selec_login1= new select ("user_name","manager",null);
		$log1 = $selec_login1->getRecord();
		

		$selec_login2= new select ("password","manager",null);
		$log2 = $selec_login2->getRecord();

		if($log1>0 AND $log2>0)
		{
			echo "admin login succed";
			return TRUE ;
		}
		else
		{
			echo "admin not login succed";
			return False ;
		}
		$connect_database = new common ();
		$connect_database->closeDB();
		//$this -> Login_admin("manager","123");
	}

 	// view_all_rooms fun .

	public function View_all_rooms()
	{

		$selec_room_single = new select("room_available,room_status","room","room_available=1 AND room_type ='single_room'AND room_status = 1 ");
		$selec_room_double = new select("room_available,room_status","room","room_available=1 AND room_type ='double_room'AND room_status = 1 ");
		$selec_room_trible = new select("room_available,room_status","room","room_available=1 AND room_type ='triple_room'AND room_status = 1 ");
		$lists = array(
			"single" => $selec_room_single->getRecord(),
			"double" => $selec_room_double->getRecord(),
			"trible" => $selec_room_trible->getRecord(),
		);
		echo"succeed";
		$connect_database = new common ();
		$connect_database->closeDB();
		return $lists;
	}

	//cancel fun.

	public function Cancel_book_admin($reserve_id , $room_id)
	{
		include_once"Reservation.php";
		
		$ob_reserve = new Reservation();
	
		$ob_reserve->Cancel_reservation($reserve_id , $room_id); // error in line 101 class reservation
		echo"succeed";
	}

	//maintain fun.

	public function Maintain_room($room_num)
	{
		include_once"Room.php";
		$set_room=new Room();
		$set_room -> Maintain($room_num);
		echo"succeed";
	}

	//View_all_reports fun.

	public function View_all_reports()
	{

		$selec_report = new select ("message_id","feedback",null);
		echo"succeed";
		return $selec_report->getRecord();
	}

	

}



?>