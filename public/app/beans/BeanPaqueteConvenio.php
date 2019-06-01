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
  private $paquete_paquete_id;
  private $convenio_convenio_id;
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

  public function setPaquetePaqueteId($paquete_paquete_id_)
  {
    $this->paquete_paquete_id = Validation::validate( $paquete_paquete_id_ );
  }

  public function getPaquetePaqueteId()
  {
    return $this->paquete_paquete_id;
  }

  public function setConvenioConvenioId($convenio_convenio_id_)
  {
    $this->convenio_convenio_id = Validation::validate( $convenio_convenio_id_ );
  }

  public function getConvenioConvenioId()
  {
    return $this->convenio_convenio_id;
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
