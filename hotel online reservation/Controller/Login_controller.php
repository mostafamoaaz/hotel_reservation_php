<?php
    include_once '../Model/select.php';
    include_once '../Model/common.php';
    
    if(isset($_POST['submit-login']) AND $_POST['submit-login'] == "Login")
    {
           if(strpos($_POST['login-user'] , "manager") !== false )
           {
                include_once "../Model/Manager.php";
                $L_admin = new Manager();
                $L_admin->Login_admin($_POST['login-user'],$_POST['login-password']);
            }           
        
    }