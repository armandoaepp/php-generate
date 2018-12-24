<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Diplomado extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM diplomado";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_diplomado)
  {
    try{
      $id = $bean_diplomado->getId();
      $titulo = $bean_diplomado->getTitulo();
      $descripcion = $bean_diplomado->getDescripcion();
      $slide = $bean_diplomado->getSlide();
      $imagen = $bean_diplomado->getImagen();
      $certificacion = $bean_diplomado->getCertificacion();
      $titulos = $bean_diplomado->getTitulos();
      $inversion = $bean_diplomado->getInversion();
      $titulacion = $bean_diplomado->getTitulacion();
      $detalleduracion = $bean_diplomado->getDetalleduracion();
      $detalledia = $bean_diplomado->getDetalledia();
      $detallehorario = $bean_diplomado->getDetallehorario();
      $detallelugar = $bean_diplomado->getDetallelugar();
      $detalleprecio = $bean_diplomado->getDetalleprecio();
      $detalleequipos = $bean_diplomado->getDetalleequipos();
      $detalleconsultas = $bean_diplomado->getDetalleconsultas();
      $detalledirigido = $bean_diplomado->getDetalledirigido();
      $aquien = $bean_diplomado->getAquien();
      $temas = $bean_diplomado->getTemas();
      $nombreseo = $bean_diplomado->getNombreseo();
      $orden = $bean_diplomado->getOrden();
      $estado = $bean_diplomado->getEstado();
      $fecha = $bean_diplomado->getFecha();

      $this->query = "INSERT INTO diplomado
                      (
                        titulo,
                        descripcion,
                        slide,
                        imagen,
                        certificacion,
                        titulos,
                        inversion,
                        titulacion,
                        detalleduracion,
                        detalledia,
                        detallehorario,
                        detallelugar,
                        detalleprecio,
                        detalleequipos,
                        detalleconsultas,
                        detalledirigido,
                        aquien,
                        temas,
                        nombreseo,
                        orden,
                        estado,
                        fecha
                      )
                      VALUES(
                        '$titulo',
                        '$descripcion',
                        '$slide',
                        '$imagen',
                        '$certificacion',
                        '$titulos',
                        '$inversion',
                        '$titulacion',
                        '$detalleduracion',
                        '$detalledia',
                        '$detallehorario',
                        '$detallelugar',
                        '$detalleprecio',
                        '$detalleequipos',
                        '$detalleconsultas',
                        '$detalledirigido',
                        '$aquien',
                        '$temas',
                        '$nombreseo',
                        '$orden',
                        '$estado',
                        '$fecha'
                      ); ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;


    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Actualizar
  public function update($bean_diplomado)
  {
    try{
      $id = $bean_diplomado->getId();
      $titulo = $bean_diplomado->getTitulo();
      $descripcion = $bean_diplomado->getDescripcion();
      $slide = $bean_diplomado->getSlide();
      $imagen = $bean_diplomado->getImagen();
      $certificacion = $bean_diplomado->getCertificacion();
      $titulos = $bean_diplomado->getTitulos();
      $inversion = $bean_diplomado->getInversion();
      $titulacion = $bean_diplomado->getTitulacion();
      $detalleduracion = $bean_diplomado->getDetalleduracion();
      $detalledia = $bean_diplomado->getDetalledia();
      $detallehorario = $bean_diplomado->getDetallehorario();
      $detallelugar = $bean_diplomado->getDetallelugar();
      $detalleprecio = $bean_diplomado->getDetalleprecio();
      $detalleequipos = $bean_diplomado->getDetalleequipos();
      $detalleconsultas = $bean_diplomado->getDetalleconsultas();
      $detalledirigido = $bean_diplomado->getDetalledirigido();
      $aquien = $bean_diplomado->getAquien();
      $temas = $bean_diplomado->getTemas();
      $nombreseo = $bean_diplomado->getNombreseo();
      $orden = $bean_diplomado->getOrden();
      $fecha = $bean_diplomado->getFecha();

      $this->query = "UPDATE diplomado SET 
                        titulo = '$titulo',
                        descripcion = '$descripcion',
                        slide = '$slide',
                        imagen = '$imagen',
                        certificacion = '$certificacion',
                        titulos = '$titulos',
                        inversion = '$inversion',
                        titulacion = '$titulacion',
                        detalleduracion = '$detalleduracion',
                        detalledia = '$detalledia',
                        detallehorario = '$detallehorario',
                        detallelugar = '$detallelugar',
                        detalleprecio = '$detalleprecio',
                        detalleequipos = '$detalleequipos',
                        detalleconsultas = '$detalleconsultas',
                        detalledirigido = '$detalledirigido',
                        aquien = '$aquien',
                        temas = '$temas',
                        nombreseo = '$nombreseo',
                        orden = '$orden',
                        fecha = '$fecha'
                      WHERE id = '$id'
                      LIMIT 1 ;";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Eliminar(Actualizar Estado)
  public function updateEstado($bean_diplomado)
  {
    try{
      $id = $bean_diplomado->getId();
      $estado = $bean_diplomado->getEstado();

      $this->query = "UPDATE diplomado SET 
                        estado = '$estado'
                      WHERE id='$id'
                      LIMIT 1 ; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método Buscar por ID
  public function find($bean_diplomado)
  {
    try{
      $id = $bean_diplomado->getId();

      $this->query = "SELECT * FROM diplomado WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_diplomado)
  {
    try{
      $id = $bean_diplomado->getId();

      $this->query = "DELETE FROM diplomado
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
