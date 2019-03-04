
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./buzon_contacto.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $buzon_contacto_controller = new BuzonContactoController();

  $buzon_contacto = $buzon_contacto_controller->find($id);

  $title_page = "BuzonContacto";

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
            <a href="admin/buzon-contacto/buzon-contacto.php">
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
            <form action="admin/buzon-contacto/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" required placeholder="Nombre"  value="<?php echo $buzon_contacto['nombre'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="dni">Dni: </label>
                  <input type="text" class="form-control" name="dni" id="dni" required placeholder="Dni"  value="<?php echo $buzon_contacto['dni'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="text" class="form-control" name="email" id="email" required placeholder="Email"  value="<?php echo $buzon_contacto['email'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="telefono">Telefono: </label>
                  <input type="text" class="form-control" name="telefono" id="telefono" required placeholder="Telefono"  value="<?php echo $buzon_contacto['telefono'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">Fecha: </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="Fecha"  value="<?php echo $buzon_contacto['fecha'] ?>" >
                </div>
              </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/buzon-contacto/buzon-contacto.php" type="button" class="btn btn-dark ">Cancelar</a>
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
