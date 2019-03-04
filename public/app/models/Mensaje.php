<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Mensaje extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM mensaje; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_mensaje)
  {
    try{
      $estado = $bean_mensaje->getEstado() ;

      $this->query = "SELECT * FROM mensaje
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_mensaje)
  {
    try{
      $id = $bean_mensaje->getId();
      $titulo = $bean_mensaje->getTitulo();
      $imagen = $bean_mensaje->getImagen();
      $descripcion = $bean_mensaje->getDescripcion();
      $descripcion_2 = $bean_mensaje->getDescripcion2();
      $slogan = $bean_mensaje->getSlogan();
      $mision = $bean_mensaje->getMision();
      $vision = $bean_mensaje->getVision();
      $orden = $bean_mensaje->getOrden();
      $estado = $bean_mensaje->getEstado();
      $fecha = $bean_mensaje->getFecha();

      $this->query = "INSERT INTO mensaje
                      (
                        titulo,
                        imagen,
                        descripcion,
                        descripcion_2,
                        slogan,
                        mision,
                        vision,
                        orden,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$titulo',
                        '$imagen',
                        '$descripcion',
                        '$descripcion_2',
                        '$slogan',
                        '$mision',
                        '$vision',
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
  public function update($bean_mensaje)
  {
    try{
      $id = $bean_mensaje->getId();
      $titulo = $bean_mensaje->getTitulo();
      $imagen = $bean_mensaje->getImagen();
      $descripcion = $bean_mensaje->getDescripcion();
      $descripcion_2 = $bean_mensaje->getDescripcion2();
      $slogan = $bean_mensaje->getSlogan();
      $mision = $bean_mensaje->getMision();
      $vision = $bean_mensaje->getVision();
      $orden = $bean_mensaje->getOrden();
      $fecha = $bean_mensaje->getFecha();

      $this->query = "UPDATE mensaje SET 
                        titulo = '$titulo',
                        imagen = '$imagen',
                        descripcion = '$descripcion',
                        descripcion_2 = '$descripcion_2',
                        slogan = '$slogan',
                        mision = '$mision',
                        vision = '$vision',
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
  public function updateEstado($bean_mensaje)
  {
    try{
      $id = $bean_mensaje->getId();
      $estado = $bean_mensaje->getEstado();

      $this->query = "UPDATE mensaje SET 
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
  public function find($bean_mensaje)
  {
    try{
      $id = $bean_mensaje->getId();

      $this->query = "SELECT * FROM mensaje WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_mensaje)
  {
    try{
      $id = $bean_mensaje->getId();

      $this->query = "DELETE FROM mensaje
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
