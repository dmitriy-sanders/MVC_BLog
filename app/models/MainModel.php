<?php

namespace app\models;

use core\mvc\Model;

class MainModel extends Model
{
    public function getAllPosts()
    {
        $hits = $this->db->query("SELECT * FROM products WHERE hit=1 ORDER BY id DESC LIMIT 3")->fetchAll();
        $new = $this->db->query("SELECT * FROM products WHERE new=1 ORDER BY id DESC LIMIT 3")->fetchAll();
        return [$hits, $new];
    }
}