<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Double_room
 *
 * @author shehab khaled
 */
class Double_room {
    private static $Num_People2 = 2;
    private static $Room_Price2 = 100;
    
    
    public function getpeople_num(){
            return $this->Num_People2;
        }
        public function getroom_price(){
            return $this->Room_Price2;
        }
}
