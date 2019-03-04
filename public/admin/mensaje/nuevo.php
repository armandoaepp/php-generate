
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Mensaje" ;

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php

    $setvar = array(
      "titulo"     => "$title_page",
      "follow"      => "",
      "description" => "Administrador",
      "keywords"    => "administrador",
      "active"      => [1,0]
    );

    $sidebar = array(
      "sidebar_class"     => "",
      "sidebar_toggle"      => "only",
      "sidebar_active"      => [1,1],
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
            <form action="admin/mensaje/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">Titulo: </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Titulo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="Descripcion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion_2">Descripcion2: </label>
                  <input type="text" class="form-control" name="descripcion_2" id="descripcion_2" required placeholder="Descripcion2">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="slogan">Slogan: </label>
                  <input type="text" class="form-control" name="slogan" id="slogan" required placeholder="Slogan">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mision">Mision: </label>
                  <input type="text" class="form-control" name="mision" id="mision" required placeholder="Mision">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="vision">Vision: </label>
                  <input type="text" class="form-control" name="vision" id="vision" required placeholder="Vision">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="orden">Orden: </label>
                  <input type="text" class="form-control" name="orden" id="orden" required placeholder="Orden">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">Fecha: </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="Fecha">
                </div>
              </div>

              <div class="col-12 mb-3">
                <div class="form-group">
                  <label for="imagen">Imagen:</label>
                  <input data-file-img="images" type="file" class="form-control" name="imagen" id="imagen" required placeholder="Imagen" accept="image/*">
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
