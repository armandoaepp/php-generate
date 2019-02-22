<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanBuzonRetiro{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $nombres;
    private $titulo_retiro;
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

    public function setTituloRetiro($titulo_retiro_)
    {
        $this->titulo_retiro = Validation::validate( $titulo_retiro_ );
    }

    public function getTituloRetiro()
    {
        return $this->titulo_retiro;
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
