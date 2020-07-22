<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cliente_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //----------------------------Genero del navegador------------------------------------------------------------------------------
    public function traer_genero()
    {
        $sql = "SELECT Id_genero,Genero
        FROM genero";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function traer_un_genero($Genero)
    {
        $sql = "SELECT Id_genero,Genero
        FROM genero
        WHERE Genero='$Genero' ";
        $query = $this->db->query($sql);
        return $query->result();
    }
    //----------------------------------categorias--------------------------------------------------------------------------------
    public function traer_categoria($Genero)
    {
        $sql = "SELECT c.Categoria,Genero
        FROM producto p,categoria c,genero g
        WHERE  p.Id_categoria=c.Id_categoria
        AND p.Id_genero=g.Id_genero
        AND g.Genero='$Genero'";
        $query = $this->db->query($sql);
        return $query->result();
    }
}
