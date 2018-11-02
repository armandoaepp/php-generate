<?php 
# Clase Bean Generada - ByPower @armandoaepp 
class BeanCategoria{
    # Constructor
    public function __construct(){}

    # Atributos
    private $idcategoria;
    private $nombre;
    private $url = "" ;
    private $imagen = "" ;
    private $publicar = "S" ;
    private $estado = 1 ;
    private $created_up = NULL ;

    # METODOS
    public function setId($idcategoria_)
    {
        $this->idcategoria = Validation::validate( $idcategoria_ );
    }

    public function getId()
    {
        return $this->idcategoria;
    }

    public function setNombre($nombre_)
    {
        $this->nombre = Validation::validate( $nombre_ );
    }

    public function getNombre()
    {
        return $this->nombre;
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

    public function setFecha($created_up_)
    {
        $this->created_up = Validation::validate( $created_up_ );
    }

    public function getFecha()
    {
        return $this->created_up;
    }

}
?>