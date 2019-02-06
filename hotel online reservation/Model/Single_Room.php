<?php
    
    class Single_Room extends Room{
        
        private static $Num_People1 = 1;
        private static $Room_Price1 = 50;
        
        function __construct() {
            parent::__construct();
        }
        
        public function getpeople_num(){
            return $this->Num_People1;
        }
        public function getroom_price(){
            return $this->Room_Price1;
        }
    }
