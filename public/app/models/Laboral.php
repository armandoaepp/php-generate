<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Laboral extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM laboral; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_laboral)
  {
    try{
      $estado = $bean_laboral->getEstado() ;

      $this->query = "SELECT * FROM laboral
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_laboral)
  {
    try{
      $bean_laboral->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_laboral->getId();
      $empresa_id = $bean_laboral->getEmpresaId();
      $titulo = $bean_laboral->getTitulo();
      $tipo = $bean_laboral->getTipo();
      $vacantes = $bean_laboral->getVacantes();
      $requisitos = $bean_laboral->getRequisitos();
      $conocimientos = $bean_laboral->getConocimientos();
      $salario = $bean_laboral->getSalario();
      $nombrecontacto = $bean_laboral->getNombrecontacto();
      $telefonocontacto = $bean_laboral->getTelefonocontacto();
      $emailcontacto = $bean_laboral->getEmailcontacto();
      $item = $bean_laboral->getItem();
      $publicar = $bean_laboral->getPublicar();
      $estado = $bean_laboral->getEstado();
      $created_up = $bean_laboral->getCreatedUp();

      $this->query = "INSERT INTO laboral
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
  public function update($bean_laboral)
  {
    try{
      $id = $bean_laboral->getId();
      $empresa_id = $bean_laboral->getEmpresaId();
      $titulo = $bean_laboral->getTitulo();
      $tipo = $bean_laboral->getTipo();
      $vacantes = $bean_laboral->getVacantes();
      $requisitos = $bean_laboral->getRequisitos();
      $conocimientos = $bean_laboral->getConocimientos();
      $salario = $bean_laboral->getSalario();
      $nombrecontacto = $bean_laboral->getNombrecontacto();
      $telefonocontacto = $bean_laboral->getTelefonocontacto();
      $emailcontacto = $bean_laboral->getEmailcontacto();
      $item = $bean_laboral->getItem();
      $publicar = $bean_laboral->getPublicar();

      $this->query = "UPDATE laboral SET 
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
                        item = '$item',
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

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_laboral)
  {
    try{
      $id = $bean_laboral->getId();
      $estado = $bean_laboral->getEstado();

      $this->query = "UPDATE laboral SET 
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

  # Method Buscar por ID
  public function find($bean_laboral)
  {
    try{
      $id = $bean_laboral->getId();

      $this->query = "SELECT * FROM laboral WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_laboral)
  {
    try{
      $id = $bean_laboral->getId();

      $this->query = "DELETE FROM laboral
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_laboral)
  {
    try{
      $id = $bean_laboral->getId();
      $publicar = $bean_laboral->getPublicar() ;

      $this->query = "UPDATE laboral SET 
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
  public function getPublished($bean_laboral)
  {
    try{
      $publicar = $bean_laboral->getPublicar() ;

      $this->query = "SELECT * FROM laboral
                      WHERE publicar = '$publicar'
                      AND estado = 1 ; ";

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

      $this->query = "SELECT count(*) AS num_rows FROM laboral;";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
