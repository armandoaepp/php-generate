<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Red extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM red; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_red)
  {
    try{
      $estado = $bean_red->getEstado() ;

      $this->query = "SELECT * FROM red
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_red)
  {
    try{
      $bean_red->setCreatedUp( HelperDate::timestampsBd() );

      $id = $bean_red->getId();
      $titulo = $bean_red->getTitulo();
      $subtitulo = $bean_red->getSubtitulo();
      $tipo = $bean_red->getTipo();
      $vacantes = $bean_red->getVacantes();
      $requisitos = $bean_red->getRequisitos();
      $conocimientos = $bean_red->getConocimientos();
      $salario = $bean_red->getSalario();
      $nombrecontacto = $bean_red->getNombrecontacto();
      $telefonocontacto = $bean_red->getTelefonocontacto();
      $emailcontacto = $bean_red->getEmailcontacto();
      $item = $bean_red->getItem();
      $publicar = $bean_red->getPublicar();
      $estado = $bean_red->getEstado();
      $created_up = $bean_red->getCreatedUp();

      $this->query = "INSERT INTO red
                      (
                        titulo,
                        subtitulo,
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
                        '$titulo',
                        '$subtitulo',
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
  public function update($bean_red)
  {
    try{
      $id = $bean_red->getId();
      $titulo = $bean_red->getTitulo();
      $subtitulo = $bean_red->getSubtitulo();
      $tipo = $bean_red->getTipo();
      $vacantes = $bean_red->getVacantes();
      $requisitos = $bean_red->getRequisitos();
      $conocimientos = $bean_red->getConocimientos();
      $salario = $bean_red->getSalario();
      $nombrecontacto = $bean_red->getNombrecontacto();
      $telefonocontacto = $bean_red->getTelefonocontacto();
      $emailcontacto = $bean_red->getEmailcontacto();
      $item = $bean_red->getItem();
      $publicar = $bean_red->getPublicar();

      $this->query = "UPDATE red SET
                        titulo = '$titulo',
                        subtitulo = '$subtitulo',
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
  public function updateEstado($bean_red)
  {
    try{
      $id = $bean_red->getId();
      $estado = $bean_red->getEstado();

      $this->query = "UPDATE red SET
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
  public function find($bean_red)
  {
    try{
      $id = $bean_red->getId();

      $this->query = "SELECT * FROM red WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_red)
  {
    try{
      $id = $bean_red->getId();

      $this->query = "DELETE FROM red
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method updatePublish
  public function updatePublish($bean_red)
  {
    try{
      $id = $bean_red->getId();
      $publicar = $bean_red->getPublicar() ;

      $this->query = "UPDATE red SET
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
  public function getPublished($bean_red)
  {
    try{
      $publicar = $bean_red->getPublicar() ;

      $this->query = "SELECT * FROM red
                      WHERE publicar = '$publicar'
                      AND estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  public function getByUpDate($date)
  {
    try{

      $this->query = "SELECT * FROM red
                    WHERE red.created_up >= '$date';";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
