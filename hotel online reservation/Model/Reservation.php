<?php

/**
 * Description of Reservation
 *
 * @author shehab khaled
 */
class Reservation {
    private static  $table_name = "reservation" ; // fixed table name 
    private $Total_price;
    private $Check_in;
    private $Check_out;
    private $Num_ppl;
    private $Num_rooms;   // must be array to calculate the price
    private $Payment_method;
    private $Id;  // auto increamental in database 
    private $Cust_id;
    private $file = '../connect/var.php' ; 
    
   /* function __construct($date_in , $date_out , $ppl_num , $Rooms_num , $payment , $cust_id )
    {
        // when you need to update date of your client if you want
        $this->Check_in = $date_in;
        $this->Check_out = $date_out;
        $this->Num_ppl = $ppl_num;
        $this->Num_rooms = $Rooms_num;
        $this->Payment_method = $payment;
        $this->Cust_id = $cust_id;
        
        Calc_Price($Rooms_num);
    }*/
    
    public function get_totalprice()
    {
        return $this->Total_price ;
    }
    
    private function Calc_Price($Num_rooms)
    {
        $S_O = new Single_Room();
        $D_O = new Double_room();
        $T_O = new Trible_Room();
        foreach ($Num_rooms as $key => $value)
        {
            if($key == 1)
            {
                $result1 = $value * $S_O->getroom_price();
            }
            else if($key == 2)
            {
                $result2 = $value * $D_O->getroom_price();
            }
            else if ($key == 3)
            {
                $result3 = $value * $T_O->getroom_price();
            }
        }
        $final_result = $result1 + $result2 +$result3;
        $this->Total_price = $final_result;
    }
    
    public function Collect_data ($in_date , $out_date , $num_ppl , $num_rooms , $payment , $cust_id , $price)
    {
        $data_arr = array();
        array_push($data_arr, $in_date , $out_date , $num_ppl , $num_rooms , $payment , $cust_id ,$price);
        return $data_arr ;
    }
    
    public function Book_reservation($in_date , $out_date , $num_ppl , $num_rooms , $payment , $cust_id)
    {
        $this->Check_in = $in_date;
        $this->Check_out = $out_date;
        $this->Num_ppl = $num_ppl;
        $this->Num_rooms = $num_rooms;
        $this->Payment_method = $payment;
        $this->Cust_id = $cust_id;
        
        Calc_Price($num_rooms);
        $connect_database = new common();
        $connect_database->connectToDB();
        $arr_data = Collect_data($this->Check_in , $this->Check_out , $this->Num_ppl , $this->Num_rooms , $this->Payment_method , $this->Cust_id , get_totalprice());
        $Add_method = new Add($arr_data , $this->table_name);
        $up_data = array("room_available" => "false");
        $book_room = new Update("room_num", $up_data, "room");
        $book_room->updateData($num_rooms);
        $connect_database->closeDB();
           
    }
    
    public function Cancel_reservation($reserve_id , $room_num) //room_num is an normal array
    {
        include_once "update.php";
        include_once "Delete.php";
        $connect_database = new common();
        $connect_database->connectToDB();
        $delete_reserve = new Delete("reservation_id", "reservation");
        $delete_reserve->deleteData($reserve_id); // error in line 19 class delete
        $arr_data = array("room_available" => "true");// check the number of updata or doing it in for loop 
        $free_room = new Update(null, $arr_data , "room");

        foreach ($room_num as $value)
        {
            $free_room->updateData($value);
        }
        $connect_database->closeDB();
    }
    
    public function check_avalible_rooms ($asso_arr)
    {
        $connect_database = new common();
        $connect_database->connectToDB();
        
        
        
        $connect_database->closeDB();
    }
}
