<?php
function generateViews($atributos, $arraycabeza, $tabla, $tablaref, $arrayenlace, $arrayenlace2){


    if (file_exists(ADMIN."/" . $tabla)) {
        $carpeta = ADMIN."/" . $tabla . "/";
    } else {
        mkdir(ADMIN."/" . $tabla, 0777);
        $carpeta = ADMIN."/" . $tabla . "/";
    }

    $extension = ".php";
    $cmTable     = toCamelCase($tabla);
    $versi=""; /*verificar esta variable*/
    if (!empty($tabla)) {



        # ARCHIVO LISTAR(INDEX)
        $nomarchivo = $carpeta . "" . $tabla;
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

        $texto      = templateNuevo($tabla, $atributos, $arraycabeza) ;

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

        $texto      = templateEdit($tabla, $atributos, $arraycabeza) ;

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