<?php

class Dev{
    
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData(){

        $this->db->query("SELECT * FROM `tblusers`");

        return $this->db->resultSet();

    }
}

?>