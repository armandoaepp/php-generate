<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanTipoConvenio{
  # Constructor
  public function __construct(){}

  # Atributos
  private $tipo_convenio_id;
  private $desc_convenio;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setTipoConvenioId($tipo_convenio_id_)
  {
    $this->tipo_convenio_id = Validation::validate( $tipo_convenio_id_ );
  }

  public function getTipoConvenioId()
  {
    return $this->tipo_convenio_id;
  }

  public function setDescConvenio($desc_convenio_)
  {
    $this->desc_convenio = Validation::validate( $desc_convenio_ );
  }

  public function getDescConvenio()
  {
    return $this->desc_convenio;
  }

  public function setEstado($estado_)
  {
    $this->estado = Validation::validate( $estado_ );
  }

  public function getEstado()
  {
    return $this->estado;
  }

}
