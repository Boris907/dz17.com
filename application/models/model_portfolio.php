<?php

/**
 * Created by PhpStorm.
 * User: ITSCHOOL4
 * Date: 15.01.2017
 * Time: 13:06
 */
class Model_Portfolio extends Model
{
    public function getAllWorks(){
       $query = $this->db->query("SELECT * FROM portfolio");
       return $query->fetchAll();
    }

    public function getWorkById($id){
        $query = $this->db->query("SELECT * FROM portfolio WHERE id=".$id);
        return $query->fetchObject();
    }
}