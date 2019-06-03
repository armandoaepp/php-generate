<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPaqueteConvenio{
  # Constructor
  public function __construct(){}

  # Atributos
  private $paquete_convenio_id;
  private $paquete_id;
  private $convenio_id;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setPaqueteConvenioId($paquete_convenio_id_)
  {
    $this->paquete_convenio_id = Validation::validate( $paquete_convenio_id_ );
  }

  public function getPaqueteConvenioId()
  {
    return $this->paquete_convenio_id;
  }

  public function setPaqueteId($paquete_id_)
  {
    $this->paquete_id = Validation::validate( $paquete_id_ );
  }

  public function getPaqueteId()
  {
    return $this->paquete_id;
  }

  public function setConvenioId($convenio_id_)
  {
    $this->convenio_id = Validation::validate( $convenio_id_ );
  }

  public function getConvenioId()
  {
    return $this->convenio_id;
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
