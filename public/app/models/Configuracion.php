<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Configuracion extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM configuracion";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_configuracion)
  {
    try{
      $id = $bean_configuracion->getId();
      $titulo = $bean_configuracion->getTitulo();
      $horario = $bean_configuracion->getHorario();
      $direccion = $bean_configuracion->getDireccion();
      $email = $bean_configuracion->getEmail();
      $telefono = $bean_configuracion->getTelefono();
      $facebook = $bean_configuracion->getFacebook();
      $youtube = $bean_configuracion->getYoutube();
      $instagram = $bean_configuracion->getInstagram();
      $mapa = $bean_configuracion->getMapa();
      $popup = $bean_configuracion->getPopup();
      $show_popup = $bean_configuracion->getShowPopup();

      $this->query = "INSERT INTO configuracion
                      (
                        titulo,
                        horario,
                        direccion,
                        email,
                        telefono,
                        facebook,
                        youtube,
                        instagram,
                        mapa,
                        popup,
                        show_popup
                      )
                      VALUES(
                        '$titulo',
                        '$horario',
                        '$direccion',
                        '$email',
                        '$telefono',
                        '$facebook',
                        '$youtube',
                        '$instagram',
                        '$mapa',
                        '$popup',
                        '$show_popup'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_configuracion)
  {
    try{
      $id = $bean_configuracion->getId();
      $titulo = $bean_configuracion->getTitulo();
      $horario = $bean_configuracion->getHorario();
      $direccion = $bean_configuracion->getDireccion();
      $email = $bean_configuracion->getEmail();
      $telefono = $bean_configuracion->getTelefono();
      $facebook = $bean_configuracion->getFacebook();
      $youtube = $bean_configuracion->getYoutube();
      $instagram = $bean_configuracion->getInstagram();
      $mapa = $bean_configuracion->getMapa();
      $popup = $bean_configuracion->getPopup();
      $show_popup = $bean_configuracion->getShowPopup();

      $this->query = "UPDATE configuracion SET 
                        titulo = '$titulo',
                        horario = '$horario',
                        direccion = '$direccion',
                        email = '$email',
                        telefono = '$telefono',
                        facebook = '$facebook',
                        youtube = '$youtube',
                        instagram = '$instagram',
                        mapa = '$mapa',
                        popup = '$popup',
                        show_popup = '$show_popup'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
  public function find($bean_configuracion)
  {
    try{
      $id = $bean_configuracion->getId();

      $this->query = "SELECT * FROM configuracion WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_configuracion)
  {
    try{
      $id = $bean_configuracion->getId();

      $this->query = "DELETE FROM configuracion
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
