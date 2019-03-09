<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class OportunidadLaboral extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT
                        oportunidad_laboral.* ,
                        empresa.nombre AS empresa
                      FROM oportunidad_laboral
                      INNER JOIN empresa ON empresa.empresa_id = oportunidad_laboral.empresa_id ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_oportunidad_laboral)
  {
    try{

      $id               = $bean_oportunidad_laboral->getId();
      $empresa_id       = $bean_oportunidad_laboral->getEmpresaId();
      $titulo           = $bean_oportunidad_laboral->getTitulo();
      $tipo             = $bean_oportunidad_laboral->getTipo();
      $vacantes         = $bean_oportunidad_laboral->getVacantes();
      $requisitos       = $bean_oportunidad_laboral->getRequisitos();
      $conocimientos    = $bean_oportunidad_laboral->getConocimientos();
      $salario          = $bean_oportunidad_laboral->getSalario();
      $nombrecontacto   = $bean_oportunidad_laboral->getNombrecontacto();
      $telefonocontacto = $bean_oportunidad_laboral->getTelefonocontacto();
      $emailcontacto    = $bean_oportunidad_laboral->getEmailcontacto();
      $item             = $bean_oportunidad_laboral->getItem();
      $publicar         = $bean_oportunidad_laboral->getPublicar();
      $estado           = $bean_oportunidad_laboral->getEstado();
      $created_up       = $bean_oportunidad_laboral->getCreatedUp();

      $this->query = "INSERT INTO oportunidad_laboral
                      (
                        empresa_id,
                        titulo,
                        tipo,
                        vacantes,
                        requisitos,
                        conocimientos,
                        salario,
                        nombrecontacto,
                        telefonocontacto,
                        emailcontacto,
                        item,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$empresa_id',
                        '$titulo',
                        '$tipo',
                        '$vacantes',
                        '$requisitos',
                        '$conocimientos',
                        '$salario',
                        '$nombrecontacto',
                        '$telefonocontacto',
                        '$emailcontacto',
                        '$item',
                        '$publicar',
                        '$estado',
                        $created_up
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_oportunidad_laboral)
  {
    try{
      $id               = $bean_oportunidad_laboral->getId();
      $empresa_id       = $bean_oportunidad_laboral->getEmpresaId();
      $titulo           = $bean_oportunidad_laboral->getTitulo();
      $tipo             = $bean_oportunidad_laboral->getTipo();
      $vacantes         = $bean_oportunidad_laboral->getVacantes();
      $requisitos       = $bean_oportunidad_laboral->getRequisitos();
      $conocimientos    = $bean_oportunidad_laboral->getConocimientos();
      $salario          = $bean_oportunidad_laboral->getSalario();
      $nombrecontacto   = $bean_oportunidad_laboral->getNombrecontacto();
      $telefonocontacto = $bean_oportunidad_laboral->getTelefonocontacto();
      $emailcontacto    = $bean_oportunidad_laboral->getEmailcontacto();
      // $item             = $bean_oportunidad_laboral->getItem();
      $publicar         = $bean_oportunidad_laboral->getPublicar();

      $this->query = "UPDATE oportunidad_laboral SET
                        empresa_id = '$empresa_id',
                        titulo = '$titulo',
                        tipo = '$tipo',
                        vacantes = '$vacantes',
                        requisitos = '$requisitos',
                        conocimientos = '$conocimientos',
                        salario = '$salario',
                        nombrecontacto = '$nombrecontacto',
                        telefonocontacto = '$telefonocontacto',
                        emailcontacto = '$emailcontacto',
                        publicar = '$publicar'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_oportunidad_laboral)
  {
    try{
      $id = $bean_oportunidad_laboral->getId();

      // $this->query = "SELECT * FROM oportunidad_laboral WHERE id = '$id' LIMIT 1; ";
      $this->query = "SELECT
                        oportunidad_laboral.* ,
                        empresa.nombre AS empresa,
                      tipo_empresa.descripcion AS tipo_empresa
                      FROM oportunidad_laboral
                      INNER JOIN empresa ON empresa.empresa_id = oportunidad_laboral.empresa_id
                      INNER JOIN tipo_empresa ON tipo_empresa.tipo_empresa_id = empresa.tipo_empresa_id
                      WHERE  id = '$id'
                      LIMIT 1 ; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_oportunidad_laboral)
  {
    try{
      $id = $bean_oportunidad_laboral->getId();

      $this->query = "DELETE FROM oportunidad_laboral
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_oportunidad_laboral)
  {
    try{
      $estado = $bean_oportunidad_laboral->getEstado() ;

      $this->query = "SELECT * FROM oportunidad_laboral
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_oportunidad_laboral)
  {
    try{
      $id = $bean_oportunidad_laboral->getId();
      $estado = $bean_oportunidad_laboral->getEstado();

      $this->query = "UPDATE oportunidad_laboral SET
                        estado = '$estado'
                      WHERE id='$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method updatePublish
  public function updatePublish($bean_oportunidad_laboral)
  {
    try{
      $id = $bean_oportunidad_laboral->getId();
      $publicar = $bean_oportunidad_laboral->getPublicar() ;

      $this->query = "UPDATE oportunidad_laboral SET
                        publicar = '$publicar'
                      WHERE id = '$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function getPublished($bean_oportunidad_laboral)
  {
    try{
      $publicar = $bean_oportunidad_laboral->getPublicar() ;

      $this->query = "SELECT
                        oportunidad_laboral.* ,
                        empresa.nombre AS empresa,
                      tipo_empresa.descripcion AS tipo_empresa
                      FROM oportunidad_laboral
                      INNER JOIN empresa ON empresa.empresa_id = oportunidad_laboral.empresa_id
                      INNER JOIN tipo_empresa ON tipo_empresa.tipo_empresa_id = empresa.tipo_empresa_id
                      WHERE oportunidad_laboral.publicar = '$publicar'
                      AND oportunidad_laboral.estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getPublished
  public function countRows()
  {
    try{

      $this->query = "SELECT count(*) AS num_rows FROM oportunidad_laboral;";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  public function getByUpDate($bean_oportunidad_laboral,$date)
  {
    try{

      // $this->query = "SELECT * FROM red
      //               WHERE red.created_up >= '$date';";
      $publicar = $bean_oportunidad_laboral->getPublicar() ;

      $this->query = "SELECT
                        oportunidad_laboral.* ,
                        empresa.nombre AS empresa,
                        tipo_empresa.descripcion AS tipo_empresa
                      FROM oportunidad_laboral
                      INNER JOIN empresa ON empresa.empresa_id = oportunidad_laboral.empresa_id
                      INNER JOIN tipo_empresa ON tipo_empresa.tipo_empresa_id = empresa.tipo_empresa_id
                      WHERE oportunidad_laboral.publicar = '$publicar'
                      AND oportunidad_laboral.created_up >= '$date'
                      AND oportunidad_laboral.estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
