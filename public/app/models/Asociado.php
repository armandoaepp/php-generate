<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Asociado extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT
                        asociado.*,
                        empresa.nombre AS empresa
                      FROM asociado
                      INNER JOIN empresa ON empresa.empresa_id =  asociado.asociado_id; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_asociado)
  {
    try{

      $asociado_id = $bean_asociado->getAsociadoId();
      $empresa_id  = $bean_asociado->getEmpresaId();
      $nombre      = $bean_asociado->getNombre();
      $apellidos   = $bean_asociado->getApellidos();
      $email       = $bean_asociado->getEmail();
      // $password    = $bean_asociado->getPassword();
      $password   =  Encript::md5($bean_asociado->getPassword());
      $telefono    = $bean_asociado->getTelefono();
      $estado      = $bean_asociado->getEstado();
      $created_at  = $bean_asociado->getCreatedAt();

      $this->query = "INSERT INTO asociado
                      (
                        empresa_id,
                        nombre,
                        apellidos,
                        email,
                        password,
                        telefono,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$empresa_id',
                        '$nombre',
                        '$apellidos',
                        '$email',
                        '$password',
                        '$telefono',
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
  public function update($bean_asociado)
  {
    try{
      $asociado_id = $bean_asociado->getAsociadoId();
      $empresa_id  = $bean_asociado->getEmpresaId();
      $nombre      = $bean_asociado->getNombre();
      $apellidos   = $bean_asociado->getApellidos();
      $email       = $bean_asociado->getEmail();
      // $password    = $bean_asociado->getPassword();
      $telefono    = $bean_asociado->getTelefono();

      $this->query = "UPDATE asociado SET
                        empresa_id = '$empresa_id',
                        nombre = '$nombre',
                        apellidos = '$apellidos',
                        email = '$email',
                        telefono = '$telefono'
                      WHERE asociado_id = '$asociado_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_asociado)
  {
    try{
      $asociado_id = $bean_asociado->getAsociadoId();

      $this->query = "SELECT * FROM asociado WHERE asociado_id = '$asociado_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_asociado)
  {
    try{
      $asociado_id = $bean_asociado->getAsociadoId();

      $this->query = "DELETE FROM asociado
                      WHERE asociado_id = '$asociado_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_asociado)
  {
    try{
      $estado = $bean_asociado->getEstado() ;

      $this->query = "SELECT * FROM asociado
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method Eliminar(Update Estado)
  public function updateEstado($bean_asociado)
  {
    try{
      $asociado_id = $bean_asociado->getAsociadoId();
      $estado = $bean_asociado->getEstado();

      $this->query = "UPDATE asociado SET
                        estado = '$estado'
                      WHERE asociado_id='$asociado_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

   # Method Password
   public function updatePassword($bean_asociado)
   {
     try{
       $asociado_id   = $bean_asociado->getAsociadoId();
       $password  = Encript::md5($bean_asociado->getPassword());

       $this->query = "UPDATE asociado SET
                         password = '$password'
                       WHERE asociado_id = '$asociado_id'
                       LIMIT 1 ;";

       $this->executeQuery();

       $data = $this->status  ;

       return $data;

     }catch(exception $e){

       throw new Exception($e->getMessage());

     }
   }
}
