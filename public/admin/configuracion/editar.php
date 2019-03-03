<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./configuracion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $configuracion_controller = new ConfiguracionController();

  $configuracion = $configuracion_controller->find($id);

  $title_page = "Configuracion";

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
            <a href="admin/configuracion/configuracion.php">
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
            <form action="admin/configuracion/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="titulo">Titulo : </label>
                    <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Titulo"
                      value="<?php echo $configuracion['titulo'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="horario">Horario : </label>
                    <!-- <input type="text" class="form-control" name="horario" id="horario" placeholder="Horario"  value="<?php echo $configuracion['horario'] ?>" > -->
                    <textarea class="form-control ckeditor" name="horario" id="horario" cols="30" rows="6"><?php echo $configuracion['horario']; ?></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="direccion">Direccion : </label>
                    <!-- <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion"  value="<?php echo $configuracion['direccion'] ?>" > -->
                    <textarea class="form-control ckeditor" name="direccion" id="direccion" cols="30" rows="6"><?php echo $configuracion['direccion']; ?></textarea>

                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email">Email : </label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $configuracion['email'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="telefono">Telefono : </label>
                    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $configuracion['telefono'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="facebook">Facebook : </label>
                    <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook" value="<?php echo $configuracion['facebook'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="youtube">Youtube : </label>
                    <input type="text" class="form-control" name="youtube" id="youtube" placeholder="Youtube" value="<?php echo $configuracion['youtube'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="instagram">Instagram : </label>
                    <input type="text" class="form-control" name="instagram" id="instagram" placeholder="Instagram"
                      value="<?php echo $configuracion['instagram'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="mapa">Mapa : </label>
                    <input type="text" class="form-control" name="mapa" id="mapa" placeholder="Mapa" value="<?php echo $configuracion['mapa'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="popup">Popup : </label>
                    <input type="text" class="form-control" name="popup" id="popup" placeholder="Popup" value="<?php echo $configuracion['popup'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="show_popup" id="show_popup" <?php if($configuracion['show_popup'] == 1 ) echo 'checked'; ?> value="<?php echo $configuracion['show_popup'] ?>" >
                    <label class="form-check-label" for="show_popup">
                      Mostrar Popup
                    </label>
                  </div>
                </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/configuracion/configuracion.php" type="button" class="btn btn-dark ">Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>

  </div>

  <?php require_once "../layout/foot_links.phtml"?>
  <?php require_once "../layout/ckeditor.phtml"; ?>

</body>

</html>