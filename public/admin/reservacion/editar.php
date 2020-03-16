
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./reservacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $reservacion_controller = new ReservacionController();

  $reservacion = $reservacion_controller->find($id);

  $title_page = "Reservacion";

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <?php

    $setvar = array(
      "titulo"      => "Editar $title_page",
      "follow"      => "",
      "description" => "Administrador",
      "keywords"    => "administrador",
      "active"      => [1, 0],
    );

    $sidebar = array(
      "sidebar_class"  => "",
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
            <a href="admin/reservacion/reservacion.php">
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
            <form action="admin/reservacion/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo_habitacion_id">TipoHabitacionId: </label>
                  <input type="text" class="form-control" name="tipo_habitacion_id" id="tipo_habitacion_id" placeholder="TipoHabitacionId" value="<?php echo $reservacion->tipo_habitacion_id; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $reservacion->nombre; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="apellidos">Apellidos: </label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" value="<?php echo $reservacion->apellidos; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="cantidad">Cantidad: </label>
                  <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad" value="<?php echo $reservacion->cantidad; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="cuidad_origen">CuidadOrigen: </label>
                  <input type="text" class="form-control" name="cuidad_origen" id="cuidad_origen" placeholder="CuidadOrigen" value="<?php echo $reservacion->cuidad_origen; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="fecha_llegada">FechaLlegada: </label>
                  <input type="text" class="form-control" name="fecha_llegada" id="fecha_llegada" placeholder="FechaLlegada" value="<?php echo $reservacion->fecha_llegada; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="fecha_salida">FechaSalida: </label>
                  <input type="text" class="form-control" name="fecha_salida" id="fecha_salida" placeholder="FechaSalida" value="<?php echo $reservacion->fecha_salida; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="telefono">Telefono: </label>
                  <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $reservacion->telefono; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $reservacion->email; ?>">
                </div>
              </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/reservacion/reservacion.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="fas fa-sync-alt"></i> Actualizar</button>
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
