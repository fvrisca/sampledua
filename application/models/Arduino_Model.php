<?php

class Arduino_Model extends CI_Model {


    public function selectVal ($allData) {
        $this->db->select('ID_CARD');
        $this->db->from('TB_R_RFID');
        $this->db->where('ID_CARD', $allData['ID_CARD']);
        // $this->db->where('FLAG_ID', '0');
        $this->db->where('FLAG_DELETE', '1');
        $queryDB = $this->db->get()->row();
        return $queryDB;

    }

    function insertData ($allData) {
        $query = "INSERT INTO TB_R_ENTRY_RFID (ID_CARD, FLAG_ID, FLAG_DELETE) VALUES (UPPER('".$allData['ID_CARD']."') , '0' , '1') ";
        $queryDB = $this->db->query($query);
        return $queryDB;
    }

    function updateData ($allData) {
        $query1 = "INSERT INTO TB_R_ENTRY_RFID (ID_CARD, NAME, FLAG_ID, FLAG_DELETE) SELECT ID_CARD, NAME, '1', '1' FROM TB_R_RFID WHERE ID_CARD ='".$allData['ID_CARD']."' ";
        $query2 = "UPDATE TB_R_RFID SET LAST_ENTRY = NOW() WHERE ID_CARD='".$allData['ID_CARD']."' ";
        $queryDB = $this->db->query($query1);
        $queryDB = $this->db->query($query2);
        return $queryDB;
    }

    function valinsertEntry ($allData) {
        $this->db->select('ID_CARD');
        $this->db->from('TB_R_ENTRY_RFID');
        $this->db->where('ID_CARD', $allData['ID_CARD']);
        $this->db->where('DATE(CREATED_DT)', 'CURDATE()' );
        $queryDB = $this->db->get()->result();
        return $queryDB;

    }
}