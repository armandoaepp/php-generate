<?php
function generarmodelo($atributos, $cListar, $tabla, $name_set_get)
{
    // $carpeta   = "./app/models/";
    $carpeta   = MODELS."/";

    $extension = ".php";
    // $clase     = ucwords($tabla);
    $clase     = toCamelCase($tabla);

    $texto = '';
    if (!empty($tabla))
    {
        $nomarchivo = $carpeta . "" . $clase ;
        $abrir      = fopen($nomarchivo . $extension, "w");




        $texto .= '<?php ' . PHP_EOL;

        $texto .= '' . PHP_EOL ;
        $texto .= '/**' . PHP_EOL ;
        $texto .= ' * [Class Controller Generada]' . PHP_EOL ;
        $texto .= ' * Autor: Armando E. Pisfil Puemape' . PHP_EOL ;
        $texto .= ' * twitter: @armandoaepp' . PHP_EOL ;
        $texto .= ' * email: armandoaepp@gmail.com' . PHP_EOL ;
        $texto .= '*/' . PHP_EOL ;
        $texto .= '' . PHP_EOL ;

        $texto .= 'class ' . $clase . ' extends Connection {' . PHP_EOL;

        # contructor
        $texto .= '  # CONSTRUCT ' . PHP_EOL;
        $texto .= '  public function __construct($cnx  = null)' . PHP_EOL;
        $texto .= '  {' . PHP_EOL;
        $texto .= '    $this->conn = $cnx;' . PHP_EOL;
        $texto .= '  }' . PHP_EOL;


        # METODOS
        //  START METODO LIST
        $texto .= PHP_EOL;
        $texto .= '  # Método getALl' . PHP_EOL;
        $texto .= '  public function getAll()' . PHP_EOL;
        $texto .= '  {' . PHP_EOL;

        $texto .= '    try{' . PHP_EOL;
        // START SQL

             $texto .= '' . PHP_EOL;

             //QUERY
            $concat = "";
            $concat .= '      $this->query = "SELECT * FROM '.$tabla.'";';
            //end QUERY

            $texto .=  $concat.PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      $this->executeQuery();' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      $data = $this->rows ;' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      return $data;' . PHP_EOL;
            $texto .= PHP_EOL;

            $texto .= '    }catch(exception $e){' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      throw new Exception($e->getMessage());' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '    }' . PHP_EOL;

        $texto .= '  }' . PHP_EOL;
        $texto .= PHP_EOL;
        //  END METODO LIST


        $texto .= '  # Método SAVE' . PHP_EOL;
        //Inicia Metodo INSERTAR
        $texto .= '  public function save($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '  {' . PHP_EOL;

        $texto .= '    try{' . PHP_EOL;

        if (in_array('created_up', $atributos) ) {
            $texto .= '      $bean_'.$tabla.'->set' . toCamelCase("created_up") . '( HelperDate::timestampsBd() );' . PHP_EOL;
            $texto .= '' . PHP_EOL;
        }

        for ($i = 0; $i < count($atributos); $i++) {
            $texto .= '      $'.$atributos[$i]  .' = $bean_'.$tabla.'->get' . toCamelCase($atributos[$i]) . '();' . PHP_EOL;
        }
        $texto .= '' . PHP_EOL;

        //comenzamos a insertar Registros


        $concat = "";
        $campos = "";
        for ($i = 1; $i < count($atributos); $i++) {
            $campos .= "                        " . $atributos[$i] ;

            if ($atributos[$i] == "created_up") {
                $concat .= "                        " . '$' . $atributos[$i]."" ;
            }
            else{
                $concat .= "                        '" . '$' . $atributos[$i]."'" ;
            }

            if ( $i < (count($atributos) - 1) )
            {
                $campos .= ",". PHP_EOL;
                $concat .= ",". PHP_EOL;
            }
        }

        // $texto .= substr($concat, 0, -1);
        $texto .= '      $this->query = "INSERT INTO ' . $tabla.PHP_EOL;
        $texto .= '                      ('.PHP_EOL;
        $texto .= ''                        . $campos.''.PHP_EOL;
        $texto .= '                      )'.PHP_EOL;
        $campos .= PHP_EOL;
        $texto .= '                      VALUES('.PHP_EOL;
        $texto .= $concat;
        $texto .= PHP_EOL;
        $texto .= '                      ); ";' . PHP_EOL;
        $texto .= PHP_EOL;

        $texto .= '      $this->executeQuery();' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '      $data = $this->status_exe  ;' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '      return $data;' . PHP_EOL;
        $texto .= PHP_EOL;
        //fin de comenzar a insertar
        $texto .= PHP_EOL;
        $texto .= '    }catch(exception $e){' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '      throw new Exception($e->getMessage());' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '    }' . PHP_EOL;
        $texto .= '  }' . PHP_EOL;
        // fin del merodo INSERTAR


        $texto .= PHP_EOL;
        $texto .= '  # Método Actualizar' . PHP_EOL;
        //Inicia Metodo Actualizar
        $texto .= '  public function update($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '  {' . PHP_EOL;
        $texto .= '    try{' . PHP_EOL;

            for ($i = 0; $i < count($atributos); $i++) {
                if ( !itemsNotSetController($atributos[$i]) ){
                $texto .= '      $'.$atributos[$i]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[$i]) . '();' . PHP_EOL;
                }
            }

            $texto .= '' . PHP_EOL;

             //QUERY
             $concat ='      $this->query = "UPDATE '.$tabla.' SET '. PHP_EOL;
             for ($i = 1; $i < count($atributos); $i++) {
                // $concat.= '                                '.$atributos[$i]." = '$".$atributos[$i];

                if ( !itemsNotUpdateMetodo($atributos[$i]) ){
                    $concat.= '                        '.$atributos[$i]." = '$".$atributos[$i]."',". PHP_EOL;
                }

             }

             $concat = rtrim($concat);
             $concat = substr($concat,0,-1);
             $concat = $concat ;
             $concat.= PHP_EOL;
             $concat.="                      WHERE ".$atributos[0]." = '$".$atributos[0]."'";
             $concat.= PHP_EOL;
             $concat.="                      LIMIT 1 ;".'";';
             $texto.=$concat.PHP_EOL;
             $texto.= PHP_EOL;
         // end QUERY


            $texto .= '      $this->executeQuery();' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      $data = $this->status_exe  ;' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      return $data;' . PHP_EOL;
            $texto .= PHP_EOL;
        //fin de comenzar a actualizar
        $texto .= '    }catch(exception $e){' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '      throw new Exception($e->getMessage());' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '    }' . PHP_EOL;
        $texto .= '  }' . PHP_EOL;

        if (in_array('estado', $atributos))
        {

            $texto .= PHP_EOL;
            //METODO Actualizar Estado
            $texto .= '  # Método Eliminar(Actualizar Estado)' . PHP_EOL;
            $texto .= '  public function updateEstado($bean_'.$tabla.')' . PHP_EOL;
            $texto .= '  {' . PHP_EOL;
            $texto .= '    try{' . PHP_EOL;
            //SQL

                $texto .= '      $'.$atributos[0]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[0]). '();' . PHP_EOL;
                // $texto .= '            $'.$atributos[count($atributos)-1]  .' = $bean_'.$tabla.'->get' . ucwords($name_set_get[count($atributos)-1]) . '();' . PHP_EOL;
                $texto .= '      $estado = $bean_'.$tabla.'->getEstado();' . PHP_EOL;
                $texto .= '' . PHP_EOL;

                //QUERY
                $concat = "";
                $concat .= '      $this->query = "UPDATE '.$tabla.' SET ';
                $concat .= PHP_EOL;
                //  $concat.= '            '.$atributos[count($atributos)-1]." = '".''.$atributos[count($atributos)-1];
                $concat.= '                        estado'." = '".'$estado'."'";
                $concat .= PHP_EOL;
                $concat.="                      WHERE ".$atributos[0]."='$".$atributos[0]."'";
                $concat.= PHP_EOL;
                $concat.="                      LIMIT 1 ; ".'";';
                $texto .=  $concat.PHP_EOL;

                $texto .= PHP_EOL;
                $texto .= '      $this->executeQuery();' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '      $data = $this->status_exe  ;' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '      return $data;' . PHP_EOL;
                $texto .= PHP_EOL;

            //END SQL
            $texto .= '    }catch(exception $e){' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      throw new Exception($e->getMessage());' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '    }' . PHP_EOL;
            $texto .= '  }' . PHP_EOL;
            // fin del metodo actualizar estado
        }


        //  START METODO BUSCAR POR ID
        $texto .= PHP_EOL;
        $texto .= '  # Método Buscar por ID' . PHP_EOL;
        $texto .= '  public function find($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '  {' . PHP_EOL;
        $texto .= '    try{' . PHP_EOL;
        // START SQL

        $texto .= '      $'.$atributos[0]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[0]) . '();' . PHP_EOL;
        $texto .= '' . PHP_EOL;

        //QUERY
        $concat = "";
        $concat .= '      $this->query = "SELECT * FROM '.$tabla;
        $concat.=" WHERE ".$atributos[0]." = '$".$atributos[0]."'".' LIMIT 1; ";';
        //end QUERY
        $texto .=  $concat.PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '      $this->executeFind();' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '      $data = $this->rows ;' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '      return $data;' . PHP_EOL;
        $texto .= PHP_EOL;

        // END SQL

        $texto .= '    }catch(exception $e){' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '      throw new Exception($e->getMessage());' . PHP_EOL;
        $texto .= PHP_EOL;
        $texto .= '    }' . PHP_EOL;
        $texto .= '  }' . PHP_EOL;
        //  END METODO BUSCAR POR ID


        //metodo DELETE(ELIMINAR DE LA BASE DE DATOS)
        $texto .= PHP_EOL;
        $texto .= '  # Método deleteById' . PHP_EOL;
        $texto .= '  public function deleteById($bean_'.$tabla.')' . PHP_EOL;
        $texto .= '  {' . PHP_EOL;
        $texto .= '    try{' . PHP_EOL;
        //SQL

            $texto .= '      $'.$atributos[0]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[0]). '();' . PHP_EOL;
            $texto .= '' . PHP_EOL;
            //QUERY
            $concat = "";
            $concat .= '      $this->query = "DELETE FROM '.$tabla;
            $concat .= PHP_EOL;
            $concat.="                      WHERE ".$atributos[0]." = '$".$atributos[0]."'".' LIMIT 1; ";';
            $texto .=  $concat.PHP_EOL;
            $texto .= '' . PHP_EOL;
            //endQUERY

            $texto .= '      $this->executeQuery();' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      $data = $this->status_exe  ;' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      return $data;' . PHP_EOL;
            $texto .= PHP_EOL;

            $texto .= '    }catch(exception $e){' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '      throw new Exception($e->getMessage());' . PHP_EOL;
            $texto .= PHP_EOL;
            $texto .= '    }' . PHP_EOL;
        $texto .= '  }' . PHP_EOL;
        // fin del metodo Eliminar actualizar
        $texto .= PHP_EOL;

        if ( in_array('publicar', $atributos) )
        {
            //METODO UPDATE PUBLICAR
            $texto .= PHP_EOL;
            $texto .= '  # Método updatePublish' . PHP_EOL;
            $texto .= '  public function updatePublish($bean_'.$tabla.')' . PHP_EOL;
            $texto .= '  {' . PHP_EOL;
            $texto .= '    try{' . PHP_EOL;
            //SQL

                $texto .= '      $'.$atributos[0]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[0]). '();' . PHP_EOL;
                $texto .= '      $publicar = $bean_'.$tabla.'->getPublicar() ;' . PHP_EOL;

                $texto .= '' . PHP_EOL;

                //QUERY
                $concat = "";
                $concat .= '      $this->query = "UPDATE '.$tabla.' SET ';
                $concat .= PHP_EOL;
                $concat.= '                        publicar'." = '".'$publicar'."'";
                $concat .= PHP_EOL;
                $concat.="                      WHERE ".$atributos[0]." = '$".$atributos[0]."'";
                $concat.= PHP_EOL;
                $concat.="                      LIMIT 1 ; ".'";';
                $texto .=  $concat.PHP_EOL;
                $texto .=  PHP_EOL;
                //end QUERY

                $texto .= '      $this->executeQuery();' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '      $data = $this->status_exe  ;' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '      return $data;' . PHP_EOL;
                $texto .= PHP_EOL;

                $texto .= '    }catch(exception $e){' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '      throw new Exception($e->getMessage());' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '    }' . PHP_EOL;
            $texto .= '  }' . PHP_EOL;
            // END UPDATE PUBLICAR
            $texto .= PHP_EOL;

            //METODO GETPUBLISHED
            $texto .= PHP_EOL;
            $texto .= '  # Método getPublished' . PHP_EOL;
            $texto .= '  public function getPublished($bean_'.$tabla.')' . PHP_EOL;
            $texto .= '  {' . PHP_EOL;
            $texto .= '    try{' . PHP_EOL;
            //SQL

                // $texto .= '            $'.$atributos[0]  .' = $bean_'.$tabla.'->get' . toCamelCase($name_set_get[0]). '();' . PHP_EOL;
                $texto .= '      $publicar = $bean_'.$tabla.'->getPublicar() ;' . PHP_EOL;

                $texto .= '' . PHP_EOL;

                //QUERY
                $concat = "";
                $concat .= '      $this->query = "SELECT * FROM '.$tabla.'';
                $concat .= PHP_EOL;
                $concat.= '                      WHERE publicar'." = '".'$publicar'."'";
                $concat.= PHP_EOL;
                $concat.="                      AND estado = 1 ; ".'";';
                $texto .=  $concat.PHP_EOL;
                $texto .=  PHP_EOL;
                //end QUERY

                $texto .= '      $this->executeQuery();' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '      $data = $this->rows ;' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '      return $data;' . PHP_EOL;
                $texto .= PHP_EOL;

                $texto .= '    }catch(exception $e){' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '      throw new Exception($e->getMessage());' . PHP_EOL;
                $texto .= PHP_EOL;
                $texto .= '    }' . PHP_EOL;
            $texto .= '  }' . PHP_EOL;
            // END  GETPUBLISHED
            $texto .= PHP_EOL;

        }




        $texto .= '}' . PHP_EOL;
        /* $texto .= '?>'; */
        fwrite($abrir, $texto);
        fclose($abrir);
        return "Clase Generada Correctamente";
    }
}

function explodeToCamelCase($string) {
    $value = explode('_', $string) ;
}