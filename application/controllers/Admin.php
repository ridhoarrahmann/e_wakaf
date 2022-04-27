<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	
	
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
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();
        $this->load->view('layout/admin_dashboard/header',$data);
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
        $this->load->view('admin_dashboard');	
        $this->load->view('layout/admin_dashboard/footer');

    }
    public function transaction_draft(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();

		$status="draft";
        $data['transaction_draft']=$this->db->get_where('transaction',['status'=>$status])->result_array();

		$this->load->view('layout/admin_dashboard/header',$data);
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
        $this->load->view('admin_transaction_draft',$data);
        $this->load->view('layout/admin_dashboard/footer');
    }
	
	public function transaction_confirmation(){
		
		// $id_transaksi_user= $this->input->post('id_transaction');
		// $id = $this->input->post('id_transaction',true);
		$id = $this->input->post('id_transaction');
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();

		$data['transaksi_draft'] = $this->db->get_where('transaction', ['id_transaksi' => $id])->result_array();

		$this->load->view('layout/admin_dashboard/header',$data);
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
        $this->load->view('transaction_confirmation', $data);
		$this->load->view('layout/admin_dashboard/footer');


		
	}
	public function status_update(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();
		$id = $this->input->post('id_transaction');
		$update_data=[
			'status'=>'succes',
		];
		$this->db->where("id_transaksi",$id);
		$this->db->update('transaction',$update_data);
		$this->load->view('layout/admin_dashboard/header',$data);
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
		$this->load->view('transaction_draft', $data);
		$this->load->view('layout/admin_dashboard/footer');
	}
	public function data_sedekah(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();
		$data['dataWakaf']=$this->db->get_where('transaction',['category'=>"wakaf"])->result_array();
		$this->load->view('layout/admin_dashboard/header',$data);
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
        $this->load->view('admin_data_sedekah',$data);
		$this->load->view('layout/admin_dashboard/footer');
	}
	public function data_infaq(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();

		$data['dataInfaq']=$this->db->get_where('transaction',['category'=>'infak'])->result_array();

		$this->load->view('layout/admin_dashboard/header',$data);
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
        $this->load->view('admin_data_infaq', $data);
		$this->load->view('layout/admin_dashboard/footer');
	}
	public function data_user(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();
		$data['dataUser']=$this->db->get('user')->result_array();
		$this->load->view('layout/admin_dashboard/header',$data);
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
        $this->load->view('admin_data_user', $data);
		$this->load->view('layout/admin_dashboard/footer');
	}
	public function add_admin_cabang(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		$this->form_validation->set_rules('cabang_name','Cabang_name','required|trim');
		if($this->form_validation->run($this)==false){
			$this->load->view('layout/admin_dashboard/header');
			$this->load->view('layout/admin_dashboard/sidebar');
			$this->load->view('layout/admin_dashboard/navbar',$data);
			$this->load->view('admin_add_admin_cabang');
			$this->load->view('layout/admin_dashboard/footer');

		}
		else{
			$this->_add_admin_cabang();
		}

	}
	private function _add_admin_cabang(){
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
		$cabang_name=$this->input->post('cabang_name');

		$dataAdmin=[
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
			'cabang'=>$cabang_name,
		];
		$this->db->insert('admin_cabang',$dataAdmin);
		redirect('index.php/admin/add_admin_cabang');
	}
	public function add_admin_pusat(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();

		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run($this)==false){
			$this->load->view('layout/admin_dashboard/header');
			$this->load->view('layout/admin_dashboard/sidebar');
			$this->load->view('layout/admin_dashboard/navbar',$data);
			$this->load->view('admin_add_admin_pusat');
			$this->load->view('layout/admin_dashboard/footer');

		}
		else{
			$this->_add_admin_pusat();
		}

	}
	private function _add_admin_pusat(){
		
		$username=$this->input->post('username');
		$password=$this->input->post('password');
	
		$dataAdmin=[
			'username'=>$username,
			'password'=>password_hash($password,PASSWORD_DEFAULT),
	
		];
		$this->db->insert('admin_pusat',$dataAdmin);
		redirect('index.php/admin/add_admin_pusat');
	}


	public function data_cabang(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();

		$data['dataCabang']=$this->db->get('admin_cabang')->result_array();
		$this->load->view('layout/admin_dashboard/header');
			$this->load->view('layout/admin_dashboard/sidebar');
			$this->load->view('layout/admin_dashboard/navbar',$data);
			$this->load->view('admin_data_admin_cabang',$data);
			$this->load->view('layout/admin_dashboard/footer');
	}
	public function transaction_draft_cabang(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();
		$status="draft";
        $data['transaction_draft']=$this->db->get_where('transaction_cabang',['status'=>$status])->result_array();
	
		
		$this->load->view('layout/admin_dashboard/header');
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
        $this->load->view('admin_transaction_cabang_draft',$data);
        $this->load->view('layout/admin_dashboard/footer');
    }
	public function transaction_confirmation_cabang(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();
		$id = $this->input->post('id_transaction');
		

		$data['transaksi_draft'] = $this->db->get_where('transaction_cabang', ['id_transaksi' => $id])->result_array();

		$this->load->view('layout/admin_dashboard/header');
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
        $this->load->view('admin_transaction_confirmation_cabang', $data);
		$this->load->view('layout/admin_dashboard/footer');
	}	
	public function status_update_cabang(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();
		$id = $this->input->post('id_transaction');
		$update_data=[
			'status'=>'succes', 
		];
		$data['transaction_draft'] = $this->db->get_where('transaction_cabang', ['status' => "draft"])->result_array();

		$this->db->where("id_transaksi",$id);
		$this->db->update('transaction_cabang',$update_data);
		$this->load->view('layout/admin_dashboard/header');
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
			$this->load->view('admin_transaction_cabang_draft', $data);
		$this->load->view('layout/admin_dashboard/footer');
	}
	
	public function detail_cabang(){
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();
		$data['cabang']=$this->db->get_where('admin_cabang',['username'=>$this->input->post('username')])->row_array();
		
		
		$data['transaction_cabang']=$this->db->get_where('transaction_cabang',['username'=>$this->input->post('username')])->result_array();
		$this->load->view('layout/admin_dashboard/header');
        $this->load->view('layout/admin_dashboard/sidebar');
        $this->load->view('layout/admin_dashboard/navbar',$data);
		$this->load->view('admin_cabang_detail', $data);
		$this->load->view('layout/admin_dashboard/footer');
		
		}

	public function pdf(){
		// $this->load->library("dompdf_gen");
		// $data['dataSedekah']=$this->db->get_where('transaction',['category'=>"sedekah"])->result_array();
		// $this->load->view('admin_data_sedekah', $data);

		// $paper_size = 'a4';
		// $orientation = 'landscape';
		// $html = $this->output->get_output();
		// $this->dompdf->set_paper($paper_size, $orientation);
		// $this->dompdf->load_html($html);
		// $this->dompdf->render();
		// $this->dompdf->stream('laporan.pdf', array('Attachment'=>0));
		
		$data['user'] = $this->db->get_where('admin_pusat',['username'=>$this->session->userdata('username')])->row_array();
		
			
		$data['dataWakaf']=$this->db->get_where('transaction',['category'=>"wakaf"])->result_array();
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('Pdfgenerator');
				
		// title dari pdf
		$this->data['title_pdf'] = 'Laporan Penjualan Toko Kita';
				
		// filename dari pdf ketika didownload
		$file_pdf = 'laporan';
		// setting paper
		$paper = 'A4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";
				
		$html = $this->load->view('admin_data_sedekah',$data, true);	    
				
		// run dompdf
		$this->pdfgenerator->generator($html, $file_pdf,$paper,$orientation);
			
		

	}


	
		
	

	
}
