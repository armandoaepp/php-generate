
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

  $title_page = "Mensaje";

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
            <a href="admin/mensaje/mensaje.php">
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
            <form action="admin/mensaje/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">Titulo: </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Titulo"  value="<?php echo $mensaje['titulo'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="Descripcion"  value="<?php echo $mensaje['descripcion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion_2">Descripcion2: </label>
                  <input type="text" class="form-control" name="descripcion_2" id="descripcion_2" required placeholder="Descripcion2"  value="<?php echo $mensaje['descripcion_2'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="slogan">Slogan: </label>
                  <input type="text" class="form-control" name="slogan" id="slogan" required placeholder="Slogan"  value="<?php echo $mensaje['slogan'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mision">Mision: </label>
                  <input type="text" class="form-control" name="mision" id="mision" required placeholder="Mision"  value="<?php echo $mensaje['mision'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="vision">Vision: </label>
                  <input type="text" class="form-control" name="vision" id="vision" required placeholder="Vision"  value="<?php echo $mensaje['vision'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="orden">Orden: </label>
                  <input type="text" class="form-control" name="orden" id="orden" required placeholder="Orden"  value="<?php echo $mensaje['orden'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">Fecha: </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="Fecha"  value="<?php echo $mensaje['fecha'] ?>" >
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $mensaje['imagen']; ?>">
                <img src="<?php echo $mensaje['imagen'] ?>" class="img-fluid img-view-edit mb-2">
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
                <a href="admin/mensaje/mensaje.php" type="button" class="btn btn-dark ">Cancelar</a>
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
