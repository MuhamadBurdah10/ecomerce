<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

class UserMod extends CI_Model {


    function get_user($id){
        $q = $this->db->query("
          SELECT * FROM user WHERE id_user = $id;
        ");

        return $q->result_array();
    }

    function fetchdata($data){
      $this->db->select("*");
      $this->db->from("user");
      $this->db->where($data);
      $query = $this->db->get();
      return $query->row();
    }

    function insert($tablename, $data){
      try {
        $this->db->insert($tablename,$data);
        return true;
      } catch (Exception $e) {
        return $e."\n".$this->db->_error_message();;
      }
    }

}