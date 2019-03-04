
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Admision" ;

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
            <a href="admin/admision/admision.php">
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
            <form action="admin/admision/save.php" method="POST" enctype="multipart/form-data">
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
                  <label for="requisitos">Requisitos: </label>
                  <input type="text" class="form-control" name="requisitos" id="requisitos" required placeholder="Requisitos">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="horarios">Horarios: </label>
                  <input type="text" class="form-control" name="horarios" id="horarios" required placeholder="Horarios">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inversion">Inversion: </label>
                  <input type="text" class="form-control" name="inversion" id="inversion" required placeholder="Inversion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="text" class="form-control" name="email" id="email" required placeholder="Email">
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
                <a href="admin/admision/admision.php" type="button" class="btn btn-dark ">Cancelar</a>
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
