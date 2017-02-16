<?php

class Model_Articles extends Model{

    public function getAllWorks(){
        $query = $this->db->query("SELECT * FROM articles");
        return $query->fetchAll();
    }

}