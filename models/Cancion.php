<?php

class Cancion{

    private $titulo;
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

    public function guardar(){

        $insercion= "insert into bdrecords.canciones(titulo) values('{$this->getTitulo()}')";
                    
        $query = pg_query($this->db, $insercion);
                    
        if($query){
                           
            return "Se ha almacenado en la base de datos de forma correcta  ";
                    
        } else {
                            
            return " No se ha podido almacenar en la base de datos";
                    
        }
    }
}