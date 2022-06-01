<?php

class Compositor{

    private $nombre;
    private $apellido;
    private $pais_nacimiento;
    private $fecha_nacimiento;
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
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */ 
    public function setApellido($apellido)
    {
        $this->apellido = pg_escape_string($this->db, $apellido);

    }
    

    /**
     * Get the value of pais_nacimiento
     */ 
    public function getPais_nacimiento()
    {
        return $this->pais_nacimiento;
    }

    /**
     * Set the value of pais_nacimiento
     *
     * @return  self
     */ 
    public function setPais_nacimiento($pais_nacimiento)
    {
        $this->pais_nacimiento = pg_escape_string($this->db, $pais_nacimiento);
    }
    

    /**
     * Get the value of fecha_nacimiento
     */ 
    public function getFecha_nacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * Set the value of fecha_nacimiento
     *
     * @return  self
     */ 
    public function setFecha_nacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = pg_escape_string($this->db, $fecha_nacimiento);
    }

    public function guardar(){

        $insercion= "insert into bdrecords.compositores(nombre,apellido,pais_nacimiento,fecha_nacimiento) values('{$this->getNombre()}','{$this->getApellido()}','{$this->getPais_Nacimiento()}','{$this->getPais_nacimiento()}')";

        $query = pg_query($this->db, $insercion);

        if($query){

                return "Se ha almacenado en la base de datos de forma correcta  ";

        } else {

                return "No se ha podido almacenar en la base de datos";
        }
    }
}