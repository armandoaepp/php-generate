<?php 
# Class Model Generada - ByPower @armandaepp 
class Slidehome extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM slidehome";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_slidehome)
    {
        try{
            $id = $bean_slidehome->getId();
            $titulo = $bean_slidehome->getTitulo();
            $subtitulo = $bean_slidehome->getSubtitulo();
            $descripcion = $bean_slidehome->getDescripcion();
            $imagen = $bean_slidehome->getImagen();
            $url = $bean_slidehome->getUrl();
            $orden = $bean_slidehome->getOrden();
            $estado = $bean_slidehome->getEstado();
            $fecha = $bean_slidehome->getFecha();

            $this->query = "INSERT INTO slidehome
                            (
                                titulo,
                                subtitulo,
                                descripcion,
                                imagen,
                                url,
                                orden,
                                estado,
                                fecha
                            )
                            VALUES(
                                '$titulo',
                                '$subtitulo',
                                '$descripcion',
                                '$imagen',
                                '$url',
                                '$orden',
                                '$estado',
                                '$fecha'
                            )";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_slidehome)
    {
        try{
            $id = $bean_slidehome->getId();
            $titulo = $bean_slidehome->getTitulo();
            $subtitulo = $bean_slidehome->getSubtitulo();
            $descripcion = $bean_slidehome->getDescripcion();
            $imagen = $bean_slidehome->getImagen();
            $url = $bean_slidehome->getUrl();
            $orden = $bean_slidehome->getOrden();
            $estado = $bean_slidehome->getEstado();
            $fecha = $bean_slidehome->getFecha();

            $this->query = "UPDATE slidehome SET 
                                titulo = '$titulo,
                                subtitulo = '$subtitulo,
                                descripcion = '$descripcion,
                                imagen = '$imagen,
                                url = '$url,
                                orden = '$orden,
                                estado = '$estado,
                                fecha = '$fecha
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
    public function updateEstado($bean_slidehome)
    {
        try{
            $id = $bean_slidehome->getId();
            $estado = $bean_slidehome->getEstado();

            $this->query = "UPDATE slidehome SET 
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
    public function getById($bean_slidehome)
    {
        try{
            $id = $bean_slidehome->getId();

            $this->query = "SELECT * FROM slidehome WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_slidehome)
    {
        try{
            $id = $bean_slidehome->getId();

            $this->query = "DELETE FROM slidehome WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>