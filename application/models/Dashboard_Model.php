<?php

class Dashboard_Model extends CI_Model {

    public function getallRFID () {
        $this->db->select('ID_CARD ,NAME ,ADDRESS ,CREATED_DT ,UPDATED_DT');
        $this->db->from('TB_R_RFID');
        $this->db->where('FLAG_ID', '1');
        $this->db->where('FLAG_DELETE', '1');
        $this->db->order_by('NAME','ASC');
        $query = $this->db->get()->result();
        return $query;
    }

    public function insertRFID ($data) {      
        $query = "INSERT INTO TB_R_RFID (ID_CARD ,NAME ,ADDRESS ,FLAG_ID, FLAG_DELETE) VALUES ( UPPER('".$data['ID_CARD']."') ,UPPER('".$data['NAME']."') ,UPPER('".$data['ADDRESS']."') ,1 ,1 )";
        $queryDB = $this->db->query($query);
        return $queryDB;
    }

    public function deleteRFID ($data) {
        $this->db->where('ID_CARD',$data);
        $this->db->delete('TB_R_RFID');
        $this->db->where('ID_CARD',$data);
        $this->db->delete('TB_R_ENTRY_RFID');
    }

    public function editRFID ($data) {
        $query = "SELECT ID_CARD ,NAME ,ADDRESS, FLAG_ID FROM TB_R_RFID WHERE ID_CARD='".$data."'";
        $queryDB = $this->db->query($query)->result();
        return $queryDB;
    }

    public function updateRFID ($data) {
        $query1 ="UPDATE TB_R_RFID SET ID_CARD='".$data['ID_CARD']."' , NAME=UPPER('".$data['NAME']."') , ADDRESS=UPPER('".$data['ADDRESS']."') , UPDATED_DT=NOW() WHERE ID_CARD='".$data['ID_CARD']."' ";
        $query2 ="UPDATE TB_R_ENTRY_RFID SET ID_CARD='".$data['ID_CARD']."' , NAME=UPPER('".$data['NAME']."') WHERE ID_CARD='".$data['ID_CARD']."' ";
        $queryDB = $this->db->query($query1);
        $queryDB = $this->db->query($query2);
        return $queryDB;
    }

    public function validateCardID ($data) {
        $query ="SELECT ID_CARD FROM TB_R_RFID WHERE ID_CARD='".$data['ID_CARD']."' AND FLAG_ID='0' ";
        $queryDB = $this->db->query($query)->row();
        return $queryDB;
    }

    public function getscanRFID () {
        $query1 = "DELETE FROM TB_R_ENTRY_RFID WHERE CREATED_DT < ( SELECT CREATED_DT FROM TB_R_ENTRY_RFID WHERE FLAG_ID = '0' ORDER BY CREATED_DT DESC LIMIT 1) AND FLAG_ID = '0' ";
        $query2 = "SELECT A.ID_CARD ,A.NAME ,B.ADDRESS FROM TB_R_ENTRY_RFID A LEFT JOIN TB_R_RFID B ON A.ID_CARD = B.ID_CARD WHERE A.FLAG_ID = '0' ORDER BY A.CREATED_DT DESC LIMIT 1 ";
        $queryDB = $this->db->query($query1);
        $queryDB = $this->db->query($query2)->result();
        return $queryDB;

    }

    public function updateScan ($data) {
        $query1 = "DELETE FROM TB_R_ENTRY_RFID WHERE ID_CARD='".$data['ID_CARD']."' ";
        // $query1 = "UPDATE TB_R_ENTRY_RFID SET NAME=UPPER('".$data['NAME']."') , FLAG_ID='1' WHERE ID_CARD='".$data['ID_CARD']."' ";
        $query2 = "UPDATE TB_R_RFID SET Address=UPPER('".$data['ADDRESS']."') WHERE ID_CARD='".$data['ID_CARD']."' ";
        $queryDB1 = $this->db->query($query1);
        $queryDB2 = $this->db->query($query2);

        // return $queryDB;
    }

    public function valscanData () {
        $query = "SELECT * FROM TB_R_ENTRY_RFID WHERE FLAG_ID='0' ";
        $queryDB = $this->db->query($query)->result();
        return $queryDB;
    }

    public function getallEntry () {
        $query = "SELECT A.ID_CARD ,A.NAME ,B.LAST_ENTRY, A.CREATED_DT FROM TB_R_ENTRY_RFID A LEFT JOIN TB_R_RFID B ON A.ID_CARD = B.ID_CARD WHERE A.FLAG_ID = '1' ORDER BY A.NAME DESC  ";
        $queryDB = $this->db->query($query)->result();
        return $queryDB;
    }

    public function searchIDCard ($data) {
        $query = "SELECT A.ID_CARD ,A.NAME ,B.LAST_ENTRY, A.CREATED_DT FROM TB_R_ENTRY_RFID A LEFT JOIN TB_R_RFID B ON A.ID_CARD = B.ID_CARD WHERE A.FLAG_ID = '1' AND A.ID_CARD='".$data['ID_CARD']."' ORDER BY A.NAME DESC  ";
        $queryDB = $this->db->query($query)->result();
        return $queryDB;
    }

    public function searchName ($data) {
        $query = "SELECT A.ID_CARD ,A.NAME ,B.LAST_ENTRY, A.CREATED_DT FROM TB_R_ENTRY_RFID A LEFT JOIN TB_R_RFID B ON A.ID_CARD = B.ID_CARD WHERE A.FLAG_ID = '1' AND A.NAME='".$data['NAME']."' ORDER BY A.NAME DESC  ";
        $queryDB = $this->db->query($query)->result();
        return $queryDB;
    }
}