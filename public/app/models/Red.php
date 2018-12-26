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

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM red";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_red)
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
      $orden = $bean_red->getOrden();
      $estado = $bean_red->getEstado();
      $fecha = $bean_red->getFecha();

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
                        orden,
                        estado,
                        fecha
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
                        '$orden',
                        '$estado',
                        '$fecha'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
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
      $orden = $bean_red->getOrden();
      $fecha = $bean_red->getFecha();

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
                        orden = '$orden',
                        fecha = '$fecha'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Eliminar(Actualizar Estado)
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

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
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

  # Método deleteById
  public function deleteById($bean_red)
  {
    try{
      $id = $bean_red->getId();

      $this->query = "DELETE FROM red
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  public function getByUpDate($date)
  {
    try{

      $this->query = "SELECT * FROM red
                    WHERE red.fecha >= '$date';";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
