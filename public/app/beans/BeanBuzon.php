<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanBuzon{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $nombres;
    private $telefono;
    private $email;
    private $mensaje;
    private $estado = 1 ;
    private $fecha;

    # METODOS
    public function setId($id_)
    {
        $this->id = Validation::validate( $id_ );
    }

    public function getId()
    {
        return $this->id;
    }

    public function setNombres($nombres_)
    {
        $this->nombres = Validation::validate( $nombres_ );
    }

    public function getNombres()
    {
        return $this->nombres;
    }

    public function setTelefono($telefono_)
    {
        $this->telefono = Validation::validate( $telefono_ );
    }

    public function getTelefono()
    {
        return $this->telefono;
    }

    public function setEmail($email_)
    {
        $this->email = Validation::validate( $email_ );
    }

    public function getEmail()
    {
        return $this->email;
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

    public function setFecha($fecha_)
    {
        $this->fecha = Validation::validate( $fecha_ );
    }

    public function getFecha()
    {
        return $this->fecha;
    }

}
