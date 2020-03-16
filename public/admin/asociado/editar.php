
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

  $empresa_controller = new EmpresaController();

  $params = array('estado' => 1) ;

  $empresas = $empresa_controller->getByEstado($params);

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
            <form action="admin/asociado/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="empresa_id">Empresa: </label>
                  <select class="custom-select select2-box" name="empresa_id" id="empresa_id" placeholder="Empresa" required>
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <?php foreach ($empresas as $row) { ?>
                    <option value="<?php echo $row->empresa_id; ?>" <?php if( $asociado->empresa_id == $row->empresa_id ) echo "selected" ?> > <?php echo $row->nombre; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $asociado->nombre; ?>" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="apellidos">Apellidos: </label>
                  <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" value="<?php echo $asociado->apellidos; ?>" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $asociado->email; ?>" required>
                </div>
              </div>
              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="password">Password: </label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $asociado->password; ?>" required>
                </div>
              </div> -->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="telefono">Telefono: </label>
                  <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $asociado->telefono; ?>">
                </div>
              </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/asociado/asociado.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="fas fa-sync-alt"></i> Actualizar</button>
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
