<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Textos extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM textos";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_textos)
  {
    try{
      $id = $bean_textos->getId();
      $identificador = $bean_textos->getIdentificador();
      $titulo = $bean_textos->getTitulo();
      $descripcion = $bean_textos->getDescripcion();
      $orden = $bean_textos->getOrden();
      $estado = $bean_textos->getEstado();
      $fecha = $bean_textos->getFecha();

      $this->query = "INSERT INTO textos
                      (
                        identificador,
                        titulo,
                        descripcion,
                        orden,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$identificador',
                        '$titulo',
                        '$descripcion',
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
  public function update($bean_textos)
  {
    try{
      $id = $bean_textos->getId();
      $identificador = $bean_textos->getIdentificador();
      $titulo = $bean_textos->getTitulo();
      $descripcion = $bean_textos->getDescripcion();
      $orden = $bean_textos->getOrden();
      $fecha = $bean_textos->getFecha();

      $this->query = "UPDATE textos SET 
                        identificador = '$identificador',
                        titulo = '$titulo',
                        descripcion = '$descripcion',
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
  public function updateEstado($bean_textos)
  {
    try{
      $id = $bean_textos->getId();
      $estado = $bean_textos->getEstado();

      $this->query = "UPDATE textos SET 
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
  public function find($bean_textos)
  {
    try{
      $id = $bean_textos->getId();

      $this->query = "SELECT * FROM textos WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_textos)
  {
    try{
      $id = $bean_textos->getId();

      $this->query = "DELETE FROM textos
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}