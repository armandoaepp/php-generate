<?php 
# Class Model Generada - ByPower @armandaepp 
class Noticias extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM noticias";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_noticias)
    {
        try{
            $id = $bean_noticias->getId();
            $titulo = $bean_noticias->getTitulo();
            $descripcion = $bean_noticias->getDescripcion();
            $imagen = $bean_noticias->getImagen();
            $banner = $bean_noticias->getBanner();
            $nombreseo = $bean_noticias->getNombreseo();
            $orden = $bean_noticias->getOrden();
            $estado = $bean_noticias->getEstado();
            $fecha = $bean_noticias->getFecha();
            $activo = $bean_noticias->getActivo();

            $this->query = "INSERT INTO noticias
                            (
                                titulo,
                                descripcion,
                                imagen,
                                banner,
                                nombreseo,
                                orden,
                                estado,
                                fecha,
                                activo
                            )
                            VALUES(
                                '$titulo',
                                '$descripcion',
                                '$imagen',
                                '$banner',
                                '$nombreseo',
                                '$orden',
                                '$estado',
                                '$fecha',
                                '$activo'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_noticias)
    {
        try{
            $id = $bean_noticias->getId();
            $titulo = $bean_noticias->getTitulo();
            $descripcion = $bean_noticias->getDescripcion();
            $imagen = $bean_noticias->getImagen();
            $banner = $bean_noticias->getBanner();
            $nombreseo = $bean_noticias->getNombreseo();
            $orden = $bean_noticias->getOrden();
            $estado = $bean_noticias->getEstado();
            $fecha = $bean_noticias->getFecha();
            $activo = $bean_noticias->getActivo();

            $this->query = "UPDATE noticias SET 
                                titulo = '$titulo,
                                descripcion = '$descripcion,
                                imagen = '$imagen,
                                banner = '$banner,
                                nombreseo = '$nombreseo,
                                orden = '$orden,
                                estado = '$estado,
                                fecha = '$fecha,
                                activo = '$activo
                            WHERE id = '$id'
                            LIMIT 1 ";
            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

         }catch(exception $e){

            throw new Exception($e->getMessage());

         }
    }

    # Método Eliminar(Actualizar Estado)
    public function updateEstado($bean_noticias)
    {
        try{
            $id = $bean_noticias->getId();
            $estado = $bean_noticias->getEstado();

            $this->query = "UPDATE noticias SET 
                                estado = '$estado'
                            WHERE id='$id'
                            LIMIT 1 ";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Buscar por ID
    public function getById($bean_noticias)
    {
        try{
            $id = $bean_noticias->getId();

            $this->query = "SELECT * FROM noticias WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_noticias)
    {
        try{
            $id = $bean_noticias->getId();

            $this->query = "DELETE FROM noticias WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>