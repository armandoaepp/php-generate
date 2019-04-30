<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "CuentaHost" ;

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
      "sidebar_active"      => [1,0],
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
            <form action="admin/cuenta-host/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="propietario_id">PropietarioId: </label>
                    <input type="text" class="form-control" name="propietario_id" id="propietario_id"
                      placeholder="PropietarioId">
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
                    <input type="text" class="form-control" name="dominio" id="dominio" placeholder="Dominio">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descripcion">Descripcion: </label>
                    <textarea class="form-control ckeditor" name="descripcion" id="descripcion"
                      placeholder="Descripcion" cols="30" rows="6"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="solo_host">SoloHost: </label>
                    <input type="text" class="form-control" name="solo_host" id="solo_host" placeholder="SoloHost">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="tiempo_alq">TiempoAlq: </label>
                    <input type="text" class="form-control" name="tiempo_alq" id="tiempo_alq" placeholder="TiempoAlq">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="facturado">Facturado: </label>
                    <input type="text" class="form-control" name="facturado" id="facturado" placeholder="Facturado">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="created_at">CreatedAt: </label>
                    <input type="text" class="form-control" name="created_at" id="created_at" placeholder="CreatedAt">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="updated_at">UpdatedAt: </label>
                    <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="UpdatedAt">
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