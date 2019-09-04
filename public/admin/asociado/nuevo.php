
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Asociado" ;

  require_once "../../app/autoload.php";

  $empresa_controller = new EmpresaController();

  $params = array('estado' => 1) ;

  $empresas = $empresa_controller->getByEstado($params);

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
            <a href="admin/asociado/asociado.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page ;?>s
            </a>
          </li>
          <li class="breadcrumb-item active bg-secondary text-white" aria-current="page">
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
            <form action="admin/asociado/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="empresa_id">Empresa: </label>
                  <select class="custom-select select2-box" name="empresa_id" id="empresa_id" placeholder="Empresa" required>
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <?php foreach ($empresas as $row) { ?>
                    <option value="<?php echo $row->empresa_id; ?>"> <?php echo $row->nombre; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="apellidos">Apellidos: </label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Correo(Usuario): </label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Correo(Usuario)" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="password">Password: </label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="telefono">Teléfono: </label>
                  <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Teléfono">
                </div>
              </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/asociado/asociado.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="far fa-save"></i> Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>
  </div>


  <?php require_once "../layout/foot_links.phtml"; ?>
  <?php require_once "../layout/select2.phtml"; ?>

</body>

</html>
