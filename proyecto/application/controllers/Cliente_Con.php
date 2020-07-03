<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente_Con extends CI_Controller {

	
	public function index()
	{
		$this->load->view('clientes/Navegation_View');
		$this->load->view('clientes/Home_View');
		$this->load->view('clientes/Footer_View');
	}
	public function Hombre(){
		$this->load->view('clientes/Menu_View');
		$this->load->view('clientes/Hombre_View');
		$this->load->view('clientes/Pie_View');
	}
	public function mujeres(){
		
	}
	public function niños(){
		
	}
	public function niñas(){
		
	}
}
