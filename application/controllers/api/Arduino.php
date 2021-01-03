<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Arduino extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Arduino_Model');
    }

    public function arduinoReceive($data1) {

        $allData['ID_CARD']=$data1;
        
        // var_dump($varData);
        
        if (empty($data1) or $allData > 0) {

            $valSelect = $this->Arduino_Model->selectVal($allData);
            
            echo json_encode($valSelect); 
            if (empty($valSelect) or $valSelect === NULL) {
                $insert = $this->Arduino_Model->insertData($allData);
                echo json_encode($insert);
                echo 'Click scan data for insert master';

            } else {
                $valEntry = $this->Arduino_Model->valinsertEntry($allData);
                if (empty($valEntry) or $allData === NULL) {

                    // echo json_encode($valEntry); die;
                    $update = $this->Arduino_Model->updateData($allData);
                    echo 'Welcom you have success login ID Card';

                } else {
                    echo 'data sudah ada';
                }
            }

        }else {
            echo 'Data Not Insert';
        }

    }


}