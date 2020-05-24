<?php

function templateNuevo($table, $atributos, $arraycabeza = array() , $tipo_inputs = array()){

  $cmTable = toCamelCase($table) ;
  $url = toUrlFriendly($table) ;

  $prefix =  generatePrefixTable( $table ) ;
  $prefix = !empty($prefix) ? $prefix."_" : "" ;


$html = '';
$html .= '
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "' .$cmTable. '" ;

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php

    $setvar = array(
      "titulo"      => "$title_page",
      "follow"      => "",
      "description" => "Administrador",
      "keywords"    => "administrador",
      "active"      => [1, 0]
    );

    $sidebar = array(
      "sidebar_class"  => "",
      "sidebar_toggle" => "only",
      "sidebar_active" => [0, 0],
    );

    require_once "../layout/head_links.phtml";
  ?>
</head>

<body>
  <?php require "../layout/header.phtml"; ?>

  <div class="app-wrap">
    <?php require_once "../layout/sidebar.phtml";?>
    <main role="main" class="main">

      <nav class="full-content" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-shape shadow-sm radius-0">
          <li class="breadcrumb-item">
            <a href="admin">
              <i class="fas fa-home"></i> Home
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="admin/'. $url .'/'. $url .'.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page ;?>s
            </a>
          </li>
          <li class="breadcrumb-item active bg-info text-white" aria-current="page">
            Nuevo <?php echo $title_page; ?>
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h5 class="page-header-title">Nuevo <?php echo $title_page; ?> </h5>
            <hr class="hr dashed">
          </div>
        </div>
        <div class="row">

          <div class="col-12">
            <form action="admin/'. $url .'/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">
              '. PHP_EOL ;

for ($i = 1; $i < count($atributos); $i++)
{
    // ==== Start remove prefix
    $field_item = $atributos[$i] ;
    if(!empty($prefix))
    {
      $field_item = revemoPrefix($field_item, $prefix)  ;
    }
    $field_item = toCamelCase($field_item);


    if ( !verificarItem($atributos[$i], $prefix) )
    {
            if($tipo_inputs[$i] == 'textarea')
            {
              $html .= '              <div class="col-md-12">' . PHP_EOL;
              $html .= '                <div class="form-group">' . PHP_EOL;
              $html .= '                  <label for="' . $atributos[$i] . '">' . toCamelCase( $field_item ) . ': </label>' . PHP_EOL;
              $html .= '                  <textarea class="form-control ckeditor" name="' . $atributos[$i] .'" id="' . $atributos[$i] .'" placeholder="' . toCamelCase($field_item) . '" cols="30" rows="6"></textarea>' . PHP_EOL;
              $html .= '                </div>' . PHP_EOL;
              $html .= '              </div>' . PHP_EOL;
            }
            elseif($tipo_inputs[$i] == 'select')
            {
              $html .= '              <div class="col-md-12">' . PHP_EOL;
              $html .= '                <div class="form-group">' . PHP_EOL;
              $html .= '                  <label for="' . $atributos[$i] . '">' . toCamelCase( $field_item ) . ': </label>' . PHP_EOL;
              $html .= '                  <select class="custom-select select2-box" name="' . $atributos[$i] .'" id="' . $atributos[$i] .'" placeholder="' . toCamelCase( $field_item ) . '">'.PHP_EOL;
              $html .= '                    <option value="" selected disabled hidden>Seleccionar </option> '.PHP_EOL;
              $html .= '                    <option value="text">text</option>'.PHP_EOL;
              $html .= '                  </select>'.PHP_EOL;
              $html .= '                </div>' . PHP_EOL;
              $html .= '              </div>' . PHP_EOL;
            }
            else{
              $html .= '              <div class="col-md-12">' . PHP_EOL;
              $html .= '                <div class="form-group">' . PHP_EOL;
              $html .= '                  <label for="' . $atributos[$i] . '">' . toCamelCase( $field_item ) . ': </label>' . PHP_EOL;
              $html .= '                  <input type="' . $tipo_inputs[$i] .'" class="form-control" name="' . $atributos[$i] .'" id="' . $atributos[$i] .'" placeholder="' . toCamelCase( $field_item ) .'">' . PHP_EOL;
              $html .= '                </div>' . PHP_EOL;
              $html .= '              </div>' . PHP_EOL;
            }

    }
    /* elseif(strtolower(trim($atributos[$i])) == "imagen")
    {
            $html .= '              <div class="col-md-6">' . PHP_EOL;
            $html .= '                <div class="form-group">' . PHP_EOL;
            $html .= '                  <label for="imagen">Imagen(Recomendación Imagen de 350 x 200 pixeles ) </label>' . PHP_EOL;
            $html .= '                  <input type="file"  class="form-control" name="imagen" id="imagen"  placeholder="Imagen" accept="image/*">' . PHP_EOL;
            $html .= '                </div>' . PHP_EOL;
            $html .= '              </div>' . PHP_EOL;

    } */
    // elseif(strtolower( trim($atributos[$i]) ) == "publicar" || in_array($prefix."publicar", $atributos))

}

// elseif(strtolower( trim($atributos[$i]) ) == "publicar" || strtolower( trim($atributos[$i]) ) == $prefix."publicar" )

    if( in_array("publicar", $atributos) || in_array($prefix."publicar", $atributos) )
    {
      $name_publicar = (in_array("publicar", $atributos) ) ? 'publicar' : $prefix."publicar" ;

      $html .= '
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email" class="d-block">Publicar </label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="'.$name_publicar.'" id="si" value="S" checked="checked">
                    <label class="form-check-label" for="si">SI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="no" value="N">
                    <label class="form-check-label" for="no">NO</label>
                  </div>
                </div>
              </div>' . PHP_EOL;

    }
// elseif(strtolower(trim($atributos[$i])) == "imagen")
    if(in_array("imagen", $atributos) || in_array($prefix."imagen", $atributos))
    {
      $name_file_imagen = (in_array("imagen", $atributos) ) ? 'imagen' : $prefix."imagen" ;

            $html .= '
              <div class="col-12 mb-3">
                <div class="form-group">
                  <label for="imagen">Imagen:</label>
                  <!-- <input data-file-img="images" data-id="preview-images" type="file" class="form-control" name="imagenes[]"  required placeholder="Imagen" accept="image/*" multiple> -->
                  <input data-file-img="images" data-id="preview-images" type="file" class="form-control" name="imagen"  required placeholder="Imagen" accept="image/*">
                </div>
              </div>

              <div class="col-12 mb-3">
                <div class="preview-img" data-img-preview="preview-images" ></div>
              </div>
            ' ;

    }

$html .= '
              </div>

              <div class="w-100 text-center">
                <a href="admin/' .$url . '/' .$url . '.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="far fa-save"></i> Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>
  </div>


  <?php require_once "../layout/foot_links.phtml"; ?>

</body>

</html>
';

  return $html ;
}

