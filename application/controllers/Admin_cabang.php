<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_cabang  extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
        $data['user'] = $this->db->get_where('admin_cabang', ['username' => $this->session->userdata('username')])->row_array();
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
	{   $data['user'] = $this->db->get_where('admin_cabang', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('layout/admin_cabang/header');
        $this->load->view('layout/admin_cabang/sidebar');
        $this->load->view('layout/admin_cabang/navbar',$data);
        $this->load->view('admin_cabang',$data);
        $this->load->view('layout/admin_cabang/footer');
	}
	
    public function add_sedekah(){
        $data['user'] = $this->db->get_where('admin_cabang', ['username' => $this->session->userdata('username')])->row_array();
        
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('phone','Phone','required|trim'); 
        $this->form_validation->set_rules('category','Category','required|trim');
        $this->form_validation->set_rules('amount','Amount','required|trim');       
        
        if($this->form_validation->run($this)==false){
            $this->load->view('layout/admin_cabang/header',$data);
            $this->load->view('layout/admin_cabang/sidebar');
            $this->load->view('layout/admin_cabang/navbar');
            $this->load->view('cabang_add_sedekah',$data);
            $this->load->view('layout/admin_cabang/footer');
                
        }
        else{
           $this->_add_sedekah();
        }



    }

    private function _add_sedekah(){
        $dataSedekah=[
            'username'=>$this->input->post('username'),
            'cabang_name'=>$this->input->post('namacabang'),
            'name'=>$this->input->post('name'),
            
            'phone'=>$this->input->post('phone'),
            'category'=>$this->input->post('category'),
            'nominal'=>$this->input->post('amount'),
            'date'=>date('Y-m-d H:i:s'),
            'status'=>'draft',
            'lembaga_name'=>$this->input->post('lembaga'),
        ];
        $this->db->insert('transaction_cabang',$dataSedekah);
        redirect('index.php/admin_cabang/add_sedekah');
    }
    public function add_infaq(){
        $data['user'] = $this->db->get_where('admin_cabang',['username'=>$this->session->userdata('username')])->row_array();
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('name','Name','required|trim');
        $this->form_validation->set_rules('phone','Phone','required|trim'); 
        $this->form_validation->set_rules('category','Category','required|trim');
        $this->form_validation->set_rules('amount','Amount','required|trim');       
        
       if($this->form_validation->run($this)==false){
            $this->load->view('layout/admin_cabang/header',$data);
            $this->load->view('layout/admin_cabang/sidebar');
            $this->load->view('layout/admin_cabang/navbar');
            $this->load->view('cabang_add_infaq',$data);
            $this->load->view('layout/admin_cabang/footer');
       }
       else{
           $this->_add_infaq();
       }
        
    }
    private function _add_infaq(){
        $dataInfaq=[
            'username'=>$this->input->post('username'),
            'name'=>$this->input->post('namacabang'),
            'name'=>$this->input->post('name'),
            
            'phone'=>$this->input->post('phone'),
            'category'=>$this->input->post('category'),
            'nominal'=>$this->input->post('amount'),
            'date'=>date('Y-m-d H:i:s'),
            'status'=>'draft',
            'lembaga_name'=>$this->input->post('lembaga'),
        ];
        $this->db->insert('transaction_cabang',$dataInfaq);
        redirect('index.php/admin_cabang/add_infaq');
    }
    public function history(){
        $data['user'] = $this->db->get_where('admin_cabang',['username'=>$this->session->userdata('username')])->row_array();
        $data['transaksi']=$this->db->get_where('transaction_cabang',['username'=>$this->session->userdata('username')])->result_array();
        $this->load->view('layout/admin_cabang/header',$data);
        $this->load->view('layout/admin_cabang/sidebar');
        $this->load->view('layout/admin_cabang/navbar');
        $this->load->view('cabang_history',$data);
        $this->load->view('layout/admin_cabang/footer');
    }
	// public function bisalagi(){
	// 	$this->load->view('/layout/admin_dashboard/header');
	// 	$this->load->view('/layout/admin_dashboard/sidebar');
	// 	$this->load->view('/layout/admin_dashboard/navbar');
	// 	$this->load->view('admin_2');
	// 	$this->load->view('/layout/admin_dashboard/footer');
	// }
	
}
