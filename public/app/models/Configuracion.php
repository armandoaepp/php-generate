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

  # Method get all rows
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM configuracion; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }


  # Method getByEstado
  public function getByEstado($bean_configuracion)
  {
    try{
      $estado = $bean_configuracion->getEstado() ;

      $this->query = "SELECT * FROM configuracion
                      WHERE estado = '$estado'; ";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method SAVE
  public function save($bean_configuracion)
  {
    try{
      $configuracion_id = $bean_configuracion->getConfiguracionId();
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
      $estado = $bean_configuracion->getEstado();

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
                        show_popup,
                        estado
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
                        '$show_popup',
                        '$estado'
                      ); ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Actualizar
  public function update($bean_configuracion)
  {
    try{
      $configuracion_id = $bean_configuracion->getConfiguracionId();
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
                      WHERE configuracion_id = '$configuracion_id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Eliminar(Update Estado)
  public function updateEstado($bean_configuracion)
  {
    try{
      $configuracion_id = $bean_configuracion->getConfiguracionId();
      $estado = $bean_configuracion->getEstado();

      $this->query = "UPDATE configuracion SET 
                        estado = '$estado'
                      WHERE configuracion_id='$configuracion_id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method Buscar por ID
  public function find($bean_configuracion)
  {
    try{
      $configuracion_id = $bean_configuracion->getConfiguracionId();

      $this->query = "SELECT * FROM configuracion WHERE configuracion_id = '$configuracion_id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Method deleteById
  public function deleteById($bean_configuracion)
  {
    try{
      $configuracion_id = $bean_configuracion->getConfiguracionId();

      $this->query = "DELETE FROM configuracion
                      WHERE configuracion_id = '$configuracion_id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
