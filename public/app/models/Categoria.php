<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Categoria extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM categoria; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_categoria)
  {
    try{

      $id = $bean_categoria->getId();
      $nombre = $bean_categoria->getNombre();
      $url = $bean_categoria->getUrl();
      $imagen = $bean_categoria->getImagen();
      $publicar = $bean_categoria->getPublicar();
      $estado = $bean_categoria->getEstado();
      $created_up = $bean_categoria->getCreatedUp();

      $this->query = "INSERT INTO categoria
                      (
                        nombre,
                        url,
                        imagen,
                        publicar,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$nombre',
                        '$url',
                        '$imagen',
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
  public function update($bean_categoria)
  {
    try{
      $id = $bean_categoria->getId();
      $nombre = $bean_categoria->getNombre();
      $url = $bean_categoria->getUrl();
      $imagen = $bean_categoria->getImagen();
      $publicar = $bean_categoria->getPublicar();

      $this->query = "UPDATE categoria SET 
                        nombre = '$nombre',
                        url = '$url',
                        imagen = '$imagen',
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
  public function find($bean_categoria)
  {
    try{
      $id = $bean_categoria->getId();

      $this->query = "SELECT * FROM categoria WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_categoria)
  {
    try{
      $id = $bean_categoria->getId();

      $this->query = "DELETE FROM categoria
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_categoria)
  {
    try{
      $estado = $bean_categoria->getEstado() ;

      $this->query = "SELECT * FROM categoria
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_categoria)
  {
    try{
      $id = $bean_categoria->getId();
      $estado = $bean_categoria->getEstado();

      $this->query = "UPDATE categoria SET 
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
  public function updatePublish($bean_categoria)
  {
    try{
      $id = $bean_categoria->getId();
      $publicar = $bean_categoria->getPublicar() ;

      $this->query = "UPDATE categoria SET 
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
  public function getPublished($bean_categoria)
  {
    try{
      $publicar = $bean_categoria->getPublicar() ;

      $this->query = "SELECT * FROM categoria
                      WHERE publicar = '$publicar'
                      AND estado = 1 ; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
