<?php
function generateViews($atributos, $arraycabeza, $tabla, $tablaref, $arrayenlace, $arrayenlace2, $tipo_inputs){
    
    $extension = ".php";
    $cmTable     = toCamelCase($tabla);
    $url     = toUrlFriendly($tabla);

    if (file_exists(ADMIN."/" . $url)) {
        $carpeta = ADMIN."/" . $url . "/";
    } else {
        mkdir(ADMIN."/" . $url, 0777);
        $carpeta = ADMIN."/" . $url . "/";
    }

    
    

    $versi=""; /*verificar esta variable*/
    if (!empty($tabla)) {



        # ARCHIVO LISTAR(INDEX)
        // $nomarchivo = $carpeta . "" . $tabla;
        $nomarchivo = $carpeta . "" . $url;
        $abrir      = fopen($nomarchivo . $extension, "w");

        $texto       = '<?php'. PHP_EOL ;
        $texto      .= ''. PHP_EOL ;
        $texto      .= '    require_once "../sesion_admin.php";'. PHP_EOL ;
        $texto      .= ''. PHP_EOL ;
        $texto      .= '    loginRedirect("../login.php");'. PHP_EOL ;
        $texto      .= ''. PHP_EOL ;
        $texto      .= '    require_once "../../app/autoload.php";'. PHP_EOL ;
        $texto      .= ''. PHP_EOL ;
        $texto      .= '    $'.$tabla.'_controller = new '.$cmTable.'Controller();'. PHP_EOL ;
        $texto      .= ''. PHP_EOL ;
        $texto      .= '    $data = $'.$tabla.'_controller->getAll();'. PHP_EOL ;
        $texto      .= ''. PHP_EOL ;
        $texto      .= '    $title_page = "'.toCamelCase($tabla).'s";'. PHP_EOL ;
        $texto      .= ''. PHP_EOL ;
        $texto      .= '?>'. PHP_EOL ;
        $texto      .= templateIndex($tabla, $atributos, $arraycabeza) ;

        fwrite($abrir, $texto);
        fclose($abrir);
        # END LISTAR

        # ARCHIVO NUEVO
        $nomarchivo = $carpeta . "nuevo";
        $abrir      = fopen($nomarchivo . $extension, "w");

        $texto      = templateNuevo($tabla, $atributos, $arraycabeza,$tipo_inputs) ;

        fwrite($abrir, $texto);
        fclose($abrir);
        # END NUEVO

        # ARCHIVO SAVE
        $nomarchivo = $carpeta . "save";
        $abrir      = fopen($nomarchivo . $extension, "w");

        $texto      = templateSave($tabla, $atributos, $arraycabeza) ;

        fwrite($abrir, $texto);
        fclose($abrir);
        # END SAVE


        # ARCHIVO EDITAR
        $nomarchivo = $carpeta . "editar";
        $abrir      = fopen($nomarchivo . $extension, "w");

        $texto      = templateEdit($tabla, $atributos, $tipo_inputs) ;

        fwrite($abrir, $texto);
        fclose($abrir);
        # END EDITAR

        # ARCHIVO UPDATE
        $nomarchivo = $carpeta . "update";
        $abrir      = fopen($nomarchivo . $extension, "w");

        $texto      = templateUpdate($tabla, $atributos, $arraycabeza) ;

        fwrite($abrir, $texto);
        fclose($abrir);
        # END UPDATE



        return "Vista Generada Correctamente";
    }
}
?>