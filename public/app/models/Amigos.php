<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Amigos extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM amigos";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();
      $titulo = $bean_amigos->getTitulo();
      $imagen = $bean_amigos->getImagen();
      $imagen_2 = $bean_amigos->getImagen2();
      $email = $bean_amigos->getEmail();
      $orden = $bean_amigos->getOrden();
      $estado = $bean_amigos->getEstado();
      $fecha = $bean_amigos->getFecha();

      $this->query = "INSERT INTO amigos
                      (
                        titulo,
                        imagen,
                        imagen_2,
                        email,
                        orden,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$titulo',
                        '$imagen',
                        '$imagen_2',
                        '$email',
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
  public function update($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();
      $titulo = $bean_amigos->getTitulo();
      $imagen = $bean_amigos->getImagen();
      $imagen_2 = $bean_amigos->getImagen2();
      $email = $bean_amigos->getEmail();
      $orden = $bean_amigos->getOrden();
      $fecha = $bean_amigos->getFecha();

      $this->query = "UPDATE amigos SET 
                        titulo = '$titulo',
                        imagen = '$imagen',
                        imagen_2 = '$imagen_2',
                        email = '$email',
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
  public function updateEstado($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();
      $estado = $bean_amigos->getEstado();

      $this->query = "UPDATE amigos SET 
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
  public function find($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();

      $this->query = "SELECT * FROM amigos WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();

      $this->query = "DELETE FROM amigos
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}