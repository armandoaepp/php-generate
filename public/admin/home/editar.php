
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./home.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $home_controller = new HomeController();

  $home = $home_controller->find($id);

  $title_page = "Home"
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
          <a href="admin/home/home.php"><?php echo $title_page ;?>s</a>
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
          <form action="admin/home/update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">titulo : </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="titulo"  value="<?php echo $home['titulo'] ?>" >
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $home['imagen']; ?>">

                <img src="<?php echo $home['imagen'] ?>" class="img-fluid mb-1">
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
                  <label for="titulo_2">titulo_2 : </label>
                  <input type="text" class="form-control" name="titulo_2" id="titulo_2" required placeholder="titulo_2"  value="<?php echo $home['titulo_2'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="url_2">url_2 : </label>
                  <input type="text" class="form-control" name="url_2" id="url_2" required placeholder="url_2"  value="<?php echo $home['url_2'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="imagen_2">imagen_2 : </label>
                  <input type="text" class="form-control" name="imagen_2" id="imagen_2" required placeholder="imagen_2"  value="<?php echo $home['imagen_2'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo_3">titulo_3 : </label>
                  <input type="text" class="form-control" name="titulo_3" id="titulo_3" required placeholder="titulo_3"  value="<?php echo $home['titulo_3'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="url_3">url_3 : </label>
                  <input type="text" class="form-control" name="url_3" id="url_3" required placeholder="url_3"  value="<?php echo $home['url_3'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="imagen_3">imagen_3 : </label>
                  <input type="text" class="form-control" name="imagen_3" id="imagen_3" required placeholder="imagen_3"  value="<?php echo $home['imagen_3'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="convenios">convenios : </label>
                  <input type="text" class="form-control" name="convenios" id="convenios" required placeholder="convenios"  value="<?php echo $home['convenios'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="orden">orden : </label>
                  <input type="text" class="form-control" name="orden" id="orden" required placeholder="orden"  value="<?php echo $home['orden'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">fecha : </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="fecha"  value="<?php echo $home['fecha'] ?>" >
                </div>
              </div>

            </div>

            <div class="w-100 text-center">
              <a href="admin/home/home.php" type="button" class="btn btn-dark ">Cancelar</a>
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
