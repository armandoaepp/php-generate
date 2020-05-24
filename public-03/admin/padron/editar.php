
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./padron.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $padron_controller = new PadronController();

  $padron = $padron_controller->find($id);

  $title_page = "Padron";

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
      "sidebar_active" => [0, 0],
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
            <a href="admin/padron/padron.php">
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
            <form action="admin/padron/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              
              <div class="col-md-12">
                <div class="form-group">
                  <label for="codigo">Codigo: </label>
                  <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Codigo" value="<?php echo $padron->codigo; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="dni">Dni: </label>
                  <input type="text" class="form-control" name="dni" id="dni" placeholder="Dni" value="<?php echo $padron->dni; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="apellido_paterno">ApellidoPaterno: </label>
                  <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno" placeholder="ApellidoPaterno" value="<?php echo $padron->apellido_paterno; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="apellido_materno">ApellidoMaterno: </label>
                  <input type="text" class="form-control" name="apellido_materno" id="apellido_materno" placeholder="ApellidoMaterno" value="<?php echo $padron->apellido_materno; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombres">Nombres: </label>
                  <input type="text" class="form-control" name="nombres" id="nombres" placeholder="Nombres" value="<?php echo $padron->nombres; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="fecha_nac">FechaNac: </label>
                  <input type="date" class="form-control" name="fecha_nac" id="fecha_nac" placeholder="FechaNac" value="<?php echo $padron->fecha_nac; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="distrito_id">DistritoId: </label>
                  <select class="custom-select select2-box" name="distrito_id" id="distrito_id" placeholder="DistritoId">
                    <option value="" selected disabled hidden>Seleccionar </option> 
                    <option value="text">text</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="caserio_id">CaserioId: </label>
                  <select class="custom-select select2-box" name="caserio_id" id="caserio_id" placeholder="CaserioId">
                    <option value="" selected disabled hidden>Seleccionar </option> 
                    <option value="text">text</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="sector_id">SectorId: </label>
                  <select class="custom-select select2-box" name="sector_id" id="sector_id" placeholder="SectorId">
                    <option value="" selected disabled hidden>Seleccionar </option> 
                    <option value="text">text</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="telefono">Telefono: </label>
                  <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $padron->telefono; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Email: </label>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $padron->email; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="direccion">Direccion: </label>
                  <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" value="<?php echo $padron->direccion; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="referencia">Referencia: </label>
                  <input type="text" class="form-control" name="referencia" id="referencia" placeholder="Referencia" value="<?php echo $padron->referencia; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo_vivienda_id">TipoViviendaId: </label>
                  <select class="custom-select select2-box" name="tipo_vivienda_id" id="tipo_vivienda_id" placeholder="TipoViviendaId">
                    <option value="" selected disabled hidden>Seleccionar </option> 
                    <option value="text">text</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="num_personas">NumPersonas: </label>
                  <input type="number" class="form-control" name="num_personas" id="num_personas" placeholder="NumPersonas" value="<?php echo $padron->num_personas; ?>">
                </div>
              </div>

              <div class="col-md-12 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $padron->imagen; ?>">
                <img src="<?php echo $padron->imagen; ?>" class="img-fluid img-view-edit mb-2">
              </div>
                <div class="col-12 mb-3">
                  <hr>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="imagen">Nueva Imagen</label>
                      </div>
                      <input data-file-img="images" data-id="preview-images" type="file" class="form-control" name="imagen"  required placeholder="Imagen" accept="image/*">
                    </div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                <div class="preview-img" data-img-preview="preview-images" ></div>
                </div>
              
              </div>

              <div class="w-100 text-center">
                <a href="admin/padron/padron.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
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
