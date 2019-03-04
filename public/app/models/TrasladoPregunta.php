<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class TrasladoPregunta extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM traslado_pregunta; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_traslado_pregunta)
  {
    try{
      $estado = $bean_traslado_pregunta->getEstado() ;

      $this->query = "SELECT * FROM traslado_pregunta
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_traslado_pregunta)
  {
    try{
      $id = $bean_traslado_pregunta->getId();
      $pregunta = $bean_traslado_pregunta->getPregunta();
      $respuesta = $bean_traslado_pregunta->getRespuesta();
      $orden = $bean_traslado_pregunta->getOrden();
      $estado = $bean_traslado_pregunta->getEstado();
      $fecha = $bean_traslado_pregunta->getFecha();

      $this->query = "INSERT INTO traslado_pregunta
                      (
                        pregunta,
                        respuesta,
                        orden,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$pregunta',
                        '$respuesta',
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
  public function update($bean_traslado_pregunta)
  {
    try{
      $id = $bean_traslado_pregunta->getId();
      $pregunta = $bean_traslado_pregunta->getPregunta();
      $respuesta = $bean_traslado_pregunta->getRespuesta();
      $orden = $bean_traslado_pregunta->getOrden();
      $fecha = $bean_traslado_pregunta->getFecha();

      $this->query = "UPDATE traslado_pregunta SET 
                        pregunta = '$pregunta',
                        respuesta = '$respuesta',
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
  public function updateEstado($bean_traslado_pregunta)
  {
    try{
      $id = $bean_traslado_pregunta->getId();
      $estado = $bean_traslado_pregunta->getEstado();

      $this->query = "UPDATE traslado_pregunta SET 
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
  public function find($bean_traslado_pregunta)
  {
    try{
      $id = $bean_traslado_pregunta->getId();

      $this->query = "SELECT * FROM traslado_pregunta WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_traslado_pregunta)
  {
    try{
      $id = $bean_traslado_pregunta->getId();

      $this->query = "DELETE FROM traslado_pregunta
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
