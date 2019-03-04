
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Traslados" ;

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
            <a href="admin/traslados/traslados.php">
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
            <form action="admin/traslados/save.php" method="POST" enctype="multipart/form-data">
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
                  <label for="presentacion">Presentacion: </label>
                  <input type="text" class="form-control" name="presentacion" id="presentacion" required placeholder="Presentacion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="item1">Item1: </label>
                  <input type="text" class="form-control" name="item1" id="item1" required placeholder="Item1">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="item2">Item2: </label>
                  <input type="text" class="form-control" name="item2" id="item2" required placeholder="Item2">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="item3">Item3: </label>
                  <input type="text" class="form-control" name="item3" id="item3" required placeholder="Item3">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="item4">Item4: </label>
                  <input type="text" class="form-control" name="item4" id="item4" required placeholder="Item4">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descitem1">Descitem1: </label>
                  <input type="text" class="form-control" name="descitem1" id="descitem1" required placeholder="Descitem1">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descitem2">Descitem2: </label>
                  <input type="text" class="form-control" name="descitem2" id="descitem2" required placeholder="Descitem2">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descitem3">Descitem3: </label>
                  <input type="text" class="form-control" name="descitem3" id="descitem3" required placeholder="Descitem3">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descitem4">Descitem4: </label>
                  <input type="text" class="form-control" name="descitem4" id="descitem4" required placeholder="Descitem4">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="promocion">Promocion: </label>
                  <input type="text" class="form-control" name="promocion" id="promocion" required placeholder="Promocion">
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
                <a href="admin/traslados/traslados.php" type="button" class="btn btn-dark ">Cancelar</a>
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
