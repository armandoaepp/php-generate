<?php
function generarbean($atributos, $cListar, $tabla,  $nameMetodo )
{
    // $carpeta   = "./app/beans/";
    $carpeta   = BEANS."/";

    $extension = ".php";

    $cmTable     = toCamelCase($tabla);
    $clase     = "Bean" .$cmTable;

    $prefix =  generatePrefixTable( $tabla ) ;
    $prefix = !empty($prefix) ? $prefix."_" : "" ;

    if (!empty($tabla)) {
        $nomarchivo = $carpeta . "Bean" . $cmTable;
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php ' . PHP_EOL;

        $texto .= '' . PHP_EOL ;
        $texto .= '/**' . PHP_EOL ;
        $texto .= ' * [Class Bean Generada]' . PHP_EOL ;
        $texto .= ' * Autor: Armando E. Pisfil Puemape' . PHP_EOL ;
        $texto .= ' * twitter: @armandoaepp' . PHP_EOL ;
        $texto .= ' * email: armandoaepp@gmail.com' . PHP_EOL ;
        $texto .= '*/' . PHP_EOL ;
        $texto .= '' . PHP_EOL ;

        $texto .= 'class ' . $clase . '{' . PHP_EOL;
        $texto .= '  # Constructor' . PHP_EOL;
        // $texto .= 'public function ' . $clase . '(){}' . PHP_EOL;
        $texto .= '  public function __construct(){}' . PHP_EOL;
        $texto .= '' . PHP_EOL;
        $texto .= '  # Atributos' . PHP_EOL;
        for ($i = 0; $i < count($atributos); $i++) {
            // if ( $atributos[$i] == "estado") {
            $value_def = itemsDefaultBeans($atributos[$i], $prefix) ;
            if ( $value_def != false ) {
                $texto .= '  private $' . $atributos[$i] . ' = '. $value_def .' ;' . PHP_EOL;
            }
            else{
                $texto .= '  private $' . $atributos[$i] . ';' . PHP_EOL;

            }

        }

        $texto .= '' . PHP_EOL;
        $texto .= '  #Auto Increment Item' . PHP_EOL;

        if (in_array('item', $atributos) )
        {
          $texto .= '  public $item_autoincrement = true;' . PHP_EOL;
        }

        $texto .= '' . PHP_EOL;

        $texto .= '  # METODOS' . PHP_EOL;
        for ($i = 0; $i < count($atributos); $i++) {
            // $texto .= '    public function set' . ucwords($nameMetodo[$i]) . '($' . $atributos[$i] . '_){ $this->' . $atributos[$i] . '=$' . $atributos[$i] . '_;}' . PHP_EOL;
            $texto .= '  public function set' . toCamelCase($nameMetodo[$i]) . '($' . $atributos[$i] . '_)' . PHP_EOL;
            $texto .= '  {' . PHP_EOL;
            $texto .= '    $this->' . $atributos[$i] . ' = Validation::validate( $' . $atributos[$i] . '_ );' . PHP_EOL;
            $texto .= '  }' . PHP_EOL;
            $texto .= PHP_EOL;
            // $texto .= '    public function get' . ucwords($nameMetodo[$i]) . '(){ return $this->' . $atributos[$i] . ';}' . PHP_EOL;
            $texto .= '  public function get' . toCamelCase($nameMetodo[$i]) . '()' . PHP_EOL;
            $texto .= '  {' . PHP_EOL;

            if ($nameMetodo[$i] == 'item' )
            {

              $texto .= '    if(empty($this->item) && $this->item_autoincrement)' . PHP_EOL;
              $texto .= '    {' . PHP_EOL;
              $texto .= '      $'.$tabla.'  = new '.$cmTable.'();' . PHP_EOL;

              $texto .= '      $data = $'.$tabla.'->countRows() ;' . PHP_EOL;

              $texto .= '      if(!empty($data))' . PHP_EOL;
              $texto .= '      {' . PHP_EOL;
              $texto .= '          $this->item = $data["num_rows"] + 1;' . PHP_EOL;
              $texto .= '      }' . PHP_EOL;
              $texto .= '    }' . PHP_EOL;
            }

            if ($nameMetodo[$i] == 'created_at' )
            {

              $texto .= '    if(empty($this->created_at))' . PHP_EOL;
              $texto .= '    {' . PHP_EOL;
              $texto .= '      $this->created_at = HelperDate::timestampsBd();' . PHP_EOL;
              // $bean_laboral->setCreatedUp( HelperDate::timestampsBd() );
              $texto .= '    }' . PHP_EOL;
            }

            $texto .= '    return $this->' . $atributos[$i] . ';' . PHP_EOL;
            $texto .= '  }' . PHP_EOL;
            $texto .= PHP_EOL;
        }


        $texto .= '}' . PHP_EOL;
        /* $texto .= '?>'; */
        fwrite($abrir, $texto);
        fclose($abrir);
        return "Clase Generada Correctamente";
    }
}
?>