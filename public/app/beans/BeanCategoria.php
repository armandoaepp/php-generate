<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanCategoria{
    # Constructor
    public function __construct(){}

    # Atributos
    private $idcategoria;
    private $nombre;
    private $descripcion;
    private $visible;
    private $fechareg;
    private $url = "" ;
    private $imagen = "" ;
    private $publicar = "S" ;
    private $estado = 1 ;
    private $created_up = NULL ;

    # METODOS
    public function setIdcategoria($idcategoria_)
    {
        $this->idcategoria = Validation::validate( $idcategoria_ );
    }

    public function getIdcategoria()
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

    public function setDescripcion($descripcion_)
    {
        $this->descripcion = Validation::validate( $descripcion_ );
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setVisible($visible_)
    {
        $this->visible = Validation::validate( $visible_ );
    }

    public function getVisible()
    {
        return $this->visible;
    }

    public function setFechareg($fechareg_)
    {
        $this->fechareg = Validation::validate( $fechareg_ );
    }

    public function getFechareg()
    {
        return $this->fechareg;
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

    public function setCreatedUp($created_up_)
    {
        $this->created_up = Validation::validate( $created_up_ );
    }

    public function getCreatedUp()
    {
        return $this->created_up;
    }

}
