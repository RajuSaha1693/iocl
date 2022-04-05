<?php

class Todays_word extends CI_Model {

    /*
    return all Todays_words.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getAll() {
        return $this->db->get('todays_word')->result();
    }
    /*
    function for create Todays_word.
    return Todays_word inserted id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function insert($data) {
        $this->db->insert('todays_word', $data);
        return $this->db->insert_id();
    }
    /*
    return Todays_word by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('todays_word')->result();
    }
    /*
    function for update Todays_word.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('todays_word', $data);
        return true;
    }
    /*
    function for delete Todays_word.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('todays_word');
        return true;
    }
    /*
    function for change status of Todays_word.
    return activated of deactivated.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function changeStatus($id) {
        $table=$this->getDataById($id);
             if($table[0]->status==0)
             {
                $this->update($id,array('status' => '1'));
                return "Activated";
             }else{
                $this->update($id,array('status' => '0'));
                return "Deactivated";
             }
    }

}