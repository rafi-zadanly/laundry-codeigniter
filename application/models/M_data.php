<?php 

class M_data extends CI_Model{
	function get_all_data($table){
		return $this->db->get($table);
    }

    function get_data($where, $table){		
        return $this->db->get_where($table, $where);
    }
    
    function insert_data($data, $table){
        if ($this->db->insert($table, $data)) {
            return true;
        }else{
            return false;
        }
    }

    function update_data($where, $data, $table){
		$this->db->where($where);
		if($this->db->update($table, $data)){
            return true;
        }else{
            return false;
        }
	}

    function delete_data($where, $table){
        $this->db->where($where);
        if ($this->db->delete($table)) {
            return true;
        }else{
            return false;
        }
    }
}