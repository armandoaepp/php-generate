
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

  $title_page = "Home";

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
            <a href="admin/home/home.php">
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
            <h5 class="page-header-title">Editar <?php echo $title_page; ?> </h5>
            <hr class="hr dashed">
          </div>
        </div>
        <div class="row">

          <div class="col-12">
            <form action="admin/home/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">Titulo: </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Titulo"  value="<?php echo $home['titulo'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo_2">Titulo2: </label>
                  <input type="text" class="form-control" name="titulo_2" id="titulo_2" required placeholder="Titulo2"  value="<?php echo $home['titulo_2'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="url_2">Url2: </label>
                  <input type="text" class="form-control" name="url_2" id="url_2" required placeholder="Url2"  value="<?php echo $home['url_2'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="imagen_2">Imagen2: </label>
                  <input type="text" class="form-control" name="imagen_2" id="imagen_2" required placeholder="Imagen2"  value="<?php echo $home['imagen_2'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo_3">Titulo3: </label>
                  <input type="text" class="form-control" name="titulo_3" id="titulo_3" required placeholder="Titulo3"  value="<?php echo $home['titulo_3'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="url_3">Url3: </label>
                  <input type="text" class="form-control" name="url_3" id="url_3" required placeholder="Url3"  value="<?php echo $home['url_3'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="imagen_3">Imagen3: </label>
                  <input type="text" class="form-control" name="imagen_3" id="imagen_3" required placeholder="Imagen3"  value="<?php echo $home['imagen_3'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="convenios">Convenios: </label>
                  <input type="text" class="form-control" name="convenios" id="convenios" required placeholder="Convenios"  value="<?php echo $home['convenios'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="orden">Orden: </label>
                  <input type="text" class="form-control" name="orden" id="orden" required placeholder="Orden"  value="<?php echo $home['orden'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">Fecha: </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="Fecha"  value="<?php echo $home['fecha'] ?>" >
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $home['imagen']; ?>">
                <img src="<?php echo $home['imagen'] ?>" class="img-fluid img-view-edit mb-2">
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

  </div>

  <?php require_once "../layout/foot_links.phtml"?>

</body>

</html>
