
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./cuenta-host.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $cuenta_host_controller = new CuentaHostController();

  $cuenta_host = $cuenta_host_controller->find($id);

  $title_page = "CuentaHost";

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <?php

    $setvar = array(
        "titulo" => "Editar $title_page",
        "follow" => "",
        "description" => "Administrador",
        "keywords" => "administrador",
        "active" => [1, 0],
    );

    $sidebar = array(
        "sidebar_class" => "",
        "sidebar_toggle" => "only",
        "sidebar_active" => [1, 0],
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
            <a href="admin/cuenta-host/cuenta-host.php">
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
            <form action="admin/cuenta-host/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              
              <div class="col-md-12">
                <div class="form-group">
                  <label for="propietario_id">PropietarioId: </label>
                  <input type="text" class="form-control" name="propietario_id" id="propietario_id" placeholder="PropietarioId" value="<?php echo $cuenta_host->propietario_id; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="plan_id">PlanId: </label>
                  <select class="custom-select" name="plan_id" id="plan_id" placeholder="PlanId">
                    <option value="" selected disabled hidden>Seleccionar </option> 
                    <option value="text">text</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="dominio">Dominio: </label>
                  <input type="text" class="form-control" name="dominio" id="dominio" placeholder="Dominio" value="<?php echo $cuenta_host->dominio; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" placeholder="Descripcion" cols="30" rows="6"><?php echo htmlspecialchars_decode($cuenta_host['descripcion']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="solo_host">SoloHost: </label>
                  <input type="text" class="form-control" name="solo_host" id="solo_host" placeholder="SoloHost" value="<?php echo $cuenta_host->solo_host; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tiempo_alq">TiempoAlq: </label>
                  <input type="text" class="form-control" name="tiempo_alq" id="tiempo_alq" placeholder="TiempoAlq" value="<?php echo $cuenta_host->tiempo_alq; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="facturado">Facturado: </label>
                  <input type="text" class="form-control" name="facturado" id="facturado" placeholder="Facturado" value="<?php echo $cuenta_host->facturado; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="created_at">CreatedAt: </label>
                  <input type="text" class="form-control" name="created_at" id="created_at" placeholder="CreatedAt" value="<?php echo $cuenta_host->created_at; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="updated_at">UpdatedAt: </label>
                  <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="UpdatedAt" value="<?php echo $cuenta_host->updated_at; ?>">
                </div>
              </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/cuenta-host/cuenta-host.php" type="button" class="btn btn-dark ">Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
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
