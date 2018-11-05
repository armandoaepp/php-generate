<?php
function generandoIndex($atributos, $name_head, $tabla, $tablaref, $arrayenlace, $arrayenlace2)
{

    $paramss = "";
        if (count($atributos) > 0) {
                    for ($i = 0; $i < count($atributos); $i++) {
                        if ($atributos[$i] != "estado") {
                            $paramss .= '               \''.strtolower($atributos[$i]).'\'=> $'.strtolower($atributos[$i]).','. PHP_EOL;
                        }
                    }
                }
    $paramss = trim($paramss, ',') ;

    // $carpeta   = "./App/Api/";


   /*  if (file_exists("./app/api/" . $tabla)) {
        $carpeta = "./app/api/" . $tabla . "/";
    } else {
        mkdir("./app/api/" . $tabla, 0777);
        $carpeta = "./app/api/" . $tabla . "/";
    } */

    $cmTable     = toCamelCase($tabla);
    $url     = toUrlFriendly($tabla);

    if (file_exists(API."/". $url)) {
        $carpeta = API."/". $url . "/";
    } else {
        mkdir(API."/". $url, 0777);
        $carpeta = API."/". $url . "/";
    }



    $extension = ".php";
    if (!empty($tabla)) {
        $nomarchivo = $carpeta . "Index".$cmTable;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php ' . PHP_EOL;
        // $texto .= 'ob_start();' . PHP_EOL;
        $texto .= '# Autor: Armando Enrique Pisfil Puemape tw: @armandoaepp' . PHP_EOL;
         $texto .= "    header('content-type: application/json; charset=utf-8');" . PHP_EOL;
         $texto .= "    require_once '../../autoload.php';" . PHP_EOL;
        $texto .= "" . PHP_EOL;


        $texto .= 'if(isset($_GET["accion"]))' . PHP_EOL;
        $texto .= '{' . PHP_EOL;
        $texto .= '    $evento = $_GET["accion"];' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= 'elseif (isset($_POST))' . PHP_EOL;
        $texto .= '{' . PHP_EOL;

        $texto .= '    $inputs = json_decode(file_get_contents("php://input"));' . PHP_EOL;
        $texto .= '    $evento = $inputs->accion;' . PHP_EOL;
        $texto .= '}' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        $texto .= 'switch($evento)' . PHP_EOL;
        $texto .= '{' . PHP_EOL;

        # EVENTE list
        $texto .= '    case "list":' . PHP_EOL;
        $texto .= '        try' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
        $texto .= "" . PHP_EOL;
        $texto .= '            $data = $'.$tabla.'_controller->getAll() ;' . PHP_EOL;
        $texto .= "" . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Listado correcto\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE set
        $texto .= '    case "set":' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;
        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $objConexion = new Conexion();' . PHP_EOL;
        $texto  .= '            $cnx = $objConexion->get_connection();' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;
        $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller($cnx) ; ' . PHP_EOL;
        $texto .= '            $objConexion->beginTransaction();' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;


                if (count($atributos) > 0) {
                    for ($i = 0; $i < count($atributos); $i++) {
                        if ($atributos[$i] != "estado") {
                            $texto .= '            $'.strtolower($atributos[$i]).' = $inputs->'.($atributos[$i]).';'. PHP_EOL;
                        }
                    }
                }
        $texto  .= '        ' . PHP_EOL;


        $texto  .= '            $params = array(' . PHP_EOL;
        $texto  .=  $paramss;

        $texto  .= '            ) ; ' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;

        $texto .= '            $data = $'.$tabla.'_controller->save($params) ;' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '            $objConexion->commit();' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '            $objConexion->rollback();' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;

        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;

        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;


        # EVENTE upd
        $texto .= '    case "upd":' . PHP_EOL;

        $texto  .= '        try' . PHP_EOL;
        $texto  .= '        {' . PHP_EOL;
        $texto  .= '            $objConexion = new Conexion();' . PHP_EOL;
        $texto  .= '            $cnx = $objConexion->get_connection();' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;
        $texto  .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller($cnx) ; ' . PHP_EOL;
        $texto  .= '            $objConexion->beginTransaction();' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;


                if (count($atributos) > 0) {
                    for ($i = 0; $i < count($atributos); $i++) {
                        if ($atributos[$i] != "estado") {
                            $texto .= '            $'.strtolower($atributos[$i]).' = $inputs->'.($atributos[$i]).';'. PHP_EOL;
                        }
                    }
                }
        $texto  .= '        ' . PHP_EOL;

        $texto  .= '            $params = array(' . PHP_EOL;
        $texto  .=  $paramss;

        $texto  .= '            ) ; ' . PHP_EOL;
        $texto  .= '        ' . PHP_EOL;

        $texto .= '            $data = $'.$tabla.'_controller->update($params) ;' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '            $objConexion->commit();' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '            $objConexion->rollback();' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;

        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;



        # EVENTE UPDATE ESTADO
        $texto .= '    case "updestado":' . PHP_EOL;
        $texto .= '        try' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        if (count($atributos) > 0) {
            $texto .= '            $'.strtolower($atributos[0]).' = $inputs->'.($atributos[0]).';'. PHP_EOL;
        }
        $texto .= '            $estado = $inputs->estado;'. PHP_EOL;

        $texto  .= '' . PHP_EOL;
        $texto  .= '            $params = array(' . PHP_EOL;
        $texto .= '               \''.strtolower($atributos[0]).'\'=> $'.strtolower($atributos[0]).','. PHP_EOL;
        $texto .= '               \'estado\'=> $estado,'. PHP_EOL;
        $texto  .= '            ) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = $'.$tabla.'_controller->updateEstado( $params ) ;' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;


        # EVENTE find
        $texto .= '    case "find":' . PHP_EOL;
        $texto .= '        try' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $id = $_GET["id"] ;' . PHP_EOL;
        $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = $'.$tabla.'_controller->find( $id) ;' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        # EVENTE DELETE
        $texto .= '    case "delete":' . PHP_EOL;
        $texto .= '        try' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        if (count($atributos) > 0) {
             $texto .= '            $'.strtolower($atributos[0]).' = $inputs->id;'. PHP_EOL;
        }
        $texto .= '            $estado = 0; '. PHP_EOL;


        $texto  .= '' . PHP_EOL;
        $texto  .= '            $params = array(' . PHP_EOL;
        $texto .= '               \''.strtolower($atributos[0]).'\'=> $'.strtolower($atributos[0]).','. PHP_EOL;
        $texto .= '               \'estado\'=> $estado,'. PHP_EOL;
        $texto  .= '            ) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto .= '            $' . $tabla . '_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '
            $historial = (int)isset($inputs->historial) ? $inputs->historial : 1 ;

            if( $historial == 0 )
            {

                $' . $tabla . ' = $' . $tabla . '_controller->find($params);

                $data = $' . $tabla . '_controller->deleteById($params);

                if( !empty($' . $tabla . ') && $data )
                {
                    $imagen = $' . $tabla . '["imagen"] ;
                    UploadFiles::removeFile($img_bd) ;
                }

            }
            else
            {
                $data = $' . $tabla . '_controller->updateEstado($params);
            } '. PHP_EOL;

        $texto .= '' . PHP_EOL;
        $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        $texto .= '        }' . PHP_EOL;
        $texto .= '        catch (Exception $e)' . PHP_EOL;
        $texto .= '        {' . PHP_EOL;
        $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
        $texto .= '        }' . PHP_EOL;
        $texto .= '        ' . PHP_EOL;
        $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
        $texto .= '        print_r($jsn) ;' . PHP_EOL;
        $texto .= '    break;' . PHP_EOL;
        $texto .= "" . PHP_EOL;

        if ( in_array('publicar', $atributos))
        {
            # EVENTE UPDATE PUBLICAR
            $texto .= '    case "publish":' . PHP_EOL;
            $texto .= '        try' . PHP_EOL;
            $texto .= '        {' . PHP_EOL;
            $texto .= '' . PHP_EOL;

            if (count($atributos) > 0) {
                // $texto .= '            $'.strtolower($atributos[0]).' = $inputs->'.($atributos[0]).';'. PHP_EOL;
                $texto .= '            $'.strtolower($atributos[0]).' = $inputs->id;'. PHP_EOL;
            }
            $texto .= '            $publicar = $inputs->publicar;'. PHP_EOL;
            $texto .= '' . PHP_EOL;
            $texto .= '            if($publicar == "N"){'. PHP_EOL;
            $texto .= '                $publicar = "S" ;'. PHP_EOL;
            $texto .= '            }else{'. PHP_EOL;
            $texto .= '                $publicar = "N" ;'. PHP_EOL;
            $texto .= '            }'. PHP_EOL;
            $texto  .= '' . PHP_EOL;
            $texto  .= '            $params = array(' . PHP_EOL;
            $texto .= '               \''.strtolower($atributos[0]).'\'=> $'.strtolower($atributos[0]).','. PHP_EOL;
            $texto .= '               \'publicar\'=> $publicar,'. PHP_EOL;
            $texto  .= '            ) ; ' . PHP_EOL;
            $texto  .= '' . PHP_EOL;


            $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
            $texto .= '' . PHP_EOL;
            $texto .= '            $data = $'.$tabla.'_controller->updatePublish( $params ) ;' . PHP_EOL;
            $texto .= '' . PHP_EOL;
            $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
            $texto .= '' . PHP_EOL;

            $texto .= '        }' . PHP_EOL;
            $texto .= '        catch (Exception $e)' . PHP_EOL;
            $texto .= '        {' . PHP_EOL;
            $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
            $texto .= '        }' . PHP_EOL;
            $texto .= '        ' . PHP_EOL;
            $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
            $texto .= '        print_r($jsn) ;' . PHP_EOL;
            $texto .= '    break;' . PHP_EOL;
            $texto .= "" . PHP_EOL;

            # EVENTE UPDATE ESTADO
            $texto .= '    case "published":' . PHP_EOL;
            $texto .= '        try' . PHP_EOL;
            $texto .= '        {' . PHP_EOL;
            $texto .= '' . PHP_EOL;

            // if (count($atributos) > 0) {
            //     $texto .= '            $'.strtolower($atributos[0]).' = $inputs->'.($atributos[0]).';'. PHP_EOL;
            // }
            $texto .= '            $publicar = $inputs->publicar;'. PHP_EOL;

            $texto  .= '' . PHP_EOL;
            $texto  .= '            $params = array(' . PHP_EOL;
            $texto .= '               \'publicar\'=> $publicar,'. PHP_EOL;
            $texto  .= '            ) ; ' . PHP_EOL;
            $texto  .= '' . PHP_EOL;
            $texto .= '            $'.$tabla.'_controller = new '.$cmTable.'Controller() ; ' . PHP_EOL;
            $texto .= '' . PHP_EOL;
            $texto .= '            $data = $'.$tabla.'_controller->getPublished( $params ) ;' . PHP_EOL;
            $texto .= '' . PHP_EOL;
            $texto .= '            $data = array(\'msg\' => \'Operación Correcta\', \'error\' => false, \'data\' => $data);' . PHP_EOL;
            $texto .= '' . PHP_EOL;

            $texto .= '        }' . PHP_EOL;
            $texto .= '        catch (Exception $e)' . PHP_EOL;
            $texto .= '        {' . PHP_EOL;
            $texto  .= '            $data = array(\'msg\' => \'Error al consultar datos\'. $e->getMessage(), \'error\' => true, \'data\' => array());' . PHP_EOL;
            $texto .= '        }' . PHP_EOL;
            $texto .= '        ' . PHP_EOL;
            $texto .= '        $jsn  = json_encode($data);' . PHP_EOL;
            $texto .= '        print_r($jsn) ;' . PHP_EOL;
            $texto .= '    break;' . PHP_EOL;
            $texto .= "" . PHP_EOL;


        }

        // END CASE


        $texto .= '}' . PHP_EOL;
        // $texto .= 'ob_flush();' . PHP_EOL;

        /* $texto .= '?>'; */

        fwrite($abrir, $texto);
        fclose($abrir);
        return "Index Generado Correctamente";
    }
}
?>