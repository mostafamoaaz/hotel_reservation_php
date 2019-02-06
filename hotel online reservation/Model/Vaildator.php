<?php
	class effxception{

		function checkString($value , $str){
		 	$pattern  = "'[A-Za-z][أ-ي][0-9]',().:-$";
		 	$validate = eregi($pattern, $value);

		 	if ($validate == FALSE) 
		 		throw new Exception("Error : $str must ba a valid string...!!!");
		 	return $validate;
		}

		function checkEmail($value , $email){
		 	$validate = filter_var($value , FILTER_VALIDATE_EMAIL);

		 	if ($validate == FALSE) {
		 		throw new Exception("Error : $email must ba a valid email...!!!");
		 	return $validate;
		 	}
		}

		function checkInteger($value , $int){
		 	$validate = filter_var($value , FILTER_VALIDATE_INT);
		 	
		 	if ($validate == FALSE) 
		 		throw new Exception("Error : $int must ba a valid integer...!!!");
		 	return $validate;
		}

		function checkEmpty($value , $req){
		 	$validate = empty($value);
		 	
		 	if ($validate == FALSE) 
		 		throw new Exception("Error : $req must be not empty...!!!");
		 	return $validate;
		} 		 	
	}