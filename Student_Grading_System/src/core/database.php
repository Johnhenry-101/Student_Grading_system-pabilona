<?php

namespace pabilona\Gs\Core;

class Database {
    protected $connection;
    public function __construct(){
       $host = 'localhost';
       $db = 'oop';
       $user = 'root';
       $pass = '';

       $this->conn = new \mysqli($host, $user, $pass, $db);
       if ($this->conn->connect_error) {
            die("connection failed: ") . $this ($this->conn->connect_error);
       }
    
    }   
}