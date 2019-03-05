<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanCarrera{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $descripcion;
    private $slide;
    private $imagen = "" ;
    private $presentacion;
    private $porque;
    private $donde;
    private $certificacion;
    private $titulos;
    private $inversion;
    private $titulacion;
    private $duracion;
    private $dia;
    private $horario;
    private $lugar;
    private $precio;
    private $equipos;
    private $consultas;
    private $dirigido;
    private $aquien;
    private $temas;
    private $url = "" ;
    private $item;
    private $publicar = "S" ;
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

    public function setTitulo($titulo_)
    {
        $this->titulo = Validation::validate( $titulo_ );
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setDescripcion($descripcion_)
    {
        $this->descripcion = Validation::validate( $descripcion_ );
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setSlide($slide_)
    {
        $this->slide = Validation::validate( $slide_ );
    }

    public function getSlide()
    {
        return $this->slide;
    }

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setPresentacion($presentacion_)
    {
        $this->presentacion = Validation::validate( $presentacion_ );
    }

    public function getPresentacion()
    {
        return $this->presentacion;
    }

    public function setPorque($porque_)
    {
        $this->porque = Validation::validate( $porque_ );
    }

    public function getPorque()
    {
        return $this->porque;
    }

    public function setDonde($donde_)
    {
        $this->donde = Validation::validate( $donde_ );
    }

    public function getDonde()
    {
        return $this->donde;
    }

    public function setCertificacion($certificacion_)
    {
        $this->certificacion = Validation::validate( $certificacion_ );
    }

    public function getCertificacion()
    {
        return $this->certificacion;
    }

    public function setTitulos($titulos_)
    {
        $this->titulos = Validation::validate( $titulos_ );
    }

    public function getTitulos()
    {
        return $this->titulos;
    }

    public function setInversion($inversion_)
    {
        $this->inversion = Validation::validate( $inversion_ );
    }

    public function getInversion()
    {
        return $this->inversion;
    }

    public function setTitulacion($titulacion_)
    {
        $this->titulacion = Validation::validate( $titulacion_ );
    }

    public function getTitulacion()
    {
        return $this->titulacion;
    }

    public function setDuracion($duracion_)
    {
        $this->duracion = Validation::validate( $duracion_ );
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function setDia($dia_)
    {
        $this->dia = Validation::validate( $dia_ );
    }

    public function getDia()
    {
        return $this->dia;
    }

    public function setHorario($horario_)
    {
        $this->horario = Validation::validate( $horario_ );
    }

    public function getHorario()
    {
        return $this->horario;
    }

    public function setLugar($lugar_)
    {
        $this->lugar = Validation::validate( $lugar_ );
    }

    public function getLugar()
    {
        return $this->lugar;
    }

    public function setPrecio($precio_)
    {
        $this->precio = Validation::validate( $precio_ );
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setEquipos($equipos_)
    {
        $this->equipos = Validation::validate( $equipos_ );
    }

    public function getEquipos()
    {
        return $this->equipos;
    }

    public function setConsultas($consultas_)
    {
        $this->consultas = Validation::validate( $consultas_ );
    }

    public function getConsultas()
    {
        return $this->consultas;
    }

    public function setDirigido($dirigido_)
    {
        $this->dirigido = Validation::validate( $dirigido_ );
    }

    public function getDirigido()
    {
        return $this->dirigido;
    }

    public function setAquien($aquien_)
    {
        $this->aquien = Validation::validate( $aquien_ );
    }

    public function getAquien()
    {
        return $this->aquien;
    }

    public function setTemas($temas_)
    {
        $this->temas = Validation::validate( $temas_ );
    }

    public function getTemas()
    {
        return $this->temas;
    }

    public function setUrl($url_)
    {
        $this->url = Validation::validate( $url_ );
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setItem($item_)
    {
        $this->item = Validation::validate( $item_ );
    }

    public function getItem()
    {
        return $this->item;
    }

    public function setPublicar($publicar_)
    {
        $this->publicar = Validation::validate( $publicar_ );
    }

    public function getPublicar()
    {
        return $this->publicar;
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
