
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./mensaje.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $mensaje_controller = new MensajeController();

  $mensaje = $mensaje_controller->find($id);

  $title_page = "Mensaje"
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
          <a href="admin/mensaje/mensaje.php"><?php echo $title_page ;?>s</a>
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
          <form action="admin/mensaje/update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">titulo : </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="titulo"  value="<?php echo $mensaje['titulo'] ?>" >
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $mensaje['imagen']; ?>">

                <img src="<?php echo $mensaje['imagen'] ?>" class="img-fluid mb-1">
                <div class="col-auto">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="imagen">Nueva Imagen</label>
                    </div>
                    <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" accept="image/*">
                  </div>
                </div>
              </div>
                            <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion">descripcion : </label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="descripcion"  value="<?php echo $mensaje['descripcion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion_2">descripcion_2 : </label>
                  <input type="text" class="form-control" name="descripcion_2" id="descripcion_2" required placeholder="descripcion_2"  value="<?php echo $mensaje['descripcion_2'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="slogan">slogan : </label>
                  <input type="text" class="form-control" name="slogan" id="slogan" required placeholder="slogan"  value="<?php echo $mensaje['slogan'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mision">mision : </label>
                  <input type="text" class="form-control" name="mision" id="mision" required placeholder="mision"  value="<?php echo $mensaje['mision'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="vision">vision : </label>
                  <input type="text" class="form-control" name="vision" id="vision" required placeholder="vision"  value="<?php echo $mensaje['vision'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="orden">orden : </label>
                  <input type="text" class="form-control" name="orden" id="orden" required placeholder="orden"  value="<?php echo $mensaje['orden'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">fecha : </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="fecha"  value="<?php echo $mensaje['fecha'] ?>" >
                </div>
              </div>

            </div>

            <div class="w-100 text-center">
              <a href="admin/mensaje/mensaje.php" type="button" class="btn btn-dark ">Cancelar</a>
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
