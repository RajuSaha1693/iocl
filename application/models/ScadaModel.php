<?php

class ScadaModel extends CI_Model {
    public function getAll() {
        return $this->db->get('birthdays')->result();
    }

    public function insert($table_name,$data) {
        $this->db->insert($table_name, $data);
        return $this->db->insert_id();
    }


    // sql query

    public function sqlQuery($sql,$where = NULL) {
        return $query = $this->db->query($sql);
    }

    public function getData($tablename,$fields,$where = NULL,$orderBy =NULL,$groupBy =NULL) {
        $this->db->select($fields);
        $this->db->from($tablename);
        $this->db->where($where);
        if($groupBy){
            $this->db->group_by($groupBy);        
        }
        if($orderBy){
            $this->db->order_by($orderBy);
        }
        $query = $this->db->get();
        return $query->result_array();
    }

}