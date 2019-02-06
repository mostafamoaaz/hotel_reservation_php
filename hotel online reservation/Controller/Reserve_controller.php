<?php

    include_once ('../Model/Reservation.php');
    include_once ('../Model/select.php');
    include_once ('../Model/common.php');
    if($_POST)
    {
        if(isset($_POST['submit']) && $_POST['submit'] == 'CHECK YOUR BOOK')
        {
           /* $connect = new common();
            $connect->connectToDB();
            $new_ob = new select("*", "room", NULL);
            $new_ob->getRecord();
            $connect->closeDB();*/
            echo "<br>"."every thing is good" ;
            $check_in = $_POST['home-checkin'];
            $check_out = $_POST['home-checkout'];
            $ppl_num = $_POST['home-adults-checker'];
            $room_num = $_POST['home-rooms-checker'];
            echo $check_in . "<br>" . $check_out . "<br>" .$ppl_num ;
            //gets rooms types too into an associative array
            // $asso_arr = array("Single" =>  , "Double" =>  , "Trible" => );
            $obj_reserve = new Reservation();
           // $obj_reserve->check_avalible_rooms($asso_arr);
        }
         else 
         {
             echo "we can't get data" ;
         }
    }
    else
    {
        echo "we are sorry for this methods" ;
    }
