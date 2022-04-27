<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
	}
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{	
	
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		



		$this->load->view('layout/user/header', $data);
        $this->load->view('layout/user/navbar');
        $this->load->view('user', $data);
        $this->load->view('layout/user/footer');


    }
	
	public function sedekah(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['transaction'] = $this->db->get_where('transaction', ['email' => $this->session->userdata('email')])->result_array();
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('amount','Amount','required|trim');

		if($this->form_validation->run($this)==false){
			
			$this->load->view('layout/user/header',$data);
			$this->load->view('layout/user/navbar');
			$this->load->view('form_sedekah',$data);
			$this->load->view('layout/user/footer');
		}
		else{
			$this->_sedekah();
		}

	
		
	}	
	private function _sedekah(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		date_default_timezone_set('Asia/Jakarta');

		$dataWakaf=[
			"id_user"=>$this->input->post('id_user'),
			"username"=>$this->input->post('username'),
			"name"=>$this->input->post('name'),
			"email"=>$this->input->post('email'),
			"phone"=>$this->input->post('phone'),
			"category"=>'wakaf',
			"nominal"=>$this->input->post('amount'),
			'date'=>date('Y-m-d H:i:s'),
			'status'=>"draft",
			'description'=>$this->input->post('desc'),
			'wakaf_type'=>$this->input->post('wakaf_type'),

			
		];
		// $data_sedekah=[
		// 	""
		// ]
			$this->db->insert('transaction', $dataWakaf);
			redirect('index.php/user/sedekah');
		// $this->load->view('layout/user/header',$data);
		// $this->load->view('layout/user/navbar');
		// $this->load->view('form_sedekah',$data);
		// $this->load->view('layout/user/footer');

	}


	


	public function infaq(){
		$data ['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['transaction'] = $this->db->get_where('transaction', ['email' => $this->session->userdata('email')])->result_array();
		
		$this->form_validation->set_rules('amount','Amount','required|trim');
		
		if($this->form_validation->run($this)==false){
			$this->load->view('layout/user/header',$data);
			$this->load->view('layout/user/navbar');
			$this->load->view('form_infak',$data);
			$this->load->view('layout/user/footer');


		}
		else{
			$this->_infaq();
		}
	}
	private function _infaq(){
		$data ['user']=$this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		date_default_timezone_set('Asia/Jakarta');
		$datainfaq=[
			"id_user"=>$this->input->post('id_user'),
			"username"=>$this->input->post('username'),
			"name"=>$this->input->post('name'),
			"email"=>$this->input->post('email'),
			"phone"=>$this->input->post('phone'),
			"category"=>$this->input->post('category'),
			"nominal"=>$this->input->post('amount'),
			'date'=>date('Y-m-d H:i:s'),
			'status'=>"draft",
		];
		$this->db->insert('transaction',$datainfaq);
		
		$this->load->view('layout/user/header',$data);
		$this->load->view('layout/user/navbar');
		$this->load->view('transaction_process');
		$this->load->view('layout/user/footer'); 
	}
	


		
	public function history(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['transaction'] = $this->db->get_where('transaction', ['email' => $this->session->userdata('email')])->result_array();
		// $data['transaction'] = $this->db->get_where('transaction_draft', ['email'=>$this->session->userdata('email')])->row_array();
		// $this->load-s>model('Transaction_model','transaction');
		// $data['transaction']=$this->transaction->getTransaction();
		
		// $data['transaction']=$this->load->model('Transaction_model');

		$this->load->view('layout/user/header',$data);
		$this->load->view('layout/user/navbar',$data);
		$this->load->view('transaction_history',$data);
		$this->load->view('layout/user/footer');
	}
	// private function _sedekah(){
		
	// }

	
}
 