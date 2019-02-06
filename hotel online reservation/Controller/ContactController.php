<?php
    if(isset($_POST['contact-submit']) AND $_POST['contact-submit'] == "Send")
    {
        $contactdata['Name'] = $_POST['contact-name'];
        $contactdata['Email'] = $_POST['contact-email'];
        $contactdata['Phone'] = $_POST['contact-phone'];
        $contactdata['Subject'] = $_POST['contact-subject'];
        $contactdata['Message'] = $_POST['contact-message'];
        try{
            include '../Model/Feedback.php';
            $contactus = new Feedback();
            $contactus->Make_report($contactdata['Name'] , $contactdata['Email'] , $contactdata['Phone'] ,  $contactdata['Message']);
        }catch(Exception $x){
            echo $x->getMessage();
        }
    }
?>