<?php 
# Class Model Generada - ByPower @armandaepp 
class Categoria extends Conexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM categoria";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método SAVE
    public function save($bean_categoria)
    {
        try{
            $bean_categoria->setCreatedUp( HelperDate::timestampsBd() );

            $idcategoria = $bean_categoria->getIdcategoria();
            $nombre = $bean_categoria->getNombre();
            $url = $bean_categoria->getUrl();
            $imagen = $bean_categoria->getImagen();
            $publicar = $bean_categoria->getPublicar();
            $estado = $bean_categoria->getEstado();
            $created_up = $bean_categoria->getCreatedUp();

            $this->query = "INSERT INTO categoria
                            (
                                nombre,
                                url,
                                imagen,
                                publicar,
                                estado,
                                created_up
                            )
                            VALUES(
                                '$nombre',
                                '$url',
                                '$imagen',
                                '$publicar',
                                '$estado',
                                $created_up
                            ); ";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;


         }catch(exception $e){

             throw new Exception($e->getMessage());

         }
    }

    # Método Actualizar
    public function update($bean_categoria)
    {
        try{
            $idcategoria = $bean_categoria->getId();
            $nombre = $bean_categoria->getNombre();
            $url = $bean_categoria->getUrl();
            $imagen = $bean_categoria->getImagen();
            $publicar = $bean_categoria->getPublicar();

            $this->query = "UPDATE categoria SET 
                                nombre = '$nombre',
                                url = '$url',
                                imagen = '$imagen',
                                publicar = '$publicar'
                            WHERE idcategoria = '$idcategoria'
                            LIMIT 1 ;";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

         }catch(exception $e){

            throw new Exception($e->getMessage());

         }
    }

    # Método Eliminar(Actualizar Estado)
    public function updateEstado($bean_categoria)
    {
        try{
            $idcategoria = $bean_categoria->getId();
            $estado = $bean_categoria->getEstado();

            $this->query = "UPDATE categoria SET 
                                estado = '$estado'
                            WHERE idcategoria='$idcategoria'
                            LIMIT 1 ; ";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Buscar por ID
    public function find($bean_categoria)
    {
        try{
            $idcategoria = $bean_categoria->getId();

            $this->query = "SELECT * FROM categoria WHERE idcategoria = '$idcategoria' LIMIT 1; ";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_categoria)
    {
        try{
            $idcategoria = $bean_categoria->getId();

            $this->query = "DELETE FROM categoria WHERE idcategoria = '$idcategoria' LIMIT 1; ";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>