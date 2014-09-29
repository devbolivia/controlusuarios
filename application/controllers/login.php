<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/inicio');
	}

	public function procesar(){
		$usu = $this->input->post('usuario');
		$this->form_validation->set_rules('usuario', 'Usuario', 'trim|required|min_length[5]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[20]|xss_clean|callback_verificarPassword['.$usu.']');

		if($this->form_validation->run() === TRUE){
			redirect('comerciantes/listaComerciantes');
		}else{
			$this->index();
			// redirect('login/index');
		}
	}

	public function verificarPassword($password,$usuario){
		// echo "$password , $usuario ,";
		$this->load->model('login_model');
		$usuarioRes = $this->login_model->verificarAcceso($usuario,$password);

		if($usuarioRes){

			if ($usuarioRes['login_usu'] == $usuario AND $usuarioRes['pass_usu'] == $password) {
				return TRUE;
			} else {
				$this->form_validation->set_message('Password', 'The %s field can not be the word "test"');
				return FALSE;
			}

		}else{
			$this->form_validation->set_message('Password', 'The %s field can not be the word "test"');
			return FALSE;
		}

	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */