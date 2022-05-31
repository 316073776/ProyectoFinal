<?php 

class Usuario{

    private $username;
    private $nombre;
    private $apaterno;
    private $amaterno;
    private $contrasena;
    private $db;

    public function __construct(){
        
        $this->db = Db::connect();
    }

    /**
     * Get the value of username
     */ 
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @return  self
     */ 
    public function setUsername($username)
    {
        $this->username = pg_escape_string($this->db, $username);;

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
        $this->nombre = pg_escape_string($this->db, $nombre);;

    }

    /**
     * Get the value of apaterno
     */ 
    public function getApaterno()
    {
        return $this->apaterno;
    }

    /**
     * Set the value of apaterno
     *
     * @return  self
     */ 
    public function setApaterno($apaterno)
    {
        $this->apaterno = pg_escape_string($this->db, $apaterno);;

    }

    /**
     * Get the value of amaterno
     */ 
    public function getAmaterno()
    {
        return $this->amaterno;
    }

    /**
     * Set the value of amaterno
     *
     * @return  self
     */ 
    public function setAmaterno($amaterno)
    {
        $this->amaterno = pg_escape_string($this->db, $amaterno);

    }

    /**
     * Get the value of contrasena
     */ 
    public function getContrasena()
    {
        return password_hash(pg_escape_string($this->db, $this->contrasena), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    /**
     * Set the value of contrasena
     *
     * @return  self
     */ 
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

    }

    public function guardar(){

        $sql = "SELECT * FROM bdrecords.usuarios WHERE username = '{$this->getNombre()}';";

        $result = pg_query($this->db, $sql);
        
        if(!empty(pg_fetch_all($result, PGSQL_ASSOC))){
        
            return 'Ya existe ese nombre de usuario, prueba con otro';

        }else{
                               
            $insercion= "insert into bdrecords.usuarios(nombre,username,apaterno,amaterno,contrasena) values('{$this->getNombre()}','{$this->getUsername()}','{$this->getApaterno()}','{$this->getAmaterno()}','{$this->getContrasena()}')";
                                    
            $query = pg_query($this->db, $insercion);
                                    
            if($query){

                return true;
                                    
            } else {
                                            
                return "  No se ha podido almacenar en la base de datos  ";
                                    
            }
                                
        }
    }

    public function login(){

        $sql = "SELECT * FROM bdrecords.usuarios WHERE username = '{$this->getUsername()}';";
        $result = pg_query($this->db, $sql);
        if($result){

            $user = pg_fetch_all($result, PGSQL_ASSOC);

            if(password_verify($this->contrasena, $user[0]['contrasena'])){

                            
                return $user[0];

            }else{
                            
                return 'La contraseña es incorrecta';
                        
            }
                    
        }else{
                        
            return 'El nombre de usuario es incorrecto';
                    
        }
    }

}