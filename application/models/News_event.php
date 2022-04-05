<?php

class News_event extends CI_Model {

    /*
    return all News_events.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getAll() {
        return $this->db->get('news_event')->result();
    }
    /*
    function for create News_event.
    return News_event inserted id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function insert($data) {
        $this->db->insert('news_event', $data);
        return $this->db->insert_id();
    }
    /*
    return News_event by id.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function getDataById($id) {
        $this->db->where('id', $id);
        return $this->db->get('news_event')->result();
    }
    /*
    function for update News_event.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function update($id,$data) {
        $this->db->where('id', $id);
        $this->db->update('news_event', $data);
        return true;
    }
    /*
    function for delete News_event.
    return true.
    created by NICONTECH IT SOLUTIONS LLP
    created at 04-04-22.
    */
    public function delete($id) {
        $this->db->where('id', $id);
        $this->db->delete('news_event');
        return true;
    }
    /*
    function for change status of News_event.
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