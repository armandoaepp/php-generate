
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./asociado.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $asociado_controller = new AsociadoController();

  $asociado = $asociado_controller->find($id);

  $title_page = "Asociado";

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <?php

    $setvar = array(
        "titulo"      => "Cambiar Contraseña",
        "follow"      => "",
        "description" => "Administrador",
        "keywords"    => "administrador",
        "active"      => [1, 0],
    );

    $sidebar = array(
        "sidebar_class" => "",
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
            <a href="admin/asociado/asociado.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page ;?>s
            </a>
          </li>
          <li class="breadcrumb-item active bg-secondary text-white" aria-current="page">
            Cambiar Contraseña <?php echo $title_page; ?>
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h5 class="page-header-title">Cambiar Contraseña  <?php echo $title_page; ?> </h5>
            <hr class="hr dashed">
          </div>
        </div>
        <div class="row">

          <div class="col-12">
            <form action="admin/asociado/reset-update.php" method="POST" enctype="multipart/form-data" autocomplete="off">
              <input type="hidden" class="form-control" name="accion" id="accion" value="reset">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" disabled class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $asociado->nombre; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="apellidos">Apellidos: </label>
                  <input type="text" disabled class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" value="<?php echo $asociado->apellidos; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="email" disabled class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $asociado->email; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="password">Nueva Contraseña: </label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Nueva Contraseña" autocomplete="new-password" autofocus required minlength="6">
                </div>
              </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/asociado/asociado.php" class="btn btn-outline-danger">Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  ">Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>

  </div>

  <?php require_once "../layout/foot_links.phtml"; ?>

</body>

</html>
