<?php

class Disco{

    private $titulo;
    private $grupo_id;
    private $anio;
    private $genero;
    private $disquera_id;
    private $productor_id;
    private $costo;
    private $db;

    public function __construct(){

        $this->db = Db::connect();
    }

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     *
     * @return  self
     */ 
    public function setTitulo($titulo)
    {
        $this->titulo = pg_escape_string($this->db, $titulo);
    }

    /**
     * Get the value of grupo_id
     */ 
    public function getGrupo_id()
    {
        return $this->grupo_id;
    }

    /**
     * Set the value of grupo_id
     *
     * @return  self
     */ 
    public function setGrupo_id($grupo_id)
    {
        $this->grupo_id = $grupo_id;
    }

    /**
     * Get the value of anio
     */ 
    public function getAnio()
    {
        return $this->anio;
    }

    /**
     * Set the value of anio
     *
     * @return  self
     */ 
    public function setAnio($anio)
    {
        $this->anio = pg_escape_string($this->db, $anio);
    }

    

    /**
     * Get the value of genero
     */ 
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set the value of genero
     *
     * @return  self
     */ 
    public function setGenero($genero)
    {
        $this->genero = pg_escape_string($this->db, $genero);
    }

    /**
     * Get the value of disquera_id
     */ 
    public function getDisquera_id()
    {
        return $this->disquera_id;
    }

    /**
     * Set the value of disquera_id
     *
     * @return  self
     */ 
    public function setDisquera_id($disquera_id)
    {
        $this->disquera_id = $disquera_id;
    }

    /**
     * Get the value of productor_id
     */ 
    public function getProductor_id()
    {
        return $this->productor_id;
    }

    /**
     * Set the value of productor_id
     *
     * @return  self
     */ 
    public function setProductor_id($productor_id)
    {
        $this->productor_id = $productor_id;
    }

    /**
     * Get the value of costo
     */ 
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set the value of costo
     *
     * @return  self
     */ 
    public function setCosto($costo)
    {
        $this->costo = pg_escape_string($this->db, $costo);
    }

    public function guardar(){

        $insercion= "insert into bdrecords.discos(titulo,grupo_id,año,genero,disquera_id,productor_id,costo) values('{$this->getTitulo()}','{$this->getGrupo_id()}','{$this->getAnio()}','{$this->getGenero()}','{$this->getDisquera_id()}','{$this->getProductor_id()}','{$this->getCosto()}')";
                                    
        $query = pg_query($this->db, $insercion);
                                    
        if($query){
                                           
            return "Se ha almacenado en la base de datos de forma correcta  ";
                                    
        } else {
                                           
            return "No se ha podido almacenar en la base de datos";
                                    
        }
                           
    }
}