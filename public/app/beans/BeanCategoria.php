<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanCategoria{
  # Constructor
  public function __construct(){}

  # Atributos
  private $categoria_id;
  private $cat_nombre;
  private $cat_imagen = "" ;
  private $cat_publicar = "S" ;
  private $cat_estado = 1 ;

  #Auto Increment Item

  # METODOS
  public function setCategoriaId($categoria_id_)
  {
    $this->categoria_id = Validation::validate( $categoria_id_ );
  }

  public function getCategoriaId()
  {
    return $this->categoria_id;
  }

  public function setCatNombre($cat_nombre_)
  {
    $this->cat_nombre = Validation::validate( $cat_nombre_ );
  }

  public function getCatNombre()
  {
    return $this->cat_nombre;
  }

  public function setCatImagen($cat_imagen_)
  {
    $this->cat_imagen = Validation::validate( $cat_imagen_ );
  }

  public function getCatImagen()
  {
    return $this->cat_imagen;
  }

  public function setCatPublicar($cat_publicar_)
  {
    $this->cat_publicar = Validation::validate( $cat_publicar_ );
  }

  public function getCatPublicar()
  {
    return $this->cat_publicar;
  }

  public function setCatEstado($cat_estado_)
  {
    $this->cat_estado = Validation::validate( $cat_estado_ );
  }

  public function getCatEstado()
  {
    return $this->cat_estado;
  }

}
