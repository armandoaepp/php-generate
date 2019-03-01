<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanNoticiaImg{
    # Constructor
    public function __construct(){}

    # Atributos
    private $id;
    private $noticia_id;
    private $imagen = "" ;
    private $item;
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

    public function setNoticiaId($noticia_id_)
    {
        $this->noticia_id = Validation::validate( $noticia_id_ );
    }

    public function getNoticiaId()
    {
        return $this->noticia_id;
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
