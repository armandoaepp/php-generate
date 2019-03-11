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
  private $id;
  private $nombre;
  private $url = "" ;
  private $imagen = "" ;
  private $publicar = "S" ;
  private $estado = 1 ;
  private $created_up = NULL ;

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

  public function setNombre($nombre_)
  {
    $this->nombre = Validation::validate( $nombre_ );
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setUrl($url_)
  {
    $this->url = Validation::validate( $url_ );
  }

  public function getUrl()
  {
    return $this->url;
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
    if(empty($this->created_up))
    {
      $this->created_up = HelperDate::timestampsBd();
    }
    return $this->created_up;
  }

}
