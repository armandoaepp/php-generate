<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Plan extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM plan; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_plan)
  {
    try{

      $id = $bean_plan->getId();
      $nombre = $bean_plan->getNombre();
      $espacio = $bean_plan->getEspacio();
      $num_databases = $bean_plan->getNumDatabases();
      $num_mails = $bean_plan->getNumMails();
      $estado = $bean_plan->getEstado();
      $created_at = $bean_plan->getCreatedAt();
      $updated_at = $bean_plan->getUpdatedAt();

      $this->query = "INSERT INTO plan
                      (
                        nombre,
                        espacio,
                        num_databases,
                        num_mails,
                        estado,
                        created_at,
                        updated_at
                      )
                      VALUES(
                        '$nombre',
                        '$espacio',
                        '$num_databases',
                        '$num_mails',
                        '$estado',
                        '$created_at',
                        '$updated_at'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_plan)
  {
    try{
      $id = $bean_plan->getId();
      $nombre = $bean_plan->getNombre();
      $espacio = $bean_plan->getEspacio();
      $num_databases = $bean_plan->getNumDatabases();
      $num_mails = $bean_plan->getNumMails();
      $created_at = $bean_plan->getCreatedAt();
      $updated_at = $bean_plan->getUpdatedAt();

      $this->query = "UPDATE plan SET 
                        nombre = '$nombre',
                        espacio = '$espacio',
                        num_databases = '$num_databases',
                        num_mails = '$num_mails',
                        created_at = '$created_at',
                        updated_at = '$updated_at'
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
  public function find($bean_plan)
  {
    try{
      $id = $bean_plan->getId();

      $this->query = "SELECT * FROM plan WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_plan)
  {
    try{
      $id = $bean_plan->getId();

      $this->query = "DELETE FROM plan
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_plan)
  {
    try{
      $estado = $bean_plan->getEstado() ;

      $this->query = "SELECT * FROM plan
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_plan)
  {
    try{
      $id = $bean_plan->getId();
      $estado = $bean_plan->getEstado();

      $this->query = "UPDATE plan SET 
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
}
