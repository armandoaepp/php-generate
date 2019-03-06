<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class TipoEmpresa extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM tipo_empresa; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_tipo_empresa)
  {
    try{
      $estado = $bean_tipo_empresa->getEstado() ;

      $this->query = "SELECT * FROM tipo_empresa
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_tipo_empresa)
  {
    try{
      $bean_tipo_empresa->setCreatedUp( HelperDate::timestampsBd() );

      $tipo_empresa_id = $bean_tipo_empresa->getTipoEmpresaId();
      $descripcion = $bean_tipo_empresa->getDescripcion();
      $glosa = $bean_tipo_empresa->getGlosa();
      $estado = $bean_tipo_empresa->getEstado();
      $created_up = $bean_tipo_empresa->getCreatedUp();

      $this->query = "INSERT INTO tipo_empresa
                      (
                        descripcion,
                        glosa,
                        estado,
                        created_up
                      )
                      VALUES(
                        '$descripcion',
                        '$glosa',
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
  public function update($bean_tipo_empresa)
  {
    try{
      $tipo_empresa_id = $bean_tipo_empresa->getTipoEmpresaId();
      $descripcion = $bean_tipo_empresa->getDescripcion();
      $glosa = $bean_tipo_empresa->getGlosa();

      $this->query = "UPDATE tipo_empresa SET 
                        descripcion = '$descripcion',
                        glosa = '$glosa'
                      WHERE tipo_empresa_id = '$tipo_empresa_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_tipo_empresa)
  {
    try{
      $tipo_empresa_id = $bean_tipo_empresa->getTipoEmpresaId();
      $estado = $bean_tipo_empresa->getEstado();

      $this->query = "UPDATE tipo_empresa SET 
                        estado = '$estado'
                      WHERE tipo_empresa_id='$tipo_empresa_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_tipo_empresa)
  {
    try{
      $tipo_empresa_id = $bean_tipo_empresa->getTipoEmpresaId();

      $this->query = "SELECT * FROM tipo_empresa WHERE tipo_empresa_id = '$tipo_empresa_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_tipo_empresa)
  {
    try{
      $tipo_empresa_id = $bean_tipo_empresa->getTipoEmpresaId();

      $this->query = "DELETE FROM tipo_empresa
                      WHERE tipo_empresa_id = '$tipo_empresa_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
