<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanTaller{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $chef_id;
    private $titulo;
    private $descripcion;
    private $imagen = "" ;
    private $certificacion;
    private $titulos;
    private $titulacion;
    private $duracion;
    private $dia;
    private $horario;
    private $lugar;
    private $precio;
    private $dirigido;
    private $sesiones;
    private $temas;
    private $url = "" ;
    private $item;
    private $glosa;
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

    public function setChefId($chef_id_)
    {
        $this->chef_id = Validation::validate( $chef_id_ );
    }

    public function getChefId()
    {
        return $this->chef_id;
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

    public function setDirigido($dirigido_)
    {
        $this->dirigido = Validation::validate( $dirigido_ );
    }

    public function getDirigido()
    {
        return $this->dirigido;
    }

    public function setSesiones($sesiones_)
    {
        $this->sesiones = Validation::validate( $sesiones_ );
    }

    public function getSesiones()
    {
        return $this->sesiones;
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

    public function setGlosa($glosa_)
    {
        $this->glosa = Validation::validate( $glosa_ );
    }

    public function getGlosa()
    {
        return $this->glosa;
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
