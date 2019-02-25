
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./configuracion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $configuracion_controller = new ConfiguracionController();

  $configuracion = $configuracion_controller->find($id);

  $title_page = "Configuracion"
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
          <a href="admin/configuracion/configuracion.php"><?php echo $title_page ;?>s</a>
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
          <form action="admin/configuracion/update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">titulo : </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="titulo"  value="<?php echo $configuracion['titulo'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="horario">horario : </label>
                  <input type="text" class="form-control" name="horario" id="horario" required placeholder="horario"  value="<?php echo $configuracion['horario'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="direccion">direccion : </label>
                  <input type="text" class="form-control" name="direccion" id="direccion" required placeholder="direccion"  value="<?php echo $configuracion['direccion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">email : </label>
                  <input type="text" class="form-control" name="email" id="email" required placeholder="email"  value="<?php echo $configuracion['email'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="telefono">telefono : </label>
                  <input type="text" class="form-control" name="telefono" id="telefono" required placeholder="telefono"  value="<?php echo $configuracion['telefono'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="facebook">facebook : </label>
                  <input type="text" class="form-control" name="facebook" id="facebook" required placeholder="facebook"  value="<?php echo $configuracion['facebook'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="youtube">youtube : </label>
                  <input type="text" class="form-control" name="youtube" id="youtube" required placeholder="youtube"  value="<?php echo $configuracion['youtube'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="instagram">instagram : </label>
                  <input type="text" class="form-control" name="instagram" id="instagram" required placeholder="instagram"  value="<?php echo $configuracion['instagram'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mapa">mapa : </label>
                  <input type="text" class="form-control" name="mapa" id="mapa" required placeholder="mapa"  value="<?php echo $configuracion['mapa'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="popup">popup : </label>
                  <input type="text" class="form-control" name="popup" id="popup" required placeholder="popup"  value="<?php echo $configuracion['popup'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="show_popup">show_popup : </label>
                  <input type="text" class="form-control" name="show_popup" id="show_popup" required placeholder="show_popup"  value="<?php echo $configuracion['show_popup'] ?>" >
                </div>
              </div>

            </div>

            <div class="w-100 text-center">
              <a href="admin/configuracion/configuracion.php" type="button" class="btn btn-dark ">Cancelar</a>
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
