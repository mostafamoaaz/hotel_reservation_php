<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Trible_Room
 *
 * @author shehab khaled
 */
class Trible_Room {
    private static $Num_People3 = 3 ;
    private static $Room_Price3 = 150;
    
    public function getpeople_num(){
            return $this->Num_People3;
        }
        public function getroom_price(){
            return $this->Room_Price3;
        }
}
