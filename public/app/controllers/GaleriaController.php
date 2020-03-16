<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class GaleriaController
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
      $galeria  = new Galeria();

      $data = $galeria->getAll();

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

      $galeria  = new Galeria();
            
      $bean_galeria = new BeanGaleria();
            
      $bean_galeria->setEstado($estado);

      $data = $galeria->getByEstado($bean_galeria);

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

      $galeria  = new Galeria($this->cnx);

      $bean_galeria = new BeanGaleria();
            
      $bean_galeria->setTitulo($titulo);
      $bean_galeria->setDescripcion($descripcion);
            
      $data = $galeria->save($bean_galeria) ;

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

      $galeria  = new Galeria($this->cnx);
      $bean_galeria = new BeanGaleria();
            
      $bean_galeria->setGaleriaId($galeria_id);
      $bean_galeria->setTitulo($titulo);
      $bean_galeria->setDescripcion($descripcion);

      $data = $galeria->update($bean_galeria) ;
            
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

      $galeria  = new Galeria($this->cnx);
            
      $bean_galeria = new BeanGaleria();
            
      $bean_galeria->setGaleriaId($galeria_id);
      $bean_galeria->setEstado($estado);

      $data = $galeria->updateEstado($bean_galeria) ;
            
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
      $galeria  = new Galeria();

      $bean_galeria = new BeanGaleria();

      $bean_galeria->setGaleriaId($id);

      $data = $galeria->find( $bean_galeria) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($galeria_id)
  {
    try
    {

      $galeria  = new Galeria();

      $bean_galeria = new BeanGaleria();

      $bean_galeria->setGaleriaId($galeria_id);

      $data = $galeria->deleteById( $bean_galeria ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
