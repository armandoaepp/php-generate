<?php 
# Class Model Generada - ByPower @armandaepp 
class Home extends ClsConexion {
    # CONSTRUCT 
    public function __construct($cnx  = null)
    {
        $this->conn = $cnx;
    }

    # Método getALl
    public function getAll()
    {
        try{

            $this->query = "SELECT * FROM home";

            $this->execute_query();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método Insertar
    public function save($bean_home)
    {
        try{
            $id = $bean_home->getId();
            $titulo = $bean_home->getTitulo();
            $url = $bean_home->getUrl();
            $imagen = $bean_home->getImagen();
            $titulo_2 = $bean_home->getTitulo2();
            $url_2 = $bean_home->getUrl2();
            $imagen_2 = $bean_home->getImagen2();
            $titulo_3 = $bean_home->getTitulo3();
            $url_3 = $bean_home->getUrl3();
            $imagen_3 = $bean_home->getImagen3();
            $convenios = $bean_home->getConvenios();
            $orden = $bean_home->getOrden();
            $estado = $bean_home->getEstado();
            $fecha = $bean_home->getFecha();

            $this->query = "INSERT INTO home
                            (
                                titulo,
                                url,
                                imagen,
                                titulo_2,
                                url_2,
                                imagen_2,
                                titulo_3,
                                url_3,
                                imagen_3,
                                convenios,
                                orden,
                                estado,
                                fecha
                            )
                            VALUES(
                                '$titulo',
                                '$url',
                                '$imagen',
                                '$titulo_2',
                                '$url_2',
                                '$imagen_2',
                                '$titulo_3',
                                '$url_3',
                                '$imagen_3',
                                '$convenios',
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
    public function update($bean_home)
    {
        try{
            $id = $bean_home->getId();
            $titulo = $bean_home->getTitulo();
            $url = $bean_home->getUrl();
            $imagen = $bean_home->getImagen();
            $titulo_2 = $bean_home->getTitulo2();
            $url_2 = $bean_home->getUrl2();
            $imagen_2 = $bean_home->getImagen2();
            $titulo_3 = $bean_home->getTitulo3();
            $url_3 = $bean_home->getUrl3();
            $imagen_3 = $bean_home->getImagen3();
            $convenios = $bean_home->getConvenios();
            $orden = $bean_home->getOrden();
            $estado = $bean_home->getEstado();
            $fecha = $bean_home->getFecha();

            $this->query = "UPDATE home SET 
                                titulo = '$titulo,
                                url = '$url,
                                imagen = '$imagen,
                                titulo_2 = '$titulo_2,
                                url_2 = '$url_2,
                                imagen_2 = '$imagen_2,
                                titulo_3 = '$titulo_3,
                                url_3 = '$url_3,
                                imagen_3 = '$imagen_3,
                                convenios = '$convenios,
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
    public function updateEstado($bean_home)
    {
        try{
            $id = $bean_home->getId();
            $estado = $bean_home->getEstado();

            $this->query = "UPDATE home SET 
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
    public function getById($bean_home)
    {
        try{
            $id = $bean_home->getId();

            $this->query = "SELECT * FROM home WHERE id = '$id' LIMIT 1";

            $this->execute_find();

            $data = $this->rows ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

    # Método deleteById
    public function deleteById($bean_home)
    {
        try{
            $id = $bean_home->getId();

            $this->query = "DELETE FROM home WHERE id = '$id' LIMIT 1";

            $this->execute_query();

            $data = $this->status_exe  ;

            return $data;

        }catch(exception $e){

            throw new Exception($e->getMessage());

        }
    }

}
?>