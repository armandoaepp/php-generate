<?php 

/**
 * [Class Bean Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class BeanPadron{
  # Constructor
  public function __construct(){}

  # Atributos
  private $padron_id;
  private $codigo;
  private $dni;
  private $apellido_paterno;
  private $apellido_materno;
  private $nombres;
  private $fecha_nac;
  private $distrito_id;
  private $caserio_id;
  private $sector_id;
  private $telefono;
  private $email;
  private $direccion;
  private $referencia;
  private $tipo_vivienda_id;
  private $num_personas;
  private $imagen = "" ;
  private $estado = 1 ;
  private $created_at = NULL ;

  #Auto Increment Item

  # METODOS
  public function setPadronId($padron_id_)
  {
    $this->padron_id = Validation::validate( $padron_id_ );
  }

  public function getPadronId()
  {
    return $this->padron_id;
  }

  public function setCodigo($codigo_)
  {
    $this->codigo = Validation::validate( $codigo_ );
  }

  public function getCodigo()
  {
    return $this->codigo;
  }

  public function setDni($dni_)
  {
    $this->dni = Validation::validate( $dni_ );
  }

  public function getDni()
  {
    return $this->dni;
  }

  public function setApellidoPaterno($apellido_paterno_)
  {
    $this->apellido_paterno = Validation::validate( $apellido_paterno_ );
  }

  public function getApellidoPaterno()
  {
    return $this->apellido_paterno;
  }

  public function setApellidoMaterno($apellido_materno_)
  {
    $this->apellido_materno = Validation::validate( $apellido_materno_ );
  }

  public function getApellidoMaterno()
  {
    return $this->apellido_materno;
  }

  public function setNombres($nombres_)
  {
    $this->nombres = Validation::validate( $nombres_ );
  }

  public function getNombres()
  {
    return $this->nombres;
  }

  public function setFechaNac($fecha_nac_)
  {
    $this->fecha_nac = Validation::validate( $fecha_nac_ );
  }

  public function getFechaNac()
  {
    return $this->fecha_nac;
  }

  public function setDistritoId($distrito_id_)
  {
    $this->distrito_id = Validation::validate( $distrito_id_ );
  }

  public function getDistritoId()
  {
    return $this->distrito_id;
  }

  public function setCaserioId($caserio_id_)
  {
    $this->caserio_id = Validation::validate( $caserio_id_ );
  }

  public function getCaserioId()
  {
    return $this->caserio_id;
  }

  public function setSectorId($sector_id_)
  {
    $this->sector_id = Validation::validate( $sector_id_ );
  }

  public function getSectorId()
  {
    return $this->sector_id;
  }

  public function setTelefono($telefono_)
  {
    $this->telefono = Validation::validate( $telefono_ );
  }

  public function getTelefono()
  {
    return $this->telefono;
  }

  public function setEmail($email_)
  {
    $this->email = Validation::validate( $email_ );
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setDireccion($direccion_)
  {
    $this->direccion = Validation::validate( $direccion_ );
  }

  public function getDireccion()
  {
    return $this->direccion;
  }

  public function setReferencia($referencia_)
  {
    $this->referencia = Validation::validate( $referencia_ );
  }

  public function getReferencia()
  {
    return $this->referencia;
  }

  public function setTipoViviendaId($tipo_vivienda_id_)
  {
    $this->tipo_vivienda_id = Validation::validate( $tipo_vivienda_id_ );
  }

  public function getTipoViviendaId()
  {
    return $this->tipo_vivienda_id;
  }

  public function setNumPersonas($num_personas_)
  {
    $this->num_personas = Validation::validate( $num_personas_ );
  }

  public function getNumPersonas()
  {
    return $this->num_personas;
  }

  public function setImagen($imagen_)
  {
    $this->imagen = Validation::validate( $imagen_ );
  }

  public function getImagen()
  {
    return $this->imagen;
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
    if(empty($this->created_at))
    {
      $this->created_at = HelperDate::timestampsBd();
    }
    return $this->created_at;
  }

}
