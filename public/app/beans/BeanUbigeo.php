<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanUbigeo{
  # Constructor
  public function __construct(){}

  # Atributos
  private $id;
  private $codigo;
  private $ubigeo;
  private $descripcion;
  private $ubigeo_id_padre;
  private $pais_id;
  private $tipo_ubigeo_id;
  private $region_id;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setId($id_)
  {
    $this->id = Validation::validate( $id_ );
  }

  public function getId()
  {
    return $this->id;
  }

  public function setCodigo($codigo_)
  {
    $this->codigo = Validation::validate( $codigo_ );
  }

  public function getCodigo()
  {
    return $this->codigo;
  }

  public function setUbigeo($ubigeo_)
  {
    $this->ubigeo = Validation::validate( $ubigeo_ );
  }

  public function getUbigeo()
  {
    return $this->ubigeo;
  }

  public function setDescripcion($descripcion_)
  {
    $this->descripcion = Validation::validate( $descripcion_ );
  }

  public function getDescripcion()
  {
    return $this->descripcion;
  }

  public function setUbigeoIdPadre($ubigeo_id_padre_)
  {
    $this->ubigeo_id_padre = Validation::validate( $ubigeo_id_padre_ );
  }

  public function getUbigeoIdPadre()
  {
    return $this->ubigeo_id_padre;
  }

  public function setPaisId($pais_id_)
  {
    $this->pais_id = Validation::validate( $pais_id_ );
  }

  public function getPaisId()
  {
    return $this->pais_id;
  }

  public function setTipoUbigeoId($tipo_ubigeo_id_)
  {
    $this->tipo_ubigeo_id = Validation::validate( $tipo_ubigeo_id_ );
  }

  public function getTipoUbigeoId()
  {
    return $this->tipo_ubigeo_id;
  }

  public function setRegionId($region_id_)
  {
    $this->region_id = Validation::validate( $region_id_ );
  }

  public function getRegionId()
  {
    return $this->region_id;
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
