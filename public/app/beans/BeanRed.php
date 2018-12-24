<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanRed{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $subtitulo;
    private $tipo;
    private $vacantes;
    private $requisitos;
    private $conocimientos;
    private $salario;
    private $nombrecontacto;
    private $telefonocontacto;
    private $emailcontacto;
    private $orden;
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

    public function setTitulo($titulo_)
    {
        $this->titulo = Validation::validate( $titulo_ );
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setSubtitulo($subtitulo_)
    {
        $this->subtitulo = Validation::validate( $subtitulo_ );
    }

    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    public function setTipo($tipo_)
    {
        $this->tipo = Validation::validate( $tipo_ );
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setVacantes($vacantes_)
    {
        $this->vacantes = Validation::validate( $vacantes_ );
    }

    public function getVacantes()
    {
        return $this->vacantes;
    }

    public function setRequisitos($requisitos_)
    {
        $this->requisitos = Validation::validate( $requisitos_ );
    }

    public function getRequisitos()
    {
        return $this->requisitos;
    }

    public function setConocimientos($conocimientos_)
    {
        $this->conocimientos = Validation::validate( $conocimientos_ );
    }

    public function getConocimientos()
    {
        return $this->conocimientos;
    }

    public function setSalario($salario_)
    {
        $this->salario = Validation::validate( $salario_ );
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setNombrecontacto($nombrecontacto_)
    {
        $this->nombrecontacto = Validation::validate( $nombrecontacto_ );
    }

    public function getNombrecontacto()
    {
        return $this->nombrecontacto;
    }

    public function setTelefonocontacto($telefonocontacto_)
    {
        $this->telefonocontacto = Validation::validate( $telefonocontacto_ );
    }

    public function getTelefonocontacto()
    {
        return $this->telefonocontacto;
    }

    public function setEmailcontacto($emailcontacto_)
    {
        $this->emailcontacto = Validation::validate( $emailcontacto_ );
    }

    public function getEmailcontacto()
    {
        return $this->emailcontacto;
    }

    public function setOrden($orden_)
    {
        $this->orden = Validation::validate( $orden_ );
    }

    public function getOrden()
    {
        return $this->orden;
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
