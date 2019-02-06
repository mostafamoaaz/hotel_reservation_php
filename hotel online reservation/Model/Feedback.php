<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Feedback
 *
 * @author Adel Reda
 */
class Feedback {
    
                public $Message;
                public $Message_date;
                Private $Message_sender;


                ////////////////////////////////////////////////////////////////
                
                public function Make_report($name,$email,$phone_num,$msg){
                    $connectdb = new common();
                    $connectdb ->connectToDB();
                    $this->Message_sender=$name;
                    $this->Message = $msg;
                    $data = array ("message"=>$this->Message,"message_sender"=>$name);
                    $adding = new Add( $data , "feedback");
                    $adding->addData();
                    $connectdb->closeDB();
                }
                
                public function View_report(){
                    $connectdb = new common();
                    $connectdb ->connectToDB();
                    $cond = NULL;
                    $sedata = new select("*","feedback",$cond);
                    $fbarray = $sedata->getRecord();
                    $connectdb->closeDB();
                }
                
                ////////////////////////////////////////////////////////////////
                
}
