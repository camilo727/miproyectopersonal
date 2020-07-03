<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_con extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Register_model');
	}
//------------------------------------------------------------login-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function login()
	{
		$this->load->view('registre/Login_View');
	}
	public function sessiones()
	{
		$correo=$this->input->post('correo');
		$pass=$this->input->post('pass');
		$valida=$this->Register_model->consulta_cuenta($correo,$pass);
		
		if ($valida->contar==1) {
			$resul=$this->Register_model->estraer_datos($correo,$pass);
			$datos_de_sesion=array(
				"Id_Usuarios"=> $resul->Id_Usuarios,
				"Nombre"=>$resul->Nombre,
				"Apellido"=>$resul->Apellido,
				"rol"=>$resul->rol
			);
			$this->session->set_userdata($datos_de_sesion);
		}
		if ($resul->rol=="Administrador") {
			redirect('Admini_Con/Admin_perfil');
		}
		elseif ($resul->rol=="cliente") {
			redirect(base_url());
		}
	}
	//---------------------------------------------------registro  --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function view_registre()
	{
		$this->load->view('registre/Registre_View');
	}
	public function registre()
	{
		//$this->load->library('encryption');
		$nombre=$this->input->post('nombre');

		$apellido=$this->input->post('apellido');

		$correo=$this->input->post('correo');

		$pass=$this->input->post('pass');

		//$pass_encryption=$this->encryption->encrypt($pass);

		$repit_pass=$this->input->post('repit_pass');
		
		$id_roles=$this->input->post('id_roles');
		if ($pass==$repit_pass) {
			$this->Register_model->guarda_registor_cliente($nombre,$apellido,$correo,$pass,$repit_pass,$id_roles);
			redirect('register_con/login');
		}
		else{
			echo"no conseden las conraseña";
		}
	}
	// ------------------------------------------------------------------------contraseña---------------------------------------------------------------------------------------------------------------------------------------------------------------------
	public function View_recodar_contra()
	{
		$this->load->view('registre/Forgot_View');
	}
}
