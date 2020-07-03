<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  //--------------------------------------------------categoria----------------------------------------------------------------------------
  public function comprobacion_categoria($categoria)
  {
    $sql = "SELECT COUNT(*) 
        AS contar FROM categoria 
        WHERE categoria='$categoria'";
    $query = $this->db->query($sql);
    return $query->row();
  }
  public function agregar_categoria($categoria)
  {
    $sql = "INSERT INTO categoria(Categoria)
        VALUE('$categoria')";
    $this->db->query($sql);
  }
  public function traer_categoria()
  {
    $sql = "SELECT Id_Categoria,Categoria
        FROM categoria";
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function Modifica_prenda($categoria, $Id_Categoria)
  {
    $sql = "UPDATE categoria 
        SET
         Categoria = '$categoria'
        WHERE
        Id_Categoria = $Id_Categoria";
    $this->db->query($sql);
  }
  public function elimnar_prenda($Id_Categoria)
  {
    $sql = "DELETE FROM categoria
        WHERE
        Id_Categoria = $Id_Categoria";
    $this->db->query($sql);
  }
  //------------------------------------------------genero---------------------------------------------------------------------------------
  public function comprobacion_genero($genero)
  {
    $sql = "SELECT COUNT(*) 
        AS contar FROM genero 
        WHERE genero='$genero'";
    $query = $this->db->query($sql);
    return $query->row();
  }
  public function agregar_genero($genero)
  {
    $sql = "INSERT INTO genero(Genero)
        VALUE('$genero')";
    $this->db->query($sql);
  }
  public function traer_genero()
  {
    $sql = "SELECT Id_genero,Genero
        FROM genero";
    $query = $this->db->query($sql);
    return $query->result();
  }
  public function moddificar_genero($genero, $Id_genero)
  {
    $sql = "UPDATE genero 
        SET
         Genero = '$genero'
        WHERE
        Id_genero = $Id_genero";
    $this->db->query($sql);
  }
  public function eliminar_genero($Id_genero)
  {
    $sql = "DELETE FROM genero
        WHERE
        Id_genero = $Id_genero";
    $this->db->query($sql);
  }
  //--------------------------------------------------------------foto-------------------------------------------------------------
  public function agregar_foto($foto_primera, $foto_segunda, $foto_tecera, $foto_cuarta, $foto_quinta, $codigo_foto)
  {
    $sql = "INSERT INTO foto(Foto_primera,Foto_segunda,Foto_tecera,Foto_cuarta,Foto_quinta,codigo_foto)
        VALUE('$foto_primera','$foto_segunda','$foto_tecera','$foto_cuarta','$foto_quinta','$codigo_foto')";
    $this->db->query($sql);
  }
  public function traer_foto($codigo_foto)
  {
    $sql = "SELECT Id_foto
    FROM foto
    WHERE codigo_foto='$codigo_foto'";
    $query = $this->db->query($sql);
    return $query->row();
  }
  //----------------------------------------------------------------producto---------------------------------------------------------------
  public function agregar_producto($Nombre_Producto,$Nombre_Descripcion,$Id_categoria,$Id_genero,$Id_foto)
  {
    $sql = "INSERT INTO producto(Nombre_Producto,Descripcion_producto,Id_categoria,Id_genero,Id_foto)
    VALUE ('$Nombre_Producto','$Nombre_Descripcion',$Id_categoria,$Id_genero,$Id_foto)";
    $this->db->query($sql);
  }
}
