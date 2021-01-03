<?php

class Mahasiswa_Model extends CI_Model{
    public function getMahasiswa() {
        return $this->db->get('mahasiswa')->result_array();
    }

    public function createMahasiswa($data){
        $this->db->insert('mahasiswa', $data);
        return $this->db->affected_rows();
    }

    function saverecords($data)
	{
          $this->db->insert('crud',$data);
          return $this->db->insert_id();
    }
    
}