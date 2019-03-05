 <?php

include_once 'functionsHelper.php';

include_once 'copiandofiles.php';
include_once 'generarmodelo.php';
include_once 'generarbean.php';
// include_once 'generandovistas.php';
include_once 'generandoControladores.php';
include_once 'generandoindex.php';
// include_once 'generandolayout.php';
// include_once 'generando_procedures.php';

include_once 'generateViews.php';

include_once 'templates/load_template.php';
// include_once 'templates/fnc_template.php';
// include_once 'templates/templateIndex.php';
// include_once 'templates/templateNuevo.php';
// echo templateIndex('demosss')  ;

// $sele = $_POST["sele"];

// $tipo_input = $_POST["tipo_input"];
// echo "<pre>";
// print_r($sele);
// print_r($tipo_input);
// echo "</pre>";

// return ;

if (isset($_POST["btenviar"])) {

    $sele = $_POST["sele"];
    $tabla = $_POST["nomtabla"];

    if (count($sele) > 0) {
        $consulta     = "Select ";
        $verre        = false;
        $arraytabla   = array();
        $arrayenlace  = array();
        $arrayva      = array();
        $arraycabeza  = array();
        $arrayenlace2 = array();
        $tipo_inputs  = array();
        for ($i = 0; $i < count($sele); $i++) {
            $romper = explode("/", $sele[$i]);
            if ($tabla != $_POST["ttabla" . $romper[1]]) {
                $verre          = true;
                $arraytabla[]   = $_POST["ttabla" . $romper[1]];
                $capturarenlace = explode("/", $_POST["tenlace" . $romper[1]]);
                $arrayenlace[]  = $capturarenlace[0];
                $arrayenlace2[] = $capturarenlace[1];
                $arrayva[]      = $romper[0];
                $consulta .= $_POST["ttabla" . $romper[1]] . "." . $capturarenlace[1] . " As '" . $_POST["tmostrar" . $romper[1]] . "',";
                $arraycabeza[] = $_POST["tmostrar" . $romper[1]];
                $tipo_inputs[] = $_POST["tipo_input" . $romper[1]];
            } else {
                $arraycabeza[] = $_POST["tmostrar" . $romper[1]];
                $tipo_inputs[] = $_POST["tipo_input" . $romper[1]];
                $consulta .= $_POST["ttabla" . $romper[1]] . "." . $romper[0] . " As '" . $_POST["tmostrar" . $romper[1]] . "',";
            }
        }
        $consulta = substr($consulta, 0, -1);
        $consulta .= " from " . $tabla;
        if ($verre) {
            for ($x = 0; $x < count($arraytabla); $x++) {
                $consulta .= " left join " . $arraytabla[$x] . " on " . $arraytabla[$x] . "." . $arrayenlace[$x] . "=" . $tabla . "." . $arrayva[$x];
            }
        }
        $atributos = trim($_POST["atributos"]);
        $atributos = substr($atributos, 0, -1);

        //atributos
        $atributos = trim($_POST["atributos"]);
        $atributos = substr($atributos, 0, -1);

        $romper_exp = explode("*", $atributos);
        $aatributos  = array();
        for ($i = 0; $i < count($romper_exp); $i++) {
            if (trim($romper_exp[$i]) != "") {
                $aatributos[] = $romper_exp[$i];
            }
        }

        $atributos = $aatributos ;
        // var_dump($arraycabeza);
        echo copiandofiles() . "<br/>";
        // echo generandolayout() . "<br/>";
        echo generarbean($atributos, $consulta, $tabla, $arraycabeza) . "<br/>";
        echo generarmodelo($atributos, $consulta, $tabla , $arraycabeza) . "<br/>";
        echo generandoControladores($atributos, $tabla,$arraycabeza) . "<br/>";

        echo generandoIndex($atributos, $arraycabeza, $tabla, $arraytabla, $arrayenlace, $arrayenlace2) . "<br/>";
        echo generateViews($atributos, $arraycabeza, $tabla, $arraytabla, $arrayenlace, $arrayenlace2, $tipo_inputs) . "<br/>";


        // echo generarprocedure($atributos, $consulta, $tabla) . "<br/>";
        // echo  generandoServiceJS($atributos, $tabla,$arraycabeza) ;
        echo '<br> <a href="index.php" > <<Regresar</a>';

    }
}
?>