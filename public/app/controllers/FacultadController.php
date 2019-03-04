<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class FacultadController
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
      $facultad  = new Facultad();

      $data = $facultad->getAll();

      return $data ;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function getByEstado()
  {
    try
    {
      $facultad  = new Facultad();
            
      $bean_facultad = new BeanFacultad();
            
      $bean_facultad->setEstado($estado);

      $data = $facultad->getByEstado($bean_facultad);

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

      $facultad  = new Facultad($this->cnx);

      $bean_facultad = new BeanFacultad();
            
      $bean_facultad->setTitulo($titulo);
      $bean_facultad->setDescripcion($descripcion);
      $bean_facultad->setImagen($imagen);
      $bean_facultad->setOrden($orden);
      $bean_facultad->setFecha($fecha);
      $bean_facultad->setActivo($activo);
            
      $data = $facultad->save($bean_facultad) ;

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

      $facultad  = new Facultad($this->cnx);
      $bean_facultad = new BeanFacultad();
            
      $bean_facultad->setId($id);
      $bean_facultad->setTitulo($titulo);
      $bean_facultad->setDescripcion($descripcion);
      $bean_facultad->setImagen($imagen);
      $bean_facultad->setOrden($orden);
      $bean_facultad->setFecha($fecha);
      $bean_facultad->setActivo($activo);

      $data = $facultad->update($bean_facultad) ;
            
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

      $facultad  = new Facultad($this->cnx);
            
      $bean_facultad = new BeanFacultad();
            
      $bean_facultad->setId($id);
      $bean_facultad->setEstado($estado);

      $data = $facultad->updateEstado($bean_facultad) ;
            
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
      $facultad  = new Facultad();

      $bean_facultad = new BeanFacultad();

      $bean_facultad->setId($id);

      $data = $facultad->find( $bean_facultad) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($id)
  {
    try
    {

      $facultad  = new Facultad();

      $bean_facultad = new BeanFacultad();

      $bean_facultad->setId($id);

      $data = $facultad->deleteById( $bean_facultad ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
