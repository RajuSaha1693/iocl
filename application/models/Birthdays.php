<?php

class Birthdays extends CI_Model {

    /*
    return all Birthdayss.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getAll() {
        return $this->db->get('birthdays')->result();
    }
    /*
    function for create Birthdays.
    return Birthdays inserted id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function insert($data) {
        $this->db->insert('birthdays', $data);
        return $this->db->insert_id();
    }
    /*
    return Birthdays by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('birthdays')->result();
    }
    /*
    function for update Birthdays.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('birthdays', $data);
        return true;
    }
    /*
    function for delete Birthdays.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('birthdays');
        return true;
    }
    /*
    function for change status of Birthdays.
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