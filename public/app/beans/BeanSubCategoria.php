<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanSubCategoria{
  # Constructor
  public function __construct(){}

  # Atributos
  private $sub_categoria_id;
  private $categoria_id;
  private $sc_nombre;
  private $sc_imagen = "" ;
  private $sc_publicar = "S" ;
  private $sc_estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setSubCategoriaId($sub_categoria_id_)
  {
    $this->sub_categoria_id = Validation::validate( $sub_categoria_id_ );
  }

  public function getSubCategoriaId()
  {
    return $this->sub_categoria_id;
  }

  public function setCategoriaId($categoria_id_)
  {
    $this->categoria_id = Validation::validate( $categoria_id_ );
  }

  public function getCategoriaId()
  {
    return $this->categoria_id;
  }

  public function setScNombre($sc_nombre_)
  {
    $this->sc_nombre = Validation::validate( $sc_nombre_ );
  }

  public function getScNombre()
  {
    return $this->sc_nombre;
  }

  public function setScImagen($sc_imagen_)
  {
    $this->sc_imagen = Validation::validate( $sc_imagen_ );
  }

  public function getScImagen()
  {
    return $this->sc_imagen;
  }

  public function setScPublicar($sc_publicar_)
  {
    $this->sc_publicar = Validation::validate( $sc_publicar_ );
  }

  public function getScPublicar()
  {
    return $this->sc_publicar;
  }

  public function setScEstado($sc_estado_)
  {
    $this->sc_estado = Validation::validate( $sc_estado_ );
  }

  public function getScEstado()
  {
    return $this->sc_estado;
  }

}
