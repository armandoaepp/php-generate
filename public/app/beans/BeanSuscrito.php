<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanSuscrito{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $nombre;
    private $asunto;
    private $email;
    private $telefono;
    private $empresa;
    private $mensaje;
    private $estado = 1 ;
    private $created_up = NULL ;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNombre($nombre_)
    {
        $this->nombre = Validation::validate( $nombre_ );
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setAsunto($asunto_)
    {
        $this->asunto = Validation::validate( $asunto_ );
    }

    public function getAsunto()
    {
        return $this->asunto;
    }

    public function setEmail($email_)
    {
        $this->email = Validation::validate( $email_ );
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setTelefono($telefono_)
    {
        $this->telefono = Validation::validate( $telefono_ );
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setEmpresa($empresa_)
    {
        $this->empresa = Validation::validate( $empresa_ );
    }

    public function getEmpresa()
    {
        return $this->empresa;
    }

    public function setMensaje($mensaje_)
    {
        $this->mensaje = Validation::validate( $mensaje_ );
    }

    public function getMensaje()
    {
        return $this->mensaje;
    }

    public function setEstado($estado_)
    {
        $this->estado = Validation::validate( $estado_ );
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setCreatedUp($created_up_)
    {
        $this->created_up = Validation::validate( $created_up_ );
    }

    public function getCreatedUp()
    {
        return $this->created_up;
    }

}
