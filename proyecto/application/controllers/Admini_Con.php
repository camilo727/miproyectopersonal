<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admini_Con extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}
	public function Admin_perfil()
	{
		$this->load->view('admin/Navegation_View');
		$this->load->view('admin/Perfil_View');
		$this->load->view('admin/Footer_View');
	}
	//----------------------------------------------------------------------Categoria-------------------------------------------------------------------------------
	public function Admin_categoria()
	{
		$traer_datos['traer_prenda'] = $this->Admin_model->traer_categoria();
		$this->load->view('admin/Navegation_View');
		$this->load->view('admin/Categoria_View', $traer_datos);
		$this->load->view('admin/Footer_View');
	}
	public function agregar_categoria()
	{
		$categoria = $this->input->post('categoria');
		$validar = $this->Admin_model->comprobacion_categoria($categoria);
		if ($validar->contar == 1) {
			echo "ya existe ";
		} else {
			$this->Admin_model->agregar_categoria($categoria);
			redirect('Admini_Con/Admin_categoria');
		}
	}
	public function Modificar_prenda()
	{
		$categoria = $this->input->post('categoria');
		$Id_Categoria = $this->input->post('Id_Categoria');
		$this->Admin_model->Modifica_prenda($categoria, $Id_Categoria);
		redirect('Admini_Con/Admin_categoria');
	}
	public function eliminar_prenda()
	{
		$Id_Categoria = $this->input->post('Id_Categoria');
		$this->Admin_model->elimnar_prenda($Id_Categoria);
		redirect('Admini_Con/Admin_categoria');
	}

	//------------------------------------------------------------------generos-----------------------------------------------------------------------------------------

	public function Admin_genero()
	{
		$traer_datos['traer_genero'] = $this->Admin_model->traer_genero();
		$this->load->view('admin/Navegation_View',$traer_datos);
		$this->load->view('admin/Genero_View');
		$this->load->view('admin/Footer_View');
	}
	public function agregar_generos()
	{
		$genero = $this->input->post('genero');
		$validar = $this->Admin_model->comprobacion_genero($genero);
		if ($validar->contar == 1) {
			echo "ya existe ";
		} else {
			$this->Admin_model->agregar_genero($genero);
			redirect('Admini_Con/Admin_genero');
		}
	}
	public function modificar_genero()
	{
		$Id_genero=$this->input->post('Id_genero');
		$genero=$this->input->post('genero');
		$this->Admin_model->moddificar_genro($genero,$Id_genero);
		redirect('Admini_Con/Admin_genero');
		
	}
	public function eliminar_genero()
	{
		$Id_genero=$this->input->post('Id_genero');
		echo $Id_genero;
		$this->Admin_model->eliminar_genero($Id_genero);
		redirect('Admini_Con/Admin_genero');
	}
	//---------------------------------------------------------producto------------------------------------------------------------------------------------------------

	public function Admin_producto($codigo_foto = null)
	{
		//$Id_foto=$this->Admin_model->traer_foto($codigo_foto);	
		$traer_datos['traer_prenda'] = $this->Admin_model->traer_categoria();
		$traer_datos['traer_genero'] = $this->Admin_model->traer_genero();
		$this->load->view('admin/Navegation_View');
		$this->load->view('admin/Producto_View',$traer_datos);
		$this->load->view('admin/Footer_View');
	}
	public function agregarfoto()
	{
		$foto_primera=$this->input->post('foto_primera');
		$foto_segunda=$this->input->post('foto_segunda');
		$foto_tecera=$this->input->post('foto_tecera');
		$foto_cuarta=$this->input->post('foto_cuarta');
		$foto_quinta=$this->input->post('foto_quinta');
		$codigo_foto=$this->input->post('codigo_foto');
		$this->Admin_model->agregar_foto($foto_primera,$foto_segunda,$foto_tecera,$foto_cuarta,$foto_quinta,$codigo_foto);
		redirect(base_url() . "index.php/Admini_Con/Admin_producto");
		//redirect('Admini_Con/Admin_producto',$codigo_foto);
	}/*
	public function agregar_producto($codigo_foto = null)
	{
		$Nombre_Producto=$this->input->post('Nombre_Producto');
		$Nombre_Descripcion=$this->input->post('Nombre_Descripcion');
		$Id_categoria=$this->input->post('Id_categoria');
		$Id_genero=$this->input->post('Id_genero');
		if ($Nombre_Producto==null) {
			
			$Id_foto= $traer_datos->Id_foto;
			redirect('Admini_Con/Admin_producto');
		}
		else {
			$this->admin_model->agregar_producto($Nombre_Producto,$Nombre_Descripcion,$Id_categoria,$Id_genero,$Id_foto);
			redirect('Admini_Con/Admin_producto');
			
		}
		/*
		
		$Nombre_Producto=$this->input->post('Nombre_Producto');
		$Nombre_Descripcion=$this->input->post('Nombre_Descripcion');
		$Id_categoria=$this->input->post('Id_categoria');
		$Id_genero=$this->input->post('Id_genero');
		
		
		
	}*/
}
