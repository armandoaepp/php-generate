
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

?>
<?php $title_page = "NoticiaImg" ?>
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
            <a href="admin/noticia-img/noticia-img.php">
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
            <form action="admin/noticia-img/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="noticia_id">noticia_id : </label>
                  <input type="text" class="form-control" name="noticia_id" id="noticia_id" required placeholder="noticia_id">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="imagen">Imagen(Recomendación Imagen de 350 x 200 pixeles ) </label>
                  <input type="file"  class="form-control" name="imagen" id="imagen"  placeholder="Imagen" accept="image/*">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="item">item : </label>
                  <input type="text" class="form-control" name="item" id="item" required placeholder="item">
                </div>
              </div>




              </div>

              <div class="w-100 text-center">
                <a href="admin/noticia-img/noticia-img.php" type="button" class="btn btn-dark ">Cancelar</a>
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