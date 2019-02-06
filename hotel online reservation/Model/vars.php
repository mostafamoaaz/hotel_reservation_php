<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of vars
 *
 * @author shehab khaled
 */
class vars {
        private $server_name = "localhost";
	private $user        = "root";
	private $password    = "";
	private $db_name     = "hotel";
    public function server_name()
    {
        return $this->server_name;
    }
    
    public function user()
    {
        return $this->user;
    }
    
    public function password()
    {
        return $this->password;
    }
    
    public function db_name()
    {
        return $this->db_name;
    }
}
