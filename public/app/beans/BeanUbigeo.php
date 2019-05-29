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
  private $ubigeo_id;
  private $codigo;
  private $nombre;
  private $descripcion = "";
  private $ubigeo_id_padre = 0;
  private $pais_id = 1 ;
  private $region_id;
  private $tipo = 1;
  private $estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setUbigeoId($ubigeo_id_)
  {
    $this->ubigeo_id = Validation::validate( $ubigeo_id_ );
  }

  public function getUbigeoId()
  {
    return $this->ubigeo_id;
  }

  public function setCodigo($codigo_)
  {
    $this->codigo = Validation::validate( $codigo_ );
  }

  public function getCodigo()
  {
    return $this->codigo;
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

  public function setRegionId($region_id_)
  {
    $this->region_id = Validation::validate( $region_id_ );
  }

  public function getRegionId()
  {
    return $this->region_id;
  }

  public function setTipo($tipo_)
  {
    $this->tipo = Validation::validate( $tipo_ );
  }

  public function getTipo()
  {
    return $this->tipo;
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
