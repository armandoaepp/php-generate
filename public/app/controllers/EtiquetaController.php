<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class EtiquetaController
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
      $etiqueta  = new Etiqueta();

      $data = $etiqueta->getAll();

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

      $etiqueta  = new Etiqueta();
            
      $bean_etiqueta = new BeanEtiqueta();
            
      $bean_etiqueta->setEtiEstado($estado);

      $data = $etiqueta->getByEstado($bean_etiqueta);

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

      $etiqueta  = new Etiqueta($this->cnx);

      $bean_etiqueta = new BeanEtiqueta();
            
      $bean_etiqueta->setEtiDescripcion($eti_descripcion);
      $bean_etiqueta->setEtiPublicar($eti_publicar);
            
      $data = $etiqueta->save($bean_etiqueta) ;

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

      $etiqueta  = new Etiqueta($this->cnx);
      $bean_etiqueta = new BeanEtiqueta();
            
      $bean_etiqueta->setEtiquetaId($etiqueta_id);
      $bean_etiqueta->setEtiDescripcion($eti_descripcion);
      $bean_etiqueta->setEtiPublicar($eti_publicar);

      $data = $etiqueta->update($bean_etiqueta) ;
            
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

      $etiqueta  = new Etiqueta($this->cnx);
            
      $bean_etiqueta = new BeanEtiqueta();
            
      $bean_etiqueta->setEtiquetaId($etiqueta_id);
      $bean_etiqueta->setEtiEstado($estado);

      $data = $etiqueta->updateEstado($bean_etiqueta) ;
            
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
      $etiqueta  = new Etiqueta();

      $bean_etiqueta = new BeanEtiqueta();

      $bean_etiqueta->setEtiquetaId($id);

      $data = $etiqueta->find( $bean_etiqueta) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($etiqueta_id)
  {
    try
    {

      $etiqueta  = new Etiqueta();

      $bean_etiqueta = new BeanEtiqueta();

      $bean_etiqueta->setEtiquetaId($etiqueta_id);

      $data = $etiqueta->deleteById( $bean_etiqueta ) ;

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

      $etiqueta  = new Etiqueta($this->cnx);
      $bean_etiqueta = new BeanEtiqueta();
            
      $bean_etiqueta->setEtiquetaId($etiqueta_id);
      $bean_etiqueta->setEtiPublicar($publicar);

      $data = $etiqueta->updatePublish($bean_etiqueta) ;
            
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

      $etiqueta  = new Etiqueta($this->cnx);
      $bean_etiqueta = new BeanEtiqueta();
            
      $bean_etiqueta->setEtiPublicar($publicar);

      $data = $etiqueta->getPublished($bean_etiqueta) ;
      
      return $data;
    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
