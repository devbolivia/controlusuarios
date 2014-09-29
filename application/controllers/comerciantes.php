<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comerciantes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('comerciantes_model');
	}


	public function index()
	{

	}

	public function listaComerciantes($value='')
	{
		$allComer = $this->comerciantes_model->getTodosComerciantes();
		$data['allComer'] = $allComer;
		$this->load->view('comerciantes/lista_comerciantes',$data);
	}

	public function crearComerciante(){
		$this->load->view('comerciantes/crear_comerciante');
	}

	public function procesarCrearComerciante()
	{
		$this->form_validation->set_rules('ncaseta', 'Numero de caseta', 'trim|required|min_length[1]|max_length[15]|xss_clean');
		$this->form_validation->set_rules('nombres', 'Nombres', 'trim|required|min_length[1]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|min_length[1]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('codigo', 'Codigo', 'trim|required|min_length[1]|max_length[120]|xss_clean');
		$this->form_validation->set_rules('carnet', 'Carnet', 'trim|required|min_length[3]|max_length[15]|xss_clean');
		$this->form_validation->set_rules('direccion', 'Direccion', 'trim|required|min_length[3]|max_length[100]|xss_clean');
		$this->form_validation->set_rules('rubro', 'Rubro', 'trim|required|min_length[1]|max_length[20]|xss_clean');
		$this->form_validation->set_rules('observacion', 'Obaservacion', 'trim||min_length[2]|max_length[600]|xss_clean');

		if ($this->form_validation->run() === TRUE) {
			$datosInsert = array(
								'numero_caseta_com' => $this->input->post('ncaseta'),
								'nombres_com' => $this->input->post('nombres'),
								'apellidos_com' => $this->input->post('apellidos'),
								'codigo_com' => $this->input->post('codigo'),
								'carnet_com' => $this->input->post('carnet'),
								'direccion_com' => $this->input->post('direccion'),
								'observaciones_com' => $this->input->post('observacion'),
								'id_rubro' => $this->input->post('rubro')
								);
			$this->comerciantes_model->procesarCrearComerciante($datosInsert);
			$this->session->set_flashdata('mensaje', 'Fue Creado correctamente');
			redirect('/comerciantes/listaComerciantes/', 'refresh');
			// $this->listaComerciantes();
		} else {
			echo "Error";
			$this->crearComerciante();
		}

	}

	public function verComerciante($id='')
	{
		if ($id>0) {

			$comerciante = $this->comerciantes_model->verComerciante($id);
			if (count($comerciante)>0) {
				// $data = $comerciante;
				$data = array(
					            'numero' => $comerciante['numero_caseta_com'],
					            'nombres' => $comerciante['nombres_com'],
					            'apellidos' => $comerciante['apellidos_com'],
					            'codigo' => $comerciante['codigo_com'],
					            'carnet' => $comerciante['carnet_com'],
					            'direccion' => $comerciante['direccion_com'],
					            'observaciones' => $comerciante['observaciones_com'],
					            'rubro' => $comerciante['id_rubro'],
					            );
				$this->load->view('comerciantes/ver_comerciante',$data);
			} else {
				$this->listaComerciantes();
			}

		} else {
			$this->listaComerciantes();
		}

	}

	public function editarComerciante($id='')
	{
		if ($id>0) {

			$comerciante = $this->comerciantes_model->verComerciante($id);
			if (count($comerciante)>0) {
				// $data = $comerciante;
				$data = array(
					            'id' => $comerciante['id_com'],
					            'numero' => $comerciante['numero_caseta_com'],
					            'nombres' => $comerciante['nombres_com'],
					            'apellidos' => $comerciante['apellidos_com'],
					            'codigo' => $comerciante['codigo_com'],
					            'carnet' => $comerciante['carnet_com'],
					            'direccion' => $comerciante['direccion_com'],
					            'observaciones' => $comerciante['observaciones_com'],
					            'rubro' => $comerciante['id_rubro'],
					            );
				$this->load->view('comerciantes/editar_comerciante',$data);
			} else {
				$this->listaComerciantes();
			}

		} else {
			$this->listaComerciantes();
		}

	}

	public function procesarEditarComerciante($id)
	{
		if ($id>0) {
			$this->form_validation->set_rules('ncaseta', 'Numero de caseta', 'trim|required|min_length[1]|max_length[15]|xss_clean');
			$this->form_validation->set_rules('nombres', 'Nombres', 'trim|required|min_length[1]|max_length[50]|xss_clean');
			$this->form_validation->set_rules('apellidos', 'Apellidos', 'trim|required|min_length[1]|max_length[50]|xss_clean');
			$this->form_validation->set_rules('codigo', 'Codigo', 'trim|required|min_length[1]|max_length[120]|xss_clean');
			$this->form_validation->set_rules('carnet', 'Carnet', 'trim|required|min_length[3]|max_length[15]|xss_clean');
			$this->form_validation->set_rules('direccion', 'Direccion', 'trim|required|min_length[3]|max_length[100]|xss_clean');
			$this->form_validation->set_rules('rubro', 'Rubro', 'trim|required|min_length[1]|max_length[20]|xss_clean');
			$this->form_validation->set_rules('observacion', 'Obaservacion', 'trim||min_length[2]|max_length[600]|xss_clean');

			if ($this->form_validation->run() === TRUE) {
				$datosUpdate = array(
									'numero_caseta_com' => $this->input->post('ncaseta'),
									'nombres_com' => $this->input->post('nombres'),
									'apellidos_com' => $this->input->post('apellidos'),
									'codigo_com' => $this->input->post('codigo'),
									'carnet_com' => $this->input->post('carnet'),
									'direccion_com' => $this->input->post('direccion'),
									'observaciones_com' => $this->input->post('observacion'),
									'id_rubro' => $this->input->post('rubro')
									);
				$this->comerciantes_model->procesarEditarComerciante($datosUpdate,$id);
				$this->session->set_flashdata('mensaje', 'Fue Editado correctamente');
				redirect('/comerciantes/listaComerciantes/', 'refresh');
				// $this->listaComerciantes();
			} else {
				// echo "Error";
				$this->editarComerciante();
			}
		} else {
			$this->listaComerciantes();
		}


	}

	public function eliminarComerciante($id="")
	{
		if($id){
			$this->comerciantes_model->eliminarComerciante($id);
			$this->session->set_flashdata('mensaje', 'Fue eliminado correctamente');
			redirect('/comerciantes/listaComerciantes/', 'refresh');
			// $this->listaComerciantes();
		}else{
			$this->listaComerciantes();
		}
	}

}

/* End of file comerciantes.php */
/* Location: ./application/controllers/comerciantes.php */