<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class PaqueteActividad extends Connection {
  # CONSTRUCT
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM paquete_actividad; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_paquete_actividad)
  {
    try{

      $paquete_actividad_id = $bean_paquete_actividad->getPaqueteActividadId();
      $paquete_id           = $bean_paquete_actividad->getPaqueteId();
      $actividad_id         = $bean_paquete_actividad->getActividadId();
      $horas                = $bean_paquete_actividad->getHoras();
      $descripcion          = $bean_paquete_actividad->getDescripcion();
      $estado               = $bean_paquete_actividad->getEstado();
      $created_at           = $bean_paquete_actividad->getCreatedAt();

      $this->query = "INSERT INTO paquete_actividad
                      (
                        paquete_id,
                        actividad_id,
                        horas,
                        descripcion,
                        estado,
                        created_at
                      )
                      VALUES(
                        '$paquete_id',
                        '$actividad_id',
                        '$horas',
                        '$descripcion',
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
  public function update($bean_paquete_actividad)
  {
    try{
      $paquete_actividad_id = $bean_paquete_actividad->getPaqueteActividadId();
      $paquete_id           = $bean_paquete_actividad->getPaqueteId();
      $actividad_id         = $bean_paquete_actividad->getActividadId();
      $horas                = $bean_paquete_actividad->getHoras();
      $descripcion          = $bean_paquete_actividad->getDescripcion();

      $this->query = "UPDATE paquete_actividad SET
                        paquete_id = '$paquete_id',
                        actividad_id = '$actividad_id',
                        horas = '$horas',
                        descripcion = '$descripcion'
                      WHERE paquete_actividad_id = '$paquete_actividad_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_paquete_actividad)
  {
    try{
      $paquete_actividad_id = $bean_paquete_actividad->getPaqueteActividadId();

      $this->query = "SELECT * FROM paquete_actividad WHERE paquete_actividad_id = '$paquete_actividad_id' LIMIT 1; ";
      // echo $this->query ."<br>" ;
      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_paquete_actividad)
  {
    try{
      $paquete_actividad_id = $bean_paquete_actividad->getPaqueteActividadId();

      $this->query = "DELETE FROM paquete_actividad
                      WHERE paquete_actividad_id = '$paquete_actividad_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method getByEstado
  public function getByEstado($bean_paquete_actividad)
  {
    try{
      $estado = $bean_paquete_actividad->getEstado() ;

      $this->query = "SELECT * FROM paquete_actividad
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_paquete_actividad)
  {
    try{
      $paquete_actividad_id = $bean_paquete_actividad->getPaqueteActividadId();
      $estado = $bean_paquete_actividad->getEstado();

      $this->query = "UPDATE paquete_actividad SET
                        estado = '$estado'
                      WHERE paquete_actividad_id='$paquete_actividad_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

    # Method getByPaqueteId
    public function getByPaqueteId($bean_paquete_actividad)
    {
      try{
        $paquete_id = $bean_paquete_actividad->getPaqueteId() ;

        $this->query = "SELECT
                          paquete_actividad.* ,
                          actividad.nombre as desc_actividad
                        FROM paquete_actividad
                        INNER JOIN actividad ON actividad.actividad_id = paquete_actividad.actividad_id
                        WHERE paquete_actividad.paquete_id = '$paquete_id'
                        AND paquete_actividad.estado = 1; ";


        $this->executeQuery();

        $data = $this->rows ;

        return $data;

      }catch(exception $e){

        throw new Exception($e->getMessage());

      }
    }


}
