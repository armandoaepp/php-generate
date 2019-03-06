<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanEmpresa{
    # Constructor
    public function __construct(){}

    # Atributos
    private $empresa_id;
    private $tipo_empresa_id;
    private $nombre;
    private $descripcion;
    private $imagen = "" ;
    private $publicar = "S" ;
    private $estado = 1 ;
    private $created_up = NULL ;

    # METODOS
    public function setEmpresaId($empresa_id_)
    {
        $this->empresa_id = Validation::validate( $empresa_id_ );
    }

    public function getEmpresaId()
    {
        return $this->empresa_id;
    }

    public function setTipoEmpresaId($tipo_empresa_id_)
    {
        $this->tipo_empresa_id = Validation::validate( $tipo_empresa_id_ );
    }

    public function getTipoEmpresaId()
    {
        return $this->tipo_empresa_id;
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
