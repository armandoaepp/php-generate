<?php 

/**
 * [Class Controller Generada]
 * Autor: Armando E. Pisfil Puemape
 * twitter: @armandoaepp
 * email: armandoaepp@gmail.com
*/

class Taller extends Connection {
  # CONSTRUCT 
  public function __construct($cnx  = null)
  {
    $this->conn = $cnx;
  }

  # Método getALl
  public function getAll()
  {
    try{

      $this->query = "SELECT * FROM taller";

      $this->executeQuery();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método SAVE
  public function save($bean_taller)
  {
    try{
      $id = $bean_taller->getId();
      $titulo = $bean_taller->getTitulo();
      $descripcion = $bean_taller->getDescripcion();
      $slide = $bean_taller->getSlide();
      $imagen = $bean_taller->getImagen();
      $certificacion = $bean_taller->getCertificacion();
      $titulos = $bean_taller->getTitulos();
      $inversion = $bean_taller->getInversion();
      $titulacion = $bean_taller->getTitulacion();
      $detalleduracion = $bean_taller->getDetalleduracion();
      $detalledia = $bean_taller->getDetalledia();
      $detallehorario = $bean_taller->getDetallehorario();
      $detallelugar = $bean_taller->getDetallelugar();
      $detalleprecio = $bean_taller->getDetalleprecio();
      $detalleequipos = $bean_taller->getDetalleequipos();
      $detalleconsultas = $bean_taller->getDetalleconsultas();
      $detalledirigido = $bean_taller->getDetalledirigido();
      $aquien = $bean_taller->getAquien();
      $temas = $bean_taller->getTemas();
      $nombreseo = $bean_taller->getNombreseo();
      $orden = $bean_taller->getOrden();
      $estado = $bean_taller->getEstado();
      $fecha = $bean_taller->getFecha();

      $this->query = "INSERT INTO taller
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
  public function update($bean_taller)
  {
    try{
      $id = $bean_taller->getId();
      $titulo = $bean_taller->getTitulo();
      $descripcion = $bean_taller->getDescripcion();
      $slide = $bean_taller->getSlide();
      $imagen = $bean_taller->getImagen();
      $certificacion = $bean_taller->getCertificacion();
      $titulos = $bean_taller->getTitulos();
      $inversion = $bean_taller->getInversion();
      $titulacion = $bean_taller->getTitulacion();
      $detalleduracion = $bean_taller->getDetalleduracion();
      $detalledia = $bean_taller->getDetalledia();
      $detallehorario = $bean_taller->getDetallehorario();
      $detallelugar = $bean_taller->getDetallelugar();
      $detalleprecio = $bean_taller->getDetalleprecio();
      $detalleequipos = $bean_taller->getDetalleequipos();
      $detalleconsultas = $bean_taller->getDetalleconsultas();
      $detalledirigido = $bean_taller->getDetalledirigido();
      $aquien = $bean_taller->getAquien();
      $temas = $bean_taller->getTemas();
      $nombreseo = $bean_taller->getNombreseo();
      $orden = $bean_taller->getOrden();
      $fecha = $bean_taller->getFecha();

      $this->query = "UPDATE taller SET 
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
  public function updateEstado($bean_taller)
  {
    try{
      $id = $bean_taller->getId();
      $estado = $bean_taller->getEstado();

      $this->query = "UPDATE taller SET 
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
  public function find($bean_taller)
  {
    try{
      $id = $bean_taller->getId();

      $this->query = "SELECT * FROM taller WHERE id = '$id' LIMIT 1; ";

      $this->executeFind();

      $data = $this->rows ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

  # Método deleteById
  public function deleteById($bean_taller)
  {
    try{
      $id = $bean_taller->getId();

      $this->query = "DELETE FROM taller
                      WHERE id = '$id' LIMIT 1; ";

      $this->executeQuery();

      $data = $this->status_exe  ;

      return $data;

    }catch(exception $e){

      throw new Exception($e->getMessage());

    }
  }

}
