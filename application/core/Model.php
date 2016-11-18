<?php

//namespace application\core;
//use config\db;

include '/application/config/db.php';

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = db::getConnection();
    }

    public function get_data()
    {
    }
}

