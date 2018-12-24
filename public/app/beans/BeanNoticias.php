<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanNoticias{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $descripcion;
    private $imagen = "" ;
    private $banner;
    private $nombreseo;
    private $orden;
    private $estado = 1 ;
    private $fecha;
    private $activo;

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

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setBanner($banner_)
    {
        $this->banner = Validation::validate( $banner_ );
    }

    public function getBanner()
    {
        return $this->banner;
    }

    public function setNombreseo($nombreseo_)
    {
        $this->nombreseo = Validation::validate( $nombreseo_ );
    }

    public function getNombreseo()
    {
        return $this->nombreseo;
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

    public function setActivo($activo_)
    {
        $this->activo = Validation::validate( $activo_ );
    }

    public function getActivo()
    {
        return $this->activo;
    }

}
