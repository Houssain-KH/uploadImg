<?php


class UserManager{
    
    private $db;
   
     public function __construct(PDO $c) {
        $this->db = $c;
    }

    
}