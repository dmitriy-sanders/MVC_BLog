<?php

namespace core\mvc;

use core\DataBase;

class Model
{
    protected $db;

    public function __construct()
    {
        $this->db = DataBase::getConnection();
    }
}