
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Chef" ;

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php

    $setvar = array(
      "titulo"      => "$title_page",
      "follow"      => "",
      "description" => "Administrador",
      "keywords"    => "administrador",
      "active"      => [1,0]
    );

    $sidebar = array(
      "sidebar_class"  => "",
      "sidebar_toggle" => "only",
      "sidebar_active" => [2,1],
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
            <a href="admin/chef/chef.php">
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
            <form action="admin/chef/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">

              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Nombre">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="apellidos">Apellidos: </label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos" required placeholder="Apellidos">
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="form-group">
                  <label for="cargo">Cargo: </label>
                  <input type="text" class="form-control" name="cargo" id="cargo" required placeholder="Cargo">
                </div>
              </div>
              <div class="col-md-10">
                <div class="form-group">
                  <label for="resumen">Resumen: </label>
                  <input type="text" class="form-control" name="resumen" id="resumen" placeholder="Resumen">
                </div>
              </div>
              <div class="col-md-2">
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
              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <!-- <input type="text" class="form-control ckeditor" name="descripcion" id="descripcion"  placeholder="Descripcion"> -->
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" cols="30" rows="6"></textarea>
                </div>
              </div>
              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label for="item">Item : </label>
                  <input type="text" class="form-control" name="item" id="item" required placeholder="Item">
                </div>
              </div> -->

              <div class="col-12 mb-3">
                <div class="form-group">
                  <label for="imagen">Imagen :</label>
                  <input data-file-img="images" type="file" class="form-control" name="imagen" id="imagen" required placeholder="Imagen" accept="image/*">
                </div>
              </div>

              <div class="col-12 mb-3">
                <div class="preview-img" data-img-preview="preview" id="preview"></div>
              </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/chef/chef.php" type="button" class="btn btn-dark ">Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>
  </div>


  <?php require_once "../layout/foot_links.phtml"; ?>

  <?php require_once "../layout/ckeditor.phtml"; ?>

</body>

</html>
