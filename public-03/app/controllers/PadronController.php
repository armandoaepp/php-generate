<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class PadronController
{
  private $cnx;

  public function __construct($cnx = null)
  {
    $this->cnx = $cnx;
  }
    
  public function getAll()
  {
    try
    {
      $padron  = new Padron();

      $data = $padron->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado( $params = array() )
  {
    try
    {
            
      extract($params) ; 

      $padron  = new Padron();
            
      $bean_padron = new BeanPadron();
            
      $bean_padron->setEstado($estado);

      $data = $padron->getByEstado($bean_padron);

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function save($params = array() )
  {
    try
    {
            
      extract($params) ; 

      $padron  = new Padron($this->cnx);

      $bean_padron = new BeanPadron();
            
      $bean_padron->setCodigo($codigo);
      $bean_padron->setDni($dni);
      $bean_padron->setApellidoPaterno($apellido_paterno);
      $bean_padron->setApellidoMaterno($apellido_materno);
      $bean_padron->setNombres($nombres);
      $bean_padron->setFechaNac($fecha_nac);
      $bean_padron->setDistritoId($distrito_id);
      $bean_padron->setCaserioId($caserio_id);
      $bean_padron->setSectorId($sector_id);
      $bean_padron->setTelefono($telefono);
      $bean_padron->setEmail($email);
      $bean_padron->setDireccion($direccion);
      $bean_padron->setReferencia($referencia);
      $bean_padron->setTipoViviendaId($tipo_vivienda_id);
      $bean_padron->setNumPersonas($num_personas);
      $bean_padron->setImagen($imagen);
            
      $data = $padron->save($bean_padron) ;

      return $data ;
    }
    catch (Exception $e)
    {
        throw new Exception($e->getMessage());
    }
  }

  public function update($params = array())
  {
    try
    {
            
      extract($params) ; 

      $padron  = new Padron($this->cnx);
      $bean_padron = new BeanPadron();
            
      $bean_padron->setPadronId($padron_id);
      $bean_padron->setCodigo($codigo);
      $bean_padron->setDni($dni);
      $bean_padron->setApellidoPaterno($apellido_paterno);
      $bean_padron->setApellidoMaterno($apellido_materno);
      $bean_padron->setNombres($nombres);
      $bean_padron->setFechaNac($fecha_nac);
      $bean_padron->setDistritoId($distrito_id);
      $bean_padron->setCaserioId($caserio_id);
      $bean_padron->setSectorId($sector_id);
      $bean_padron->setTelefono($telefono);
      $bean_padron->setEmail($email);
      $bean_padron->setDireccion($direccion);
      $bean_padron->setReferencia($referencia);
      $bean_padron->setTipoViviendaId($tipo_vivienda_id);
      $bean_padron->setNumPersonas($num_personas);
      $bean_padron->setImagen($imagen);

      $data = $padron->update($bean_padron) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updateEstado($params = array())
  {
    try
    {
            
      extract($params) ; 

      $padron  = new Padron($this->cnx);
            
      $bean_padron = new BeanPadron();
            
      $bean_padron->setPadronId($padron_id);
      $bean_padron->setEstado($estado);

      $data = $padron->updateEstado($bean_padron) ;
            
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function find($id)
  {
    try
    {
      $padron  = new Padron();

      $bean_padron = new BeanPadron();

      $bean_padron->setPadronId($id);

      $data = $padron->find( $bean_padron) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($padron_id)
  {
    try
    {

      $padron  = new Padron();

      $bean_padron = new BeanPadron();

      $bean_padron->setPadronId($padron_id);

      $data = $padron->deleteById( $bean_padron ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
