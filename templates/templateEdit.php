<?php

function templateEdit($table, $atributos){

  $cmTable = toCamelCase($table) ;
  $url = toUrlFriendly($table) ;

$html = '';
$html .= '
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./'. $table .'.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $'. $table .'_controller = new '. $cmTable .'Controller();

  $'. $table .' = $'. $table .'_controller->find($id);'. PHP_EOL;

if(in_array('publicar', $atributos))
{

$html .= '
  $publicar = trim($'. $table .'["publicar"]);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked=\'checked\'";
  } elseif ($publicar == "N") {
      $no = "checked=\'checked\'";
  }'. PHP_EOL ;

}

$html .= '
  $title_page = "' .$cmTable. '";

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <?php

    $setvar = array(
        "titulo" => "$title_page",
        "follow" => "",
        "description" => "Administrador",
        "keywords" => "administrador",
        "active" => [1, 0],
    );

    $sidebar = array(
        "sidebar_class" => "",
        "sidebar_toggle" => "only",
        "sidebar_active" => [1, 1],
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
            Editar <?php echo $title_page; ?>
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h4 class="page-header-title">Editar <?php echo $title_page; ?> </h4>
          </div>
        </div>
        <div class="row">

          <div class="col-12 col-md-10">
            <form action="admin/'. $url .'/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              '. PHP_EOL ;

for ($i = 1; $i < count($atributos); $i++)
{
    // if (strtolower(trim($atributos[$i])) != "estado" && strtolower(trim($atributos[$i])) != "created_up" && strtolower(trim($atributos[$i])) != "imagen" )
    if ( !verificarItem($atributos[$i]) )
    {

            $html .= '              <div class="col-md-6">' . PHP_EOL;
            $html .= '                <div class="form-group">' . PHP_EOL;
            $html .= '                  <label for="' . $atributos[$i] . '">' . $atributos[$i] . ' : </label>' . PHP_EOL;
            $html .= '                  <input type="text" class="form-control" name="' . $atributos[$i] .'" id="' . $atributos[$i] .'" required placeholder="' . $atributos[$i] .'"  value="<?php echo $'. $table .'[\''. $atributos[$i]. '\'] ?>" >' . PHP_EOL;
            $html .= '                </div>' . PHP_EOL;
            $html .= '              </div>' . PHP_EOL;
    }
    /* elseif(strtolower(trim($atributos[$i])) == "imagen")
    {
      $html .= '
              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $'. $table .'[\''. $atributos[$i]. '\']; ?>">

                <img src="<?php echo $'. $table .'[\''. $atributos[$i]. '\'] ?>" class="img-fluid mb-1">
                <div class="col-auto">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="imagen">Nueva Imagen</label>
                    </div>
                    <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" accept="image/*">
                  </div>
                </div>
              </div>
              ' ;

    } */
    elseif(strtolower(trim($atributos[$i])) == "publicar")
    {
    $html .= '
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email" class="d-block">Publicar </label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="si" value="S" <?php echo $si; ?> >
                    <label class="form-check-label" for="si">SI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="no" value="N" <?php echo $no; ?> >
                    <label class="form-check-label" for="no">NO</label>
                  </div>
                </div>
              </div>' . PHP_EOL;

    }
}

    if(in_array("imagen", $atributos))
    {
      $html .= '
              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $'. $table .'[\'imagen\']; ?>">
                <img src="<?php echo $'. $table .'[\'imagen\'] ?>" class="img-fluid img-view-edit mb-2">
              </div>
                <div class="col-12 mb-3">
                  <hr>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="imagen">Nueva Imagen</label>
                      </div>
                      <input data-file-img="images" type="file" class="form-control" name="imagen" id="imagen" required placeholder="Imagen" accept="image/*">
                    </div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview" id="preview"></div>
                </div>
              ' ;

    }

$html .= '
              </div>

              <div class="w-100 text-center">
                <a href="admin/' .$url . '/' .$url . '.php" type="button" class="btn btn-dark ">Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>

  </div>

  <?php require_once "../layout/foot_links.phtml"?>

</body>

</html>
';

  return $html ;
}

