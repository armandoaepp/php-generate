<?php

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

 class HabitacionImgController
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
      $habitacion_img  = new HabitacionImg();

      $data = $habitacion_img->getAll();

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

      $habitacion_img  = new HabitacionImg();
            
      $bean_habitacion_img = new BeanHabitacionImg();
            
      $bean_habitacion_img->setEstado($estado);

      $data = $habitacion_img->getByEstado($bean_habitacion_img);

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

      $habitacion_img  = new HabitacionImg($this->cnx);

      $bean_habitacion_img = new BeanHabitacionImg();
            
      $bean_habitacion_img->setHabitacionId($habitacion_id);
      $bean_habitacion_img->setJerarquia($jerarquia);
      $bean_habitacion_img->setImagen($imagen);
      $bean_habitacion_img->setDescImg($desc_img);
            
      $data = $habitacion_img->save($bean_habitacion_img) ;

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

      $habitacion_img  = new HabitacionImg($this->cnx);
      $bean_habitacion_img = new BeanHabitacionImg();
            
      $bean_habitacion_img->setHabitacionImgId($habitacion_img_id);
      $bean_habitacion_img->setHabitacionId($habitacion_id);
      $bean_habitacion_img->setJerarquia($jerarquia);
      $bean_habitacion_img->setImagen($imagen);
      $bean_habitacion_img->setDescImg($desc_img);

      $data = $habitacion_img->update($bean_habitacion_img) ;
            
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

      $habitacion_img  = new HabitacionImg($this->cnx);
            
      $bean_habitacion_img = new BeanHabitacionImg();
            
      $bean_habitacion_img->setHabitacionImgId($habitacion_img_id);
      $bean_habitacion_img->setEstado($estado);

      $data = $habitacion_img->updateEstado($bean_habitacion_img) ;
            
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
      $habitacion_img  = new HabitacionImg();

      $bean_habitacion_img = new BeanHabitacionImg();

      $bean_habitacion_img->setHabitacionImgId($id);

      $data = $habitacion_img->find( $bean_habitacion_img) ;
      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

  public function deleteById($habitacion_img_id)
  {
    try
    {

      $habitacion_img  = new HabitacionImg();

      $bean_habitacion_img = new BeanHabitacionImg();

      $bean_habitacion_img->setHabitacionImgId($habitacion_img_id);

      $data = $habitacion_img->deleteById( $bean_habitacion_img ) ;

      return $data;

    }
    catch (Exception $e)
    {
      throw new Exception($e->getMessage());
    }
  }

}
