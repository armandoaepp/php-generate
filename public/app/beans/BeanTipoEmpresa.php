<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanTipoEmpresa{
    # Constructor
    public function __construct(){}

    # Atributos
    private $tipo_empresa_id;
    private $descripcion;
    private $glosa;
    private $estado = 1 ;
    private $created_up = NULL ;

    # METODOS
    public function setTipoEmpresaId($tipo_empresa_id_)
    {
        $this->tipo_empresa_id = Validation::validate( $tipo_empresa_id_ );
    }

    public function getTipoEmpresaId()
    {
        return $this->tipo_empresa_id;
    }

    public function setDescripcion($descripcion_)
    {
        $this->descripcion = Validation::validate( $descripcion_ );
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function setGlosa($glosa_)
    {
        $this->glosa = Validation::validate( $glosa_ );
    }

    public function getGlosa()
    {
        return $this->glosa;
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
