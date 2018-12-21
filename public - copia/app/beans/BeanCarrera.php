<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanCarrera{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $descripcion;
    private $slide;
    private $imagen;
    private $presentacion;
    private $porque;
    private $donde;
    private $certificacion;
    private $titulos;
    private $inversion;
    private $titulacion;
    private $detalleduracion;
    private $detalledia;
    private $detallehorario;
    private $detallelugar;
    private $detalleprecio;
    private $detalleequipos;
    private $detalleconsultas;
    private $detalledirigido;
    private $aquien;
    private $temas;
    private $nombreseo;
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

    public function setDetalleduracion($detalleduracion_)
    {
        $this->detalleduracion = Validation::validate( $detalleduracion_ );
    }

    public function getDetalleduracion()
    {
        return $this->detalleduracion;
    }

    public function setDetalledia($detalledia_)
    {
        $this->detalledia = Validation::validate( $detalledia_ );
    }

    public function getDetalledia()
    {
        return $this->detalledia;
    }

    public function setDetallehorario($detallehorario_)
    {
        $this->detallehorario = Validation::validate( $detallehorario_ );
    }

    public function getDetallehorario()
    {
        return $this->detallehorario;
    }

    public function setDetallelugar($detallelugar_)
    {
        $this->detallelugar = Validation::validate( $detallelugar_ );
    }

    public function getDetallelugar()
    {
        return $this->detallelugar;
    }

    public function setDetalleprecio($detalleprecio_)
    {
        $this->detalleprecio = Validation::validate( $detalleprecio_ );
    }

    public function getDetalleprecio()
    {
        return $this->detalleprecio;
    }

    public function setDetalleequipos($detalleequipos_)
    {
        $this->detalleequipos = Validation::validate( $detalleequipos_ );
    }

    public function getDetalleequipos()
    {
        return $this->detalleequipos;
    }

    public function setDetalleconsultas($detalleconsultas_)
    {
        $this->detalleconsultas = Validation::validate( $detalleconsultas_ );
    }

    public function getDetalleconsultas()
    {
        return $this->detalleconsultas;
    }

    public function setDetalledirigido($detalledirigido_)
    {
        $this->detalledirigido = Validation::validate( $detalledirigido_ );
    }

    public function getDetalledirigido()
    {
        return $this->detalledirigido;
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

}
?>