
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

?>
<?php $title_page = "Noticia" ?>
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
      "sidebar_active"      => [2,1],
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
            <a href="admin/noticia/noticia.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page ;?>s
            </a>
          </li>
          <li class="breadcrumb-item active bg-info text-white" aria-current="page">
          Nuevo <?php echo $title_page ;?>
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h4 class="page-header-title">Nuevo <?php echo $title_page ;?> </h4>
          </div>
        </div>
        <div class="row">

          <div class="col-12 col-md-10">
            <form action="admin/noticia/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">titulo : </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="titulo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion">descripcion : </label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="descripcion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="url_seo">url_seo : </label>
                  <input type="text" class="form-control" name="url_seo" id="url_seo" required placeholder="url_seo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="glosa">glosa : </label>
                  <input type="text" class="form-control" name="glosa" id="glosa" required placeholder="glosa">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="email" class="d-block">Publicar </label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="si" value="S" checked="checked">
                    <label class="form-check-label" for="si">SI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="no" value="N">
                    <label class="form-check-label" for="no">NO</label>
                  </div>
                </div>
              </div>




              </div>

              <div class="w-100 text-center">
                <a href="admin/noticia/noticia.php" type="button" class="btn btn-dark ">Cancelar</a>
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
