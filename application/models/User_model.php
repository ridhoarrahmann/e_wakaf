<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{
    public function sedekah(){
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		date_default_timezone_set('Asia/Jakarta');
		$dataSedekah = [
			'id_user'=> $this->input->post('id_user'),
			'username'=> $this->input->post('username'),
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'phone'=>$this->input->post('phone'),
			'category'=>$this->input->post('category'),
			'nominal'=>$this->input->post('amount'),
			'date'=>date('Y-m-d H:i:s'),
			
			'status'=>"draft",

		];
        $this->db->insert('transaction', $dataSedekah);

        // return $this->db->get_where('transaction_draft', ['email' => $this->session->userdata('email')])->result_array();
    }
}