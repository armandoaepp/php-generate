<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanMensaje{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $imagen;
    private $descripcion;
    private $descripcion_2;
    private $slogan;
    private $mision;
    private $vision;
    private $orden;
    private $estado;
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

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setDescripcion($descripcion_)
    {
        $this->descripcion = Validation::validate( $descripcion_ );
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setDescripcion2($descripcion_2_)
    {
        $this->descripcion_2 = Validation::validate( $descripcion_2_ );
    }

    public function getDescripcion2()
    {
        return $this->descripcion_2;
    }

    public function setSlogan($slogan_)
    {
        $this->slogan = Validation::validate( $slogan_ );
    }

    public function getSlogan()
    {
        return $this->slogan;
    }

    public function setMision($mision_)
    {
        $this->mision = Validation::validate( $mision_ );
    }

    public function getMision()
    {
        return $this->mision;
    }

    public function setVision($vision_)
    {
        $this->vision = Validation::validate( $vision_ );
    }

    public function getVision()
    {
        return $this->vision;
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
?>