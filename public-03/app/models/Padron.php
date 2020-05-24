<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Padron extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM padron; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_padron)
  {
    try{

      $padron_id        = $bean_padron->getPadronId();
      $codigo           = $bean_padron->getCodigo();
      $dni              = $bean_padron->getDni();
      $apellido_paterno = $bean_padron->getApellidoPaterno();
      $apellido_materno = $bean_padron->getApellidoMaterno();
      $nombres          = $bean_padron->getNombres();
      $fecha_nac        = $bean_padron->getFechaNac();
      $distrito_id      = $bean_padron->getDistritoId();
      $caserio_id       = $bean_padron->getCaserioId();
      $sector_id        = $bean_padron->getSectorId();
      $telefono         = $bean_padron->getTelefono();
      $email            = $bean_padron->getEmail();
      $direccion        = $bean_padron->getDireccion();
      $referencia       = $bean_padron->getReferencia();
      $tipo_vivienda_id = $bean_padron->getTipoViviendaId();
      $num_personas     = $bean_padron->getNumPersonas();
      $imagen           = $bean_padron->getImagen();
      $estado           = $bean_padron->getEstado();
      $created_at       = $bean_padron->getCreatedAt();

      $this->query = "INSERT INTO padron
                      (
                        codigo,
                        dni,
                        apellido_paterno,
                        apellido_materno,
                        nombres,
                        fecha_nac,
                        distrito_id,
                        caserio_id,
                        sector_id,
                        telefono,
                        email,
                        direccion,
                        referencia,
                        tipo_vivienda_id,
                        num_personas,
                        imagen,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$codigo',
                        '$dni',
                        '$apellido_paterno',
                        '$apellido_materno',
                        '$nombres',
                        '$fecha_nac',
                        '$distrito_id',
                        '$caserio_id',
                        '$sector_id',
                        '$telefono',
                        '$email',
                        '$direccion',
                        '$referencia',
                        '$tipo_vivienda_id',
                        '$num_personas',
                        '$imagen',
                        '$estado',
                        $created_at
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_padron)
  {
    try{
      $padron_id        = $bean_padron->getPadronId();
      $codigo           = $bean_padron->getCodigo();
      $dni              = $bean_padron->getDni();
      $apellido_paterno = $bean_padron->getApellidoPaterno();
      $apellido_materno = $bean_padron->getApellidoMaterno();
      $nombres          = $bean_padron->getNombres();
      $fecha_nac        = $bean_padron->getFechaNac();
      $distrito_id      = $bean_padron->getDistritoId();
      $caserio_id       = $bean_padron->getCaserioId();
      $sector_id        = $bean_padron->getSectorId();
      $telefono         = $bean_padron->getTelefono();
      $email            = $bean_padron->getEmail();
      $direccion        = $bean_padron->getDireccion();
      $referencia       = $bean_padron->getReferencia();
      $tipo_vivienda_id = $bean_padron->getTipoViviendaId();
      $num_personas     = $bean_padron->getNumPersonas();
      $imagen           = $bean_padron->getImagen();

      $this->query = "UPDATE padron SET
                        codigo = '$codigo',
                        dni = '$dni',
                        apellido_paterno = '$apellido_paterno',
                        apellido_materno = '$apellido_materno',
                        nombres = '$nombres',
                        fecha_nac = '$fecha_nac',
                        distrito_id = '$distrito_id',
                        caserio_id = '$caserio_id',
                        sector_id = '$sector_id',
                        telefono = '$telefono',
                        email = '$email',
                        direccion = '$direccion',
                        referencia = '$referencia',
                        tipo_vivienda_id = '$tipo_vivienda_id',
                        num_personas = '$num_personas',
                        imagen = '$imagen'
                      WHERE padron_id = '$padron_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_padron)
  {
    try{
      $padron_id = $bean_padron->getPadronId();

      $this->query = "SELECT * FROM padron WHERE padron_id = '$padron_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_padron)
  {
    try{
      $padron_id = $bean_padron->getPadronId();

      $this->query = "DELETE FROM padron
                      WHERE padron_id = '$padron_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_padron)
  {
    try{
      $estado = $bean_padron->getEstado() ;

      $this->query = "SELECT * FROM padron
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_padron)
  {
    try{
      $padron_id = $bean_padron->getPadronId();
      $estado = $bean_padron->getEstado();

      $this->query = "UPDATE padron SET
                        estado = '$estado'
                      WHERE padron_id='$padron_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
