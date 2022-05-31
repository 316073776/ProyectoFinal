<?php

class Disquera{

    private $nombre;
    private $pais;
    private $db;

    public function __construct(){

        $this->db = Db::connect();
    }

    

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = pg_escape_string($this->db, $nombre);
    }

    /**
     * Get the value of pais
     */ 
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */ 
    public function setPais($pais)
    {
        $this->pais = pg_escape_string($this->db, $pais);
    }

    public function obtenerTodos(){

        $sql = "SELECT * FROM bdrecords.disqueras";
        $disqueras = pg_query($this->db, $sql);

        return $disqueras;
    }
}