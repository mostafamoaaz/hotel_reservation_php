<?php
    
    // parent class of rooms
    class Room{
        private $Room_num;
        private $Room_floor;
        private $Room_status;
        private $Room_aailable;
        private $Room_type;
        
        function __construct() {
            include_once "Update.php";
        }
        
        // connect to database function
        
        public function Maintain($Room_number)
        {
            $connect = new common();
            $connect->connectToDB();
            $v = 0;
            $d = array('room_status' => $v);
            $maintain_room = new Update("room_num = $Room_number", $d , "room");
            $maintain_room->updateData();
            $connect->closeDB();
        }
    }
    

