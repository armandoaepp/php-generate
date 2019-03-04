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

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM amigos; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_amigos)
  {
    try{
      $estado = $bean_amigos->getEstado() ;

      $this->query = "SELECT * FROM amigos
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
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

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
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

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
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

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
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

  # Method deleteById
  public function deleteById($bean_amigos)
  {
    try{
      $id = $bean_amigos->getId();

      $this->query = "DELETE FROM amigos
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
