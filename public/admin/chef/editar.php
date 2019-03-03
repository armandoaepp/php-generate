<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./chef.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $chef_controller = new ChefController();

  $chef = $chef_controller->find($id);

  $publicar = trim($chef["publicar"]);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked='checked'";
  } elseif ($publicar == "N") {
      $no = "checked='checked'";
  }

  $title_page = "Chef";

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
        "active"      => [1, 0],
    );

    $sidebar = array(
        "sidebar_class"  => "",
        "sidebar_toggle" => "only",
        "sidebar_active" => [2, 1],
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
            Editar
            <?php echo $title_page; ?>
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h5 class="page-header-title">Editar
              <?php echo $title_page; ?>
            </h5>
            <hr class="hr dashed">
          </div>
        </div>
        <div class="row">

          <div class="col-12">
            <form action="admin/chef/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

                <div class="col-md-6 col-lg-4">
                  <div class="form-group">
                    <label for="nombre">Nombre : </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Nombre"
                      value="<?php echo $chef['nombre'] ?>">
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="form-group">
                    <label for="apellidos">Apellidos : </label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos" required placeholder="Apellidos"
                      value="<?php echo $chef['apellidos'] ?>">
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="form-group">
                    <label for="cargo">Cargo : </label>
                    <input type="text" class="form-control" name="cargo" id="cargo" required placeholder="Cargo" value="<?php echo $chef['cargo'] ?>">
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="form-group">
                    <label for="resumen">Resumen : </label>
                    <input type="text" class="form-control" name="resumen" id="resumen" required placeholder="Resumen"
                      value="<?php echo $chef['resumen'] ?>">
                  </div>
                </div>

                <div class="col-md-2">
                  <div class="form-group">
                    <label for="email" class="d-block">Publicar </label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="publicar" id="si" value="S" <?php echo $si; ?>
                      >
                      <label class="form-check-label" for="si">SI</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="publicar" id="no" value="N" <?php echo $no; ?>
                      >
                      <label class="form-check-label" for="no">NO</label>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descripcion">Descripcion : </label> 
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" cols="30" rows="6"><?php echo $chef['descripcion']; ?></textarea>

                  </div>
                </div>
                <!-- <div class="col-md-6">
                  <div class="form-group">
                    <label for="item">Item : </label>
                    <input type="text" class="form-control" name="item" id="item" required placeholder="Item" value="<?php echo $chef['item'] ?>">
                  </div>
                </div> -->

                <div class="col-sm-6 col-md-6 text-center">
                  <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $chef['imagen']; ?>">
                  <img src="<?php echo $chef['imagen'] ?>" class="img-fluid img-view-edit mb-2">
                </div>
                <div class="col-12 mb-3">
                  <hr>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="imagen">Nueva Imagen</label>
                      </div>
                      <input data-file-img="images" type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" accept="image/*">
                    </div>
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