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
    private $jerarquia;
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

    public function setJerarquia($jerarquia_)
    {
        $this->jerarquia = Validation::validate( $jerarquia_ );
    }

    public function getJerarquia()
    {
        return $this->jerarquia;
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
