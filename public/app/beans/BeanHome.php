<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanHome{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $titulo;
    private $url = "" ;
    private $imagen = "" ;
    private $titulo_2;
    private $url_2;
    private $imagen_2;
    private $titulo_3;
    private $url_3;
    private $imagen_3;
    private $convenios;
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

    public function setUrl($url_)
    {
        $this->url = Validation::validate( $url_ );
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setImagen($imagen_)
    {
        $this->imagen = Validation::validate( $imagen_ );
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function setTitulo2($titulo_2_)
    {
        $this->titulo_2 = Validation::validate( $titulo_2_ );
    }

    public function getTitulo2()
    {
        return $this->titulo_2;
    }

    public function setUrl2($url_2_)
    {
        $this->url_2 = Validation::validate( $url_2_ );
    }

    public function getUrl2()
    {
        return $this->url_2;
    }

    public function setImagen2($imagen_2_)
    {
        $this->imagen_2 = Validation::validate( $imagen_2_ );
    }

    public function getImagen2()
    {
        return $this->imagen_2;
    }

    public function setTitulo3($titulo_3_)
    {
        $this->titulo_3 = Validation::validate( $titulo_3_ );
    }

    public function getTitulo3()
    {
        return $this->titulo_3;
    }

    public function setUrl3($url_3_)
    {
        $this->url_3 = Validation::validate( $url_3_ );
    }

    public function getUrl3()
    {
        return $this->url_3;
    }

    public function setImagen3($imagen_3_)
    {
        $this->imagen_3 = Validation::validate( $imagen_3_ );
    }

    public function getImagen3()
    {
        return $this->imagen_3;
    }

    public function setConvenios($convenios_)
    {
        $this->convenios = Validation::validate( $convenios_ );
    }

    public function getConvenios()
    {
        return $this->convenios;
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
