<?php

class Grupo{

    private $nombre;
    private $pais_origen;
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
     * Get the value of pais_origen
     */ 
    public function getPais_origen()
    {
        return $this->pais_origen;
    }

    /**
     * Set the value of pais_origen
     *
     * @return  self
     */ 
    public function setPais_origen($pais_origen)
    {
        $this->pais_origen = pg_escape_string($this->db, $pais_origen);
    }

    public function obtenerTodos(){

        $sql = "SELECT * FROM bdrecords.grupos";
        $grupos = pg_query($this->db, $sql);

        return $grupos;
    }
}