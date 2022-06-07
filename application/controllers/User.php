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
		$data['cabang']=$this->db->get('admin_cabang')->result_array();

		if($this->form_validation->run($this)==false){
			
			$this->load->view('layout/user/header',$data);
			$this->load->view('layout/user/navbar');
			$this->load->view('form_sedekah',$data);
			$this->load->view('layout/user/footer');
		}
		else{
			$kategori=$this->input->post('wakaf_type');
				
				$dataWakaf=[
					"id_user"=>$this->input->post('id_user'),
					"username"=>$this->input->post('username'),
					"name"=>$this->input->post('name'),
					"email"=>$this->input->post('email'),
					"phone"=>$this->input->post('phone'),
					"category"=>'wakaf',
					'date'=>date('Y-m-d H:i:s'),
					'status'=>"draft",
					'wakaf_type'=>$this->input->post('wakaf_type'),
					'cabang'=>$this->input->post('cabang'),
		
					
				];
				$this->session->set_userdata($dataWakaf);
			
			if($kategori=='kendaraan'){
				$this->wakaf_kendaraan();
			}
			else if($kategori=='properti'){
				$this->wakaf_properti();
			}
			else if($kategori=='elektronik'){
				$this->wakaf_elektronik();
			}
			
		
		}

	
		
	}
	
	// kode transaksi


	public function  wakaf_properti(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['transaction'] = $this->db->get_where('transaction', ['email' => $this->session->userdata('email')])->result_array();
		
		$dataWakaf=[
			"id_user"=>$this->session->userdata('id_user'),
			"username"=>$this->session->userdata('username'),
			"name"=>$this->session->userdata('name'),
			"email"=>$this->session->userdata('email'),
			"phone"=>$this->session->userdata('phone'),
			"category"=>'wakaf',
			'date'=>date('Y-m-d H:i:s'),
			'status'=>"draft",
			'wakaf_type'=>$this->session->userdata('wakaf_type'),
			'cabang'=>$this->session->userdata('cabang')
			
		];
		$this->form_validation->set_rules('alamat','Alamat','required');
		if($this->form_validation->run($this)==false){
			
			$this->load->view('layout/user/header',$data);
			$this->load->view('layout/user/navbar');
			$this->load->view('form_wakaf_properti',$data);
			$this->load->view('layout/user/footer');
		}
		else{
			
			$this->db->insert('transaction',$dataWakaf);
			
			$dataId=$this->db->insert_id('transaction');
			$dataCabang = $this->db->get_where('admin_cabang',['cabang'=>$dataWakaf['cabang']])->row_array();
			$data_user=$this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
			
			$kode_transaksi = $dataCabang['kode'].$dataId.$data_user['id'];
			// var_dump($kode_transaksi);
			
			$kode=[
				"kode_transaksi"=>$dataCabang['kode'].$dataId.$data_user['id'],
					
			];
			// var_dump($kode);
			$this->db->where('id_transaksi',$dataId);
			$this->db->update('transaction',$kode);
			$dataProperti=[
				
				"jenis"=>$this->input->post('jenis_properti'),
				"luas"=>$this->input->post('luas'),
				"alamat"=>$this->input->post('alamat'),
				"jenis_sertifikat"=>$this->input->post('jenis_sertifikat'),
				"kode_transaksi"=>$kode_transaksi,
			];	
			
			
			$this->db->insert('wakaf_properti',$dataProperti);
			redirect('index.php/user');
		}

	}
	public function wakaf_elektronik(){
		$data['user']=$this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
		$data['transaction'] = $this->db->get_where('transaction', ['email' => $this->session->userdata('email')])->result_array();
		$this->form_validation->set_rules('nama',"Nama",'required');
		
		$dataWakaf=[
			"id_user"=>$this->session->userdata('id_user'),
			"username"=>$this->session->userdata('username'),
			"name"=>$this->session->userdata('name'),
			"email"=>$this->session->userdata('email'),
			"phone"=>$this->session->userdata('phone'),
			"category"=>'wakaf',
			'date'=>date('Y-m-d H:i:s'),
			'status'=>"draft",
			'wakaf_type'=>$this->session->userdata('wakaf_type'),
			'cabang'=>$this->session->userdata('cabang')

			
		];
		
		if($this->form_validation->run($this)==false){
			$this->load->view('layout/user/header',$data);
			$this->load->view('layout/user/navbar');
			$this->load->view('form_wakaf_elektronik',$data);
			$this->load->view('layout/user/footer');
		}
		else{

			
			$data_elektronik=[
				'jenis'=>$this->input->post('jenis_elektronik'),
				'nama'=>$this->input->post('nama')
			];
			$this->db->insert('transaction',$dataWakaf);
			$this->db->insert('wakaf_elektronik',$data_elektronik);
			redirect('index.php/user');
		
		}
	}
	public function wakaf_kendaraan(){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['transaction'] = $this->db->get_where('transaction', ['email' => $this->session->userdata('email')])->result_array();
		$dataWakaf=[
			"id_user"=>$this->session->userdata('id_user'),
			"username"=>$this->session->userdata('username'),
			"name"=>$this->session->userdata('name'),
			"email"=>$this->session->userdata('email'),
			"phone"=>$this->session->userdata('phone'),
			"category"=>'wakaf',
			'date'=>date('Y-m-d H:i:s'),
			'status'=>"draft",
			
			'wakaf_type'=>$this->session->userdata('wakaf_type'),
			'cabang'=>$this->session->userdata('cabang')
			
			
		];

		
		
	
		

		$this->form_validation->set_rules('nama_kendaraan','Nama_kendaraan','required|trim');	
		if($this->form_validation->run($this)==false){
			$this->load->view('layout/user/header',$data);
			$this->load->view('layout/user/navbar');
			$this->load->view('form_wakaf_kendaraan',$data);
			$this->load->view('layout/user/footer');
		}
		else{
			
			$this->db->insert('transaction',$dataWakaf);
			
			$dataId=$this->db->insert_id('transaction');
			$dataCabang = $this->db->get_where('admin_cabang',['cabang'=>$dataWakaf['cabang']])->row_array();
			$data_user=$this->db->get_where('user',['email'=>$this->session->userdata('email')])->row_array();
			
			$kode_transaksi = $dataCabang['kode'].$dataId.$data_user['id'];
			// var_dump($kode_transaksi);
			
			$kode=[
				"kode_transaksi"=>$dataCabang['kode'].$dataId.$data_user['id'],
					
			];
			
			$this->db->where('id_transaksi',$dataId);
			$this->db->update('transaction',$kode);
			$dataKendaraan=[
				"jenis"=>$this->input->post('jenis_kendaraan'),
				"nama_kendaraan"=>$this->input->post('nama_kendaraan'),
				"tahun"=>$this->input->post('tahun'),
				"plat_nomor"=>$this->input->post('plat_nomor'),
				"kode_transaksi"=>$kode_transaksi,
			];	
			$this->db->where('id_transaksi',$dataId);
			$this->db->update('transaction',$kode);

			
			$this->db->insert('wakaf_kendaraan',$dataKendaraan);
			redirect('index.php/user/sedekah');
		
			
			
			
		}
			

			
			
			
				

				
				
				
			
		}
	private function upload_data_kendaraan(){
	
		
		
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
	public function printOut($id){
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['transaction'] = $this->db->get_where('transaction', ['email' => $this->session->userdata('email')])->result_array();
		$data['data_transaksi']=$this->db->get_where('transaction',['kode_transaksi'=>$id])->row_array();
		$dataWakaf=$data['data_transaksi'];
		// var_dump($dataWakaf);
		if($dataWakaf['wakaf_type']=='properti'){
			$data['data_wakaf']=$this->db->get_where('wakaf_properti',['kode_transaksi'=>$id])->row_array();

			
		}
		else if($dataWakaf['wakaf_type']=='elektronik'){
			$data['data_wakaf']=$this->db->get_where('wakaf_elektronik',['id'=>$id])->row_array();

		}
		else if($dataWakaf['wakaf_type']=='kendaraan'){
			$data['data_wakaf']=$this->db->get_where('wakaf_kendaraan',['kode_transaksi'=>$id])->row_array();
		}
		$this->load->view('layout/user/header',$data);
		$this->load->view('layout/user/navbar',$data);
		$this->load->view('userPrintOut',$data);
		$this->load->view('layout/user/footer');
	}
	
}
 