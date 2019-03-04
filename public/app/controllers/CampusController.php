<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class CampusController
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
      $campus  = new Campus();

      $data = $campus->getAll();

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

      $campus  = new Campus();
            
      $bean_campus = new BeanCampus();
            
      $bean_campus->setEstado($estado);

      $data = $campus->getByEstado($bean_campus);

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

      $campus  = new Campus($this->cnx);

      $bean_campus = new BeanCampus();
            
      $bean_campus->setTitulo($titulo);
      $bean_campus->setSubtitulo($subtitulo);
      $bean_campus->setDescripcion($descripcion);
      $bean_campus->setImagen($imagen);
      $bean_campus->setUrl($url);
      $bean_campus->setItem($item);
      $bean_campus->setPublicar($publicar);
            
      $data = $campus->save($bean_campus) ;

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

      $campus  = new Campus($this->cnx);
      $bean_campus = new BeanCampus();
            
      $bean_campus->setId($id);
      $bean_campus->setTitulo($titulo);
      $bean_campus->setSubtitulo($subtitulo);
      $bean_campus->setDescripcion($descripcion);
      $bean_campus->setImagen($imagen);
      $bean_campus->setUrl($url);
      $bean_campus->setItem($item);
      $bean_campus->setPublicar($publicar);

      $data = $campus->update($bean_campus) ;
            
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

      $campus  = new Campus($this->cnx);
            
      $bean_campus = new BeanCampus();
            
      $bean_campus->setId($id);
      $bean_campus->setEstado($estado);

      $data = $campus->updateEstado($bean_campus) ;
            
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
      $campus  = new Campus();

      $bean_campus = new BeanCampus();

      $bean_campus->setId($id);

      $data = $campus->find( $bean_campus) ;
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

      $campus  = new Campus();

      $bean_campus = new BeanCampus();

      $bean_campus->setId($id);

      $data = $campus->deleteById( $bean_campus ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function updatePublish($params = array())
  {
    try
    {
            
      extract($params) ; 

      $campus  = new Campus($this->cnx);
      $bean_campus = new BeanCampus();
            
      $bean_campus->setId($id);
      $bean_campus->setPublicar($publicar);

      $data = $campus->updatePublish($bean_campus) ;
            
      return $data;
    }
    catch (Exception $e)
    {
           throw new Exception($e->getMessage());
    }
  }

  public function getPublished($params = array())
  {
    try
    {
            
      extract($params) ; 

      $campus  = new Campus($this->cnx);
      $bean_campus = new BeanCampus();
            
      $bean_campus->setPublicar($publicar);

      $data = $campus->getPublished($bean_campus) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
