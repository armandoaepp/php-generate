<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanEtiqueta{
  # Constructor
  public function __construct(){}

  # Atributos
  private $etiqueta_id;
  private $eti_descripcion;
  private $eti_publicar = "S" ;
  private $eti_estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setEtiquetaId($etiqueta_id_)
  {
    $this->etiqueta_id = Validation::validate( $etiqueta_id_ );
  }

  public function getEtiquetaId()
  {
    return $this->etiqueta_id;
  }

  public function setEtiDescripcion($eti_descripcion_)
  {
    $this->eti_descripcion = Validation::validate( $eti_descripcion_ );
  }

  public function getEtiDescripcion()
  {
    return $this->eti_descripcion;
  }

  public function setEtiPublicar($eti_publicar_)
  {
    $this->eti_publicar = Validation::validate( $eti_publicar_ );
  }

  public function getEtiPublicar()
  {
    return $this->eti_publicar;
  }

  public function setEtiEstado($eti_estado_)
  {
    $this->eti_estado = Validation::validate( $eti_estado_ );
  }

  public function getEtiEstado()
  {
    return $this->eti_estado;
  }

}
