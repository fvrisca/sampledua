<?php

class crud extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
	/*call CodeIgniter's default Constructor*/
	parent::__construct();
	
	/*load database libray manually*/
	$this->load->database();
	
	/*load Model*/
	$this->load->model('Crud_model');
	}

	// public function index()
	// {
	// 	$this->load->helper('url');

	// 	$this->load->view('insert');
	// }

	public function savedata($data1,$data2,$data3)
	{
		/*load registration view form*/
		// $this->load->view('insert');
		
	
		/*Check submit button */
		// if($this->input->post('save'))
		// {
		    $data['first_name']=$data1;
			$data['last_name']=$data2;
			$data['email']=$data3;

			// var_dump($data);
			$user=$this->Crud_model->saverecords($data);
			echo json_encode($data); 
			// if($user>0){
			//         echo "Records Saved Successfully";
			// }
			// else{
			// 		echo "Insert error !";
			// }

			// if($this->Crud_model->saverecords($data) > 0){
			// 	// $this->response([
			// 	// 	'status' => true,
			// 	// 	'message' => 'Created'
			// 	// ], REST_Controller::HTTP_CREATED);
			// 	echo 'insert success !';
			// } else {
			// 	echo 'insert error !';
			// 	// $this->response([
			// 	// 	'status' => true,
			// 	// 	'message' => 'Failed Created'
			// 	// ], REST_Controller::HTTP_BAD_REQUEST);
			// }

		// }
		// var_dump($data);
	}


	
}
