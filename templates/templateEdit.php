<?php

function templateEdit($table, $aatri){

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

if(in_array('publicar', $aatri))
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
  $title_page = "' .$cmTable. '"
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array("titulo" => "Editar ".$title_page." | Admin ", "follow" => "", "active" => [1, 1]);
require_once "../layout/head_links.phtml";
?>
</head>

<body>
  <?php
    require "../layout/header.phtml";
  ?>

  <main role="main" class="screen-main">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">
            <i class="material-icons">home</i>
          </a>
        </li>
        <li class="breadcrumb-item">
          <a href="admin/'. $url .'/'. $url .'.php"><?php echo $title_page ;?>s</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Editar <?php echo $title_page ;?></li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Editar <?php echo $title_page ;?> </h4>
        </div>
      </div>
      <div class="row">

        <div class="col-12 col-md-10">
          <form action="admin/'. $url .'/update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
            <div class="row">
            '. PHP_EOL ;

for ($i = 1; $i < count($aatri); $i++)
{
    // if (strtolower(trim($aatri[$i])) != "estado" && strtolower(trim($aatri[$i])) != "created_up" && strtolower(trim($aatri[$i])) != "imagen" )
    if ( !verificarItem($aatri[$i]) )
    {

            $html .= '              <div class="col-md-6">' . PHP_EOL;
            $html .= '                <div class="form-group">' . PHP_EOL;
            $html .= '                  <label for="' . $aatri[$i] . '">' . $aatri[$i] . ' : </label>' . PHP_EOL;
            $html .= '                  <input type="text" class="form-control" name="' . $aatri[$i] .'" id="' . $aatri[$i] .'" required placeholder="' . $aatri[$i] .'"  value="<?php echo $'. $table .'[\''. $aatri[$i]. '\'] ?>" >' . PHP_EOL;
            $html .= '                </div>' . PHP_EOL;
            $html .= '              </div>' . PHP_EOL;
    }
    elseif(strtolower(trim($aatri[$i])) == "imagen")
    {
      $html .= '
              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $'. $table .'[\''. $aatri[$i]. '\']; ?>">

                <img src="<?php echo $'. $table .'[\''. $aatri[$i]. '\'] ?>" class="img-fluid mb-1">
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

    }
    elseif(strtolower(trim($aatri[$i])) == "publicar")
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
                    <input class="form-check-input" type="radio" name="publicar" id="no" value="N" <?php echo $si; ?> >
                    <label class="form-check-label" for="no">NO</label>
                  </div>
                </div>
              </div>' . PHP_EOL;

    }
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

  <footer class="footer bg-dark sticky-bottom">
    <?php
      require "../layout/footer.phtml";
    ?>
  </footer>
  <?php require_once "../layout/foot_links.phtml"?>

</body>

</html>
';

  return $html ;
}

