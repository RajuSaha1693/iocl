<?php

class Gallery extends CI_Model {

    /*
    return all Gallerys.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getAll() {
        return $this->db->get('gallery')->result();
    }
    /*
    function for create Gallery.
    return Gallery inserted id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function insert($data) {
        $this->db->insert('gallery', $data);
        return $this->db->insert_id();
    }
    /*
    return Gallery by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('gallery')->result();
    }
    /*
    function for update Gallery.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('gallery', $data);
        return true;
    }
    /*
    function for delete Gallery.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('gallery');
        return true;
    }
    /*
    function for change status of Gallery.
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