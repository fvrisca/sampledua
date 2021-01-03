<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
    
        parent::__construct();
        $this->load->database();
        $this->load->model('Dashboard_Model');
        $this->load->helper('url');  
        $this->load->library('session');           
    }


    public function index(){

        $get['getMaster'] = $this->Dashboard_Model->getallRFID();
        $get['getentryRFID'] = $this->Dashboard_Model->getallEntry();
        // echo json_encode($get['getentryRFID']); die;
        $this->load->view('header');
        $this->load->view('dataentrySearch', $get);
        $this->load->view('datamasterAdd', $get);
        // $this->load->view('dashboard',$get);
    }

    public function postMaster() {

        $id_card = $this->input->post('ID_CARD');
        $name       = $this->input->post('NAME');
        $address    = $this->input->post('ADDRESS');

        $data = array (
            'ID_CARD' => $id_card,
            'NAME' => $name,
            'ADDRESS' => $address
        );
        if (empty($id_card && $name && $address)){
            echo 'tidak ada data';
            redirect('Dashboard/index');
        } else {
            $val['valCardID'] = $this->Dashboard_Model->validateCardID($data);  
            echo print_r($val['valCardID']);    
                        
            if (empty($val['valCardID']) or $val['valCardID'] === NULL ) {
                $a = $this->Dashboard_Model->insertRFID($data);
                echo 'ID CARD Insert.!';
                $_SESSION["insertSuccess"] = "start";
                redirect('Dashboard/index');
            } else {
                echo 'ID CARD sudah ada.!';
                $_SESSION["ValCardID"] = "start";
                redirect('Dashboard/index');
            }

        }

    }

    public function deleteMaster($data){
        $a = $this->Dashboard_Model->deleteRFID($data);
        echo json_encode($data);
        // die;
        $_SESSION["deleteSuccess"] = "start";
        redirect('Dashboard/index');
    }

    public function editIndex($data){
        $get['editIndex'] = $this->Dashboard_Model->editRFID($data);
        $get['getMaster'] = $this->Dashboard_Model->getallRFID();
        $get['getentryRFID'] = $this->Dashboard_Model->getallEntry();
        // echo json_encode($get['editIndex']);
        // die;

        $this->load->view('header');
        $this->load->view('dataentrySearch', $get);
        $this->load->view('datamasterEdit', $get);
        // $this->load->view('dashboard',$get);
    }

    public function updateMaster(){

        $id_card = $this->input->post('ID_CARD');
        $name       = $this->input->post('NAME');
        $address    = $this->input->post('ADDRESS');

        $data = array (
            'ID_CARD' => $id_card,
            'NAME' => $name,
            'ADDRESS' => $address
        );
        $a = $this->Dashboard_Model->updateRFID($data);
        // echo json_encode($a); die;
        $_SESSION["updateSuccess"] = "start";
        // echo json_encode($data); die;

        redirect('Dashboard/index');

    }

    public function scanRFID() {
     
        $get['getMaster'] = $this->Dashboard_Model->getallRFID();
        $get['datascanRFID'] = $this->Dashboard_Model->getscanRFID();
        $get['getentryRFID'] = $this->Dashboard_Model->getallEntry();
        // echo json_encode($getScanRFID); die;
        
        $valthereScan['valScan'] = $this->Dashboard_Model->valscanData();

        // echo json_encode($valthereScan); die;
        if (empty($valthereScan['valScan']) or $valthereScan['valScan'] < 0 or $valthereScan === NULL) {
            echo 'Data tidak ditemukan.!';
            $_SESSION['scanFailed'] = "start";
            
            redirect('Dashboard/index');
            
        } else {
            $_SESSION['scanSuccess'] = 'start';
            // echo 'Data ditemukan';
            $this->load->view('header');
            $this->load->view('dataentrySearch', $get);
            $this->load->view('datamasterScan', $get);


        }


    }

    public function updatescanRFID() {
        $id_card = $this->input->post('ID_CARD');
        $name       = $this->input->post('NAME');
        $address    = $this->input->post('ADDRESS');

        $data = array (
            'ID_CARD' => $id_card,
            'NAME' => $name,
            'ADDRESS' => $address
            
        );

        if (empty($id_card && $name && $address) or $id_card === NULL or $name === 'DEFAULT' or $address === 'DEFAULT') {
            echo 'Data tidak boleh DEFAULT atau NULL.!';
            $_SESSION['ValScan'] = 'start';
            redirect ('Dashboard/scanRFID');
        } else {
            $a = $this->Dashboard_Model->insertRFID($data);
            $a = $this->Dashboard_Model->updateScan($data);
            $_SESSION["insertSuccess"] = "start";
            echo json_encode($data);
            redirect('Dashboard/index');
        }

    }

    public function searchData() {

        $get['getMaster'] = $this->Dashboard_Model->getallRFID();
        $get['datascanRFID'] = $this->Dashboard_Model->getscanRFID();
        // $get['getentryRFID'] = $this->Dashboard_Model->getallEntry();

        $id_card    = $this->input->post('ID_CARD');
        $name       = $this->input->post('NAME');

        $data = array (
            'ID_CARD' => $id_card,
            'NAME'    => $name
        );
       

        // echo json_encode($data['ID_CARD']);
        if ($data['ID_CARD'] === NULL or empty($data['ID_CARD']) ) {
            // echo 'id tidak ditemukan';
            $get['searchbyIDCard'] = $this->Dashboard_Model->searchName($data);
            // echo json_encode($get['searchbyIDCard']); 
            if ($get['searchbyIDCard'] === NULL or empty($get['searchbyIDCard'])) {
                echo 'data tersbeut belum ada di database.!';
                $_SESSION['noData'] = 'start';
                redirect ('Dashboard/index');
            } else {
                // echo json_encode($get);
                $this->load->view('header');
                $this->load->view('dataentrySearchAct', $get);
                $this->load->view('datamasterAdd', $get);
            }
        } else  {
            // echo 'data ditemukan';
            $get['searchbyIDCard'] = $this->Dashboard_Model->searchIDCard($data);
            // echo json_encode($get['searchbyIDCard']);
            if ($get['searchbyIDCard'] === NULL or empty($get['searchbyIDCard'])) {
                echo 'data tersbeut belum ada di database.!';
                $_SESSION['noData'] = 'start';
                redirect ('Dashboard/index');
            } else {
                // echo json_encode($get);
                $this->load->view('header');
                $this->load->view('dataentrySearchAct', $get);
                $this->load->view('datamasterAdd', $get);
            }

        } 

    }
}