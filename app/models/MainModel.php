<?php

namespace app\models;

use core\mvc\Model;

class MainModel extends Model
{
    public function getAllPosts()
    {
        $posts = $this->db->query("SELECT * FROM posts")->fetchAll();
        return $posts;
    }
}