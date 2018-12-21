<?php 
# Class Model Generada - ByPower @armandaepp 
class Textos extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM textos";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_textos)
    {
        try{
            $id = $bean_textos->getId();
            $identificador = $bean_textos->getIdentificador();
            $titulo = $bean_textos->getTitulo();
            $descripcion = $bean_textos->getDescripcion();
            $orden = $bean_textos->getOrden();
            $estado = $bean_textos->getEstado();
            $fecha = $bean_textos->getFecha();

            $this->query = "INSERT INTO textos
                            (
                                identificador,
                                titulo,
                                descripcion,
                                orden,
                                estado,
                                fecha
                            )
                            VALUES(
                                '$identificador',
                                '$titulo',
                                '$descripcion',
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
    public function update($bean_textos)
    {
        try{
            $id = $bean_textos->getId();
            $identificador = $bean_textos->getIdentificador();
            $titulo = $bean_textos->getTitulo();
            $descripcion = $bean_textos->getDescripcion();
            $orden = $bean_textos->getOrden();
            $estado = $bean_textos->getEstado();
            $fecha = $bean_textos->getFecha();

            $this->query = "UPDATE textos SET 
                                identificador = '$identificador,
                                titulo = '$titulo,
                                descripcion = '$descripcion,
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
    public function updateEstado($bean_textos)
    {
        try{
            $id = $bean_textos->getId();
            $estado = $bean_textos->getEstado();

            $this->query = "UPDATE textos SET 
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
    public function getById($bean_textos)
    {
        try{
            $id = $bean_textos->getId();

            $this->query = "SELECT * FROM textos WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_textos)
    {
        try{
            $id = $bean_textos->getId();

            $this->query = "DELETE FROM textos WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>