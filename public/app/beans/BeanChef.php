<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanChef{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $nombre;
    private $apellidos;
    private $cargo;
    private $resumen;
    private $descripcion;
    private $imagen = "" ;
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

    public function setNombre($nombre_)
    {
        $this->nombre = Validation::validate( $nombre_ );
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setApellidos($apellidos_)
    {
        $this->apellidos = Validation::validate( $apellidos_ );
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setCargo($cargo_)
    {
        $this->cargo = Validation::validate( $cargo_ );
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setResumen($resumen_)
    {
        $this->resumen = Validation::validate( $resumen_ );
    }

    public function getResumen()
    {
        return $this->resumen;
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
