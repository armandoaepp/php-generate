<?php
function generandoControladores($atributos, $tabla, $nameatri)
{

    // $carpeta = "./app/controllers/";
    $carpeta   = CONTROLLERS."/";

    $cmTable = toCamelCase($tabla);

    $prefix =  generatePrefixTable( $tabla ) ;
    $prefix = !empty($prefix) ? $prefix."_" : "" ;

    // $estado_name = "estado";
    $estado_name = !empty(in_array("estado", $atributos) ) ? 'estado' : $prefix . 'estado';
    $publicar_name = !empty(in_array("publicar", $atributos) ) ? 'publicar' : $prefix . 'publicar';



    $extension = ".php";
    if (!empty($tabla)) {
        $nomarchivo = $carpeta .$cmTable."Controller";
        $abrir      = fopen($nomarchivo . $extension, "w");
        $texto      = '<?php' . PHP_EOL;

        $texto .= '' . PHP_EOL ;
        $texto .= '/**' . PHP_EOL ;
        $texto .= ' * [Class Controller Generada]' . PHP_EOL ;
        $texto .= ' * Autor: Armando E. Pisfil Puemape' . PHP_EOL ;
        $texto .= ' * twitter: @armandoaepp' . PHP_EOL ;
        $texto .= ' * email: armandoaepp@gmail.com' . PHP_EOL ;
        $texto .= '*/' . PHP_EOL ;
        $texto .= '' . PHP_EOL ;

        $texto .= ' class '.$cmTable.'Controller' . PHP_EOL;
        $texto  .= '{' . PHP_EOL;
        # CONTRUCTOR
        $texto  .= '  private $cnx;' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '  public function __construct($cnx = null)' . PHP_EOL;
        $texto  .= '  {' . PHP_EOL;
        $texto  .= '    $this->cnx = $cnx;' . PHP_EOL;
        $texto  .= '  }' . PHP_EOL;
        $texto  .= '    ' . PHP_EOL;



        # Method get
        $texto  .= '  public function getAll()' . PHP_EOL;
        $texto  .= '  {' . PHP_EOL;
        $texto  .= '    try' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '      $'.($tabla).'  = new '.$cmTable.'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      $data = $'.($tabla).'->getAll();' . PHP_EOL;
        // $texto .= '      $data = Serialize::unSerializeArray($data);' . PHP_EOL;
        // $texto .= '        ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      return $data ;'. PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '    catch (Exception $e)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '      throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '  }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        # Method get
        $texto  .= '  public function getByEstado( $params = array() )' . PHP_EOL;
        $texto  .= '  {' . PHP_EOL;
        $texto  .= '    try' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '      extract($params) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      $'.($tabla).'  = new '.$cmTable.'();' . PHP_EOL;

        $texto  .= '            ' . PHP_EOL;
        $texto  .= '      $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        // $texto  .= '      $bean_'.($tabla).'->set'.toCamelCase($atributos[0]).'($'.strtolower($atributos[0]).');'. PHP_EOL;
        $texto  .= '      $bean_'.($tabla).'->set' . toCamelCase( $estado_name ) . '($estado);'. PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      $data = $'.($tabla).'->getByEstado($bean_'.($tabla).');' . PHP_EOL;
        // $texto .= '      $data = Serialize::unSerializeArray($data);' . PHP_EOL;
        // $texto .= '        ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      return $data ;'. PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '    catch (Exception $e)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '      throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '  }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;



        # Method set
        $texto  .= '  public function save($params = array() )' . PHP_EOL;
        $texto  .= '  {' . PHP_EOL;
        $texto  .= '    try' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '      extract($params) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;


        $texto  .= '      $'.($tabla).'  = new '.$cmTable.'($this->cnx);' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

                                if (count($atributos) > 0) {
                                    for ($i = 1; $i < count($atributos); $i++) {
                                        if ( !itemsNotSetController($atributos[$i], $prefix) ){
                                            $texto .= '      $bean_'.($tabla).'->set'.toCamelCase($atributos[$i]).'($'.strtolower($atributos[$i]).');'. PHP_EOL;
                                        }
                                    }
                                }
        $texto  .= '            ' . PHP_EOL;

        $texto  .= '      $data = $'.($tabla).'->save($bean_'.($tabla).') ;' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '      return $data ;'. PHP_EOL; ;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '    catch (Exception $e)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '        throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '  }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;



        # Method upd
        $texto  .= '  public function update($params = array())' . PHP_EOL;
        $texto  .= '  {' . PHP_EOL;
        $texto  .= '    try' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '      extract($params) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '      $'.($tabla).'  = new '.$cmTable.'($this->cnx);' . PHP_EOL;
        $texto  .= '      $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

                                if (count($atributos) > 0) {
                                    for ($i = 0; $i < count($atributos); $i++) {
                                        if ( !itemsNotUpdateMetodo($atributos[$i], $prefix) ){
                                            $texto .= '      $bean_'.($tabla).'->set'.toCamelCase($atributos[$i]).'($'.strtolower($atributos[$i]).');'. PHP_EOL;
                                        }
                                    }
                                }
        $texto  .= '' . PHP_EOL;
        $texto  .= '      $data = $'.($tabla).'->update($bean_'.($tabla).') ;' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '      return $data;'. PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '    catch (Exception $e)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '      throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '  }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;


        # Method UPDATE ESTADO
        $texto  .= '  public function updateEstado($params = array())' . PHP_EOL;
        $texto  .= '  {' . PHP_EOL;
        $texto  .= '    try' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '      extract($params) ; ' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '      $'.($tabla).'  = new '.$cmTable.'($this->cnx);' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;

        $texto  .= '      $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '      $bean_'.($tabla).'->set'.toCamelCase($atributos[0]).'($'.strtolower($atributos[0]).');'. PHP_EOL;
        // $texto  .= '      $bean_'.($tabla).'->setEstado($estado);'. PHP_EOL;
        $texto  .= '      $bean_'.($tabla).'->set' . toCamelCase( $estado_name ) . '($estado);'. PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '      $data = $'.($tabla).'->updateEstado($bean_'.($tabla).') ;' . PHP_EOL;
        $texto  .= '            ' . PHP_EOL;
        $texto  .= '      return $data;'. PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '    catch (Exception $e)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '      throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '  }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        # Method FIND
        $texto  .= '  public function find($id)' . PHP_EOL;
        $texto  .= '  {' . PHP_EOL;
        $texto  .= '    try' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '      $'.($tabla).'  = new '.$cmTable.'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      $bean_'.($tabla).'->set'.toCamelCase($atributos[0]).'($id);' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto .= '      $data = $'.($tabla).'->find( $bean_'.($tabla).') ;' . PHP_EOL;
        // $texto .= '      $data = Serialize::unSerializeRow($data);' . PHP_EOL;
        // $texto  .= '' . PHP_EOL;
        $texto  .= '      return $data;'. PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '    catch (Exception $e)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
         $texto  .= '      throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '  }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

         # Method DELETE
        $texto  .= '  public function deleteById($'. $atributos[0] .')' . PHP_EOL;
        $texto  .= '  {' . PHP_EOL;
        $texto  .= '    try' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        // $texto  .= '      extract($params) ;' . PHP_EOL;
        // $texto  .= '' . PHP_EOL;
        $texto  .= '      $'.($tabla).'  = new '.$cmTable.'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      $bean_'.($tabla).'->set'.toCamelCase($atributos[0]).'($'. $atributos[0] .');' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        $texto  .= '      $data = $'.($tabla).'->deleteById( $bean_'.($tabla).' ) ;' . PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '      return $data;'. PHP_EOL;
        $texto  .= '' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '    catch (Exception $e)' . PHP_EOL;
        $texto  .= '    {' . PHP_EOL;
         $texto  .= '      throw new Exception($e->getMessage());' . PHP_EOL;
        $texto  .= '    }' . PHP_EOL;
        $texto  .= '  }' . PHP_EOL;
        $texto  .= '' . PHP_EOL;

        if ( in_array('publicar', $atributos) || in_array($prefix . 'publicar', $atributos))
        {

            # Method UPDATE PUBLICAR
            $texto  .= '  public function updatePublish($params = array())' . PHP_EOL;
            $texto  .= '  {' . PHP_EOL;
            $texto  .= '    try' . PHP_EOL;
            $texto  .= '    {' . PHP_EOL;
            $texto  .= '            ' . PHP_EOL;
            $texto  .= '      extract($params) ; ' . PHP_EOL;
            $texto  .= '' . PHP_EOL;

            $texto  .= '      $'.($tabla).'  = new '.$cmTable.'($this->cnx);' . PHP_EOL;
            $texto  .= '      $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
            $texto  .= '            ' . PHP_EOL;

            $texto .= '      $bean_'.($tabla).'->set'.toCamelCase($atributos[0]).'($'.strtolower($atributos[0]).');'. PHP_EOL;
            $texto .= '      $bean_'.($tabla).'->set' . toCamelCase( $publicar_name ) . '($publicar);'. PHP_EOL;

            $texto  .= '' . PHP_EOL;
            $texto  .= '      $data = $'.($tabla).'->updatePublish($bean_'.($tabla).') ;' . PHP_EOL;
            $texto  .= '            ' . PHP_EOL;
            $texto  .= '      return $data;'. PHP_EOL;
            $texto  .= '    }' . PHP_EOL;
            $texto  .= '    catch (Exception $e)' . PHP_EOL;
            $texto  .= '    {' . PHP_EOL;
            $texto  .= '           throw new Exception($e->getMessage());' . PHP_EOL;
            $texto  .= '    }' . PHP_EOL;
            $texto  .= '  }' . PHP_EOL;
            $texto  .= '' . PHP_EOL;


            # Method getPublished
            $texto  .= '  public function getPublished($params = array())' . PHP_EOL;
            $texto  .= '  {' . PHP_EOL;
            $texto  .= '    try' . PHP_EOL;
            $texto  .= '    {' . PHP_EOL;
            $texto  .= '            ' . PHP_EOL;
            $texto  .= '      extract($params) ; ' . PHP_EOL;
            $texto  .= '' . PHP_EOL;

            $texto  .= '      $'.($tabla).'  = new '.$cmTable.'($this->cnx);' . PHP_EOL;
            $texto  .= '      $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
            $texto  .= '            ' . PHP_EOL;

            // $texto .= '            $bean_'.($tabla).'->set'.toCamelCase($atributos[0]).'($'.strtolower($atributos[0]).');'. PHP_EOL;
            $texto .= '      $bean_'.($tabla).'->set' . toCamelCase( $publicar_name ) . '($publicar);'. PHP_EOL;

            $texto  .= '' . PHP_EOL;
            $texto  .= '      $data = $'.($tabla).'->getPublished($bean_'.($tabla).') ;' . PHP_EOL;
            $texto  .= '      ' . PHP_EOL;
            // $texto .= '      $data = Serialize::unSerializeArray($data);' . PHP_EOL;
            // $texto .= '        ' . PHP_EOL;
            $texto  .= '      return $data;'. PHP_EOL;
            $texto  .= '    }' . PHP_EOL;
            $texto  .= '    catch (Exception $e)' . PHP_EOL;
            $texto  .= '    {' . PHP_EOL;
            $texto  .= '      throw new Exception($e->getMessage());' . PHP_EOL;
            $texto  .= '    }' . PHP_EOL;
            $texto  .= '  }' . PHP_EOL;
            $texto  .= '' . PHP_EOL;
        }

        if ( in_array('item', $atributos) )
        {
            # Method Count Rows
            $texto  .= '  public function countRows()' . PHP_EOL;
            $texto  .= '  {' . PHP_EOL;
            $texto  .= '    try' . PHP_EOL;
            $texto  .= '    {' . PHP_EOL;
            $texto  .= '      $'.($tabla).'  = new '.$cmTable.'();' . PHP_EOL;
            $texto  .= '' . PHP_EOL;
            // $texto  .= '      $bean_'.($tabla).' = new Bean'.$cmTable.'();' . PHP_EOL;
            // $texto  .= '' . PHP_EOL;
            // $texto  .= '      $bean_'.($tabla).'->set'.toCamelCase($atributos[0]).'($id);' . PHP_EOL;
            // $texto  .= '' . PHP_EOL;

            $texto .= '      $data = $'.($tabla).'->countRows() ;' . PHP_EOL;
            // $texto .= '      $data = Serialize::unSerializeRow($data);' . PHP_EOL;
            // $texto  .= '' . PHP_EOL;
            $texto  .= '      return $data;'. PHP_EOL;
            $texto  .= '' . PHP_EOL;
            $texto  .= '    }' . PHP_EOL;
            $texto  .= '    catch (Exception $e)' . PHP_EOL;
            $texto  .= '    {' . PHP_EOL;
            $texto  .= '      throw new Exception($e->getMessage());' . PHP_EOL;
            $texto  .= '    }' . PHP_EOL;
            $texto  .= '  }' . PHP_EOL;
            $texto  .= '' . PHP_EOL;
            }




        $texto .= '}' . PHP_EOL;

        fwrite($abrir, $texto);
        fclose($abrir);
        return "Controlador Generado Correctamente";
    }
}
?>