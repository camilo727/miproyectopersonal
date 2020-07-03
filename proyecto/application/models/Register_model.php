<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	public function consulta_cuenta($correo,$pass)
	{
		$sql = "SELECT COUNT(*) 
		AS contar FROM usuarios 
		WHERE Email='$correo' 
		AND NEw_pass='$pass'";
		$this->db->query($sql);
		$query=$this->db->query($sql);
		return $query->row();

	}
	public function estraer_datos($correo,$pass)
	{
		$sql = "SELECT u.Id_Usuarios,u.Nombre,u.Apellido,u.Email,r.rol
		FROM usuarios u,roles r
		WHERE u.Id_roles=r.Id_roles
		AND Email='$correo' 
		AND NEw_pass='$pass'";
		$this->db->query($sql);
		$query=$this->db->query($sql);
		return $query->row();
	}
	public function guarda_registor_cliente($nombre, $apellido, $correo, $pass, $repit_pass, $id_roles)
	{
		$sql = "INSERT INTO usuarios(Nombre,Apellido,Email,New_pass,Repeat_pass,Id_roles)
        VALUE ('$nombre','$apellido','$correo','$pass','$repit_pass',$id_roles)";
		$this->db->query($sql);
	}
}
