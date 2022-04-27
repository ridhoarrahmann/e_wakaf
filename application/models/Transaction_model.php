<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model{
    public function getTransaction(){
        
        return $this->db->get_where('transaction_draft', ['email' => $this->session->userdata('email')])->result_array();
    }
}