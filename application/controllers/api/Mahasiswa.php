<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Mahasiswa extends REST_Controller {

    public function __construct() {
    
        parent::__construct();
        $this->load->database();
        $this->load->model('Mahasiswa_Model','Mhs_M');
    
    }
    
    public function index_get() {
        
        $mahasiswa = $this->Mhs_M->getMahasiswa();
        // var_dump($mahasiswa);

    }

    public function index_post ($a){
        
        // $data = [
        //     'nrp' => $this->post($a),
        //     'nama' => $this->post($b),
        //     'email' => $this->post($c),
        //     'jurusan' => $this->post($d)
        // ];
        $data = [
            $a => $this->post('nrp')
        
        ];
        if($this->Mhs_M->createMahasiswa($data) > 0){
            $this->response([
                'status' => true,
                'message' => 'Created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => true,
                'message' => 'Failed Created'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    
}