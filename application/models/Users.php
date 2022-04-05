<?php

class Users extends CI_Model {

    /*
    return all Userss.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getAll() {
        return $this->db->get('users')->result();
    }
    /*
    function for create Users.
    return Users inserted id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function insert($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }
    /*
    return Users by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('users')->result();
    }
    /*
    function for update Users.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('users', $data);
        return true;
    }
    /*
    function for delete Users.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('users');
        return true;
    }
    /*
    function for change status of Users.
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