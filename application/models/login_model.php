<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('encrypt');
	}

	public function verificarAcceso($usu,$pass){
		$this->db->select('*');
		$this->db->where('login_usu', $usu);
		$this->db->where('pass_usu', $pass);
		$res = $this->db->get('usuarios',1);
		return $res->row_array();
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */
