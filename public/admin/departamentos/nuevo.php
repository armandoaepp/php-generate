
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Departamento" ;

  require_once "../../app/autoload.php";

  // $ubigeo_controller = new UbigeoController();
  $region_controller = new RegionController();

  $params = array(
    'estado' => 1,
  );

  $regiones = $region_controller->getByEstado($params);
  // var_dump($regiones);

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
      "sidebar_active"      => [2,3],
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
            <a href="admin/ubigeo/ubigeo.php">
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
            <form action="admin/departamentos/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">

              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="pais_id">PaisId: </label>
                  <select class="custom-select" name="pais_id" id="pais_id" placeholder="PaisId">
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <option value="text">text</option>
                  </select>
                </div>
              </div> -->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="region_id">Región: </label>
                  <select class="custom-select" name="region_id" id="region_id" placeholder="Región">
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <?php foreach ($regiones as $row) { ?>
                    <option value="<?php echo $row->region_id; ?>"> <?php echo $row->nombre; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="codigo">Codigo: </label>
                  <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Codigo" maxlength="10">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required maxlength="255">
                </div>
              </div>

              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion">
                </div>
              </div> -->

              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="ubigeo_id_padre">UbigeoIdPadre: </label>
                  <select class="custom-select" name="ubigeo_id_padre" id="ubigeo_id_padre" placeholder="UbigeoIdPadre">
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <option value="text">text</option>
                  </select>
                </div>
              </div> -->

              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo">Tipo: </label>
                  <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo">
                </div>
              </div> -->

              </div>

              <div class="w-100 text-center">
                <a href="admin/departamentos/departamentos.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="far fa-save"></i> Guardar</button>
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