<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanNoticia{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $tipo_noticia_id;    
    private $titulo;
    private $descripcion;
    private $imagen = "" ;
    private $url = "" ;
    private $item = 0;
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

    public function setTipoNoticiaId($tipo_noticia_id_)
    {
        $this->tipo_noticia_id = Validation::validate( $tipo_noticia_id_ );
    }

    public function getTipoNoticiaId()
    {
        return $this->tipo_noticia_id;
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
