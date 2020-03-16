<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Comentario extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM comentario; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_comentario)
  {
    try{

      $comentario_id = $bean_comentario->getComentarioId();
      $email = $bean_comentario->getEmail();
      $mensaje = $bean_comentario->getMensaje();
      $calificacion = $bean_comentario->getCalificacion();
      $estado = $bean_comentario->getEstado();
      $created_at = $bean_comentario->getCreatedAt();

      $this->query = "INSERT INTO comentario
                      (
                        email,
                        mensaje,
                        calificacion,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$email',
                        '$mensaje',
                        '$calificacion',
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
  public function update($bean_comentario)
  {
    try{
      $comentario_id = $bean_comentario->getComentarioId();
      $email = $bean_comentario->getEmail();
      $mensaje = $bean_comentario->getMensaje();
      $calificacion = $bean_comentario->getCalificacion();

      $this->query = "UPDATE comentario SET 
                        email = '$email',
                        mensaje = '$mensaje',
                        calificacion = '$calificacion'
                      WHERE comentario_id = '$comentario_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_comentario)
  {
    try{
      $comentario_id = $bean_comentario->getComentarioId();

      $this->query = "SELECT * FROM comentario WHERE comentario_id = '$comentario_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_comentario)
  {
    try{
      $comentario_id = $bean_comentario->getComentarioId();

      $this->query = "DELETE FROM comentario
                      WHERE comentario_id = '$comentario_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_comentario)
  {
    try{
      $estado = $bean_comentario->getEstado() ;

      $this->query = "SELECT * FROM comentario
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_comentario)
  {
    try{
      $comentario_id = $bean_comentario->getComentarioId();
      $estado = $bean_comentario->getEstado();

      $this->query = "UPDATE comentario SET 
                        estado = '$estado'
                      WHERE comentario_id='$comentario_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }
}
