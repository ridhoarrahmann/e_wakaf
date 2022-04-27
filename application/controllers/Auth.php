<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
		$this->load->view('header');
		$this->load->view('login');
    }


	public function admin_pusat_login(){
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password'.'required|trim');


		if($this->form_validation->run($this)==false){
			$this->load->view('admin_pusat_login');
			
		}
		else{
			$this->_admin_pusat_login();
		}

		
	}
	private function _admin_pusat_login(){
		$username = $this->input->post('username');
		$password = $this -> input ->post('password');
		
		$user = $this ->db->get_where('admin_pusat',['username'=>$username])->row_array();
		if($user){
			if(password_verify($password, $user['password'])){
				$data ['user'] = array(
					'username' => $user['username'], 
				);
				$this->session->set_userdata(array('username' => $user['username']));
				

				redirect('index.php/admin');
			}
			else{
				$this->session->set_flashdata('message','<div class="alert alert-danger	" role="alert">
					password salah
				  	</div>');
				  	redirect('index.php/auth/admin_pusat_login');	
			}
		}
		else{
			$this->session->set_flashdata('message','<div class="alert alert-danger	" role="alert">
			User Not Registered
		 	 </div>');
		 	 redirect('index.php/auth/admin_pusat_login');
		}

	}
	public function cabang_login(){
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');
		if($this->form_validation->run($this)==false){
			$this->load->view('admin_cabang_login');
		}
		else{
			$this->_cabang_login();
		}
	}
	
	private function _cabang_login(){
		$username=$this->input->post('username');
		$password=$this->input->post('password');

		$user = $this->db->get_where('admin_cabang',['username'=>$username])->row_array();
		if($username){
			if(password_verify($password, $user['password'])){
				$data['user']=array(
					'id'=>$user['id'],
					'username'=>$user['username'],
				);
				$this->session->set_userdata(array('username' => $user['username']));
				
				redirect('index.php/admin_cabang');
			}
			else{
				$this->session->set_flashdata('message','<div class="alert alert-danger	" role="alert">
				password salah
				</div>');
				redirect('index.php/auth/cabang_login');	
			}
		}
		else{
			$this->session->set_flashdata('message','<div class="alert alert-danger	" role="alert">
			Username Salah
			  </div>');
			  redirect('index.php/auth/cabang_login');
		}
	}	

	

	public function user_login(){
		
		$this->form_validation->set_rules('email','Email','required|trim');
		$this->form_validation->set_rules('password','password','required|trim');
		

		if($this->form_validation->run($this)==false){
			$this->load->view('user_login');
		}
		else{
			// succes
			$this->_userLogin();
		}	
	}
	private function _userLogin(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('user',['email'=>$email])->row_array();
		if($user){
			if($user['is_active'] == 1){
				if(password_verify($password, $user['password'])){

					$data ['user'] = array(
						'email' => $user['email'],
						'username' => $user['username'], 
					);
					$this->session->set_userdata(array('email' => $user['email']));
					redirect('index.php/user');
					
	
				}	
				else{
					$this->session->set_flashdata('message','<div class="alert alert-danger	" role="alert">
					password salah
				  	</div>');
				  	redirect('index.php/auth/user_login');	
				}
			}
			else{
				$this->session->set_flashdata('message','<div class="alert alert-danger	" role="alert">
				Email tidak aktif
			  </div>');
			  redirect('index.php/auth/user_login');
			}
			
		}
		else{
			$this->session->set_flashdata('message','<div class="alert alert-danger	" role="alert">
			Email not registered
		  </div>');
		  redirect('index.php/auth/user_login');
		}
	}
    public function admin_login(){
        $this->load->view('admin_login');
        
    }
	 
    public function registration(){

		$this->form_validation->set_rules('name','Name','required|trim');
		$this->form_validation->set_rules('username','Username','required|trim');
		$this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('phone','Phone','required|trim');
		
		$this->form_validation->set_rules('password1','Password1','required|trim|min_length[3]|matches[password2]');
		$this->form_validation->set_rules('password2','Password2','required|trim|matches[password1]');
		

		// google recaptcha
		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));
 
        $userIp=$this->input->ip_address();
     
        $secret = $this->config->item('google_secret');
		
   
        $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$recaptchaResponse."&remoteip=".$userIp;
 
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        $output = curl_exec($ch); 
        curl_close($ch);      
         
       $status= json_decode($output, true);

		if($this->form_validation->run($this)==false){
			$data=array(
				'widget'=>$this->recaptcha->getwidget(),
				'script'=>$this->recaptcha->getScriptTag(),
			);
			$this->load->view('register',$data);
		}
        else{
			// berhasil 
			$data = [
				'name' => htmlspecialchars($this->input->post('name',true)),
				'username'=> htmlspecialchars($this->input->post('username',true)),
				'email' => $this->input->post('email'),
				'phone'=> $this->input->post('phone'),
				'password'=> password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
				'is_active'=> 1,	
				
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message','<div class="alert alert-primary" role="alert">
			Please Login
		  </div>');
			redirect('index.php/auth/user_login');
		}
    }
	public function logout(){
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');

		redirect('index.php/auth');
	}
    
    // public function admin_login()
    // {
    //     $this->load->view('layout/admin_dashboard/header');
    //     $this->load->view('layout/admin_dashboard/sidebar');
    //     $this->load->view('layout/admin_dashboard/navbar');
    //     $this->load->view('admin');
    //     $this->load->view('layout/admin_dashboard/footer');

    // }
	
}
