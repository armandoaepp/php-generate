<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPlan{
  # Constructor
  public function __construct(){}

  # Atributos
  private $id;
  private $nombre;
  private $espacio;
  private $num_databases;
  private $num_mails;
  private $estado = 1 ;
  private $created_at;
  private $updated_at;

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

  public function setEspacio($espacio_)
  {
    $this->espacio = Validation::validate( $espacio_ );
  }

  public function getEspacio()
  {
    return $this->espacio;
  }

  public function setNumDatabases($num_databases_)
  {
    $this->num_databases = Validation::validate( $num_databases_ );
  }

  public function getNumDatabases()
  {
    return $this->num_databases;
  }

  public function setNumMails($num_mails_)
  {
    $this->num_mails = Validation::validate( $num_mails_ );
  }

  public function getNumMails()
  {
    return $this->num_mails;
  }

  public function setEstado($estado_)
  {
    $this->estado = Validation::validate( $estado_ );
  }

  public function getEstado()
  {
    return $this->estado;
  }

  public function setCreatedAt($created_at_)
  {
    $this->created_at = Validation::validate( $created_at_ );
  }

  public function getCreatedAt()
  {
    return $this->created_at;
  }

  public function setUpdatedAt($updated_at_)
  {
    $this->updated_at = Validation::validate( $updated_at_ );
  }

  public function getUpdatedAt()
  {
    return $this->updated_at;
  }

}
