
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Convenio" ;

  require_once "../../app/autoload.php";

  $tipo_convenio_controller = new TipoConvenioController();

  $params = array(
    'estado' => 1
  );

  $tipo_convenios = $tipo_convenio_controller->getByEstado($params);

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
      "sidebar_active"      => [4, 2],
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
            <a href="admin/convenio/convenio.php">
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
            <form action="admin/convenio/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo_convenio_id">Tipo Convenio: </label>
                  <select class="custom-select" name="tipo_convenio_id" id="tipo_convenio_id" placeholder="Tipo Convenio" required>
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <?php foreach ($tipo_convenios as $row) { ?>
                    <option value="<?php echo $row->tipo_convenio_id; ?>"> <?php echo $row->desc_convenio; ?></option>
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
                  <label for="caracteristica">Caracteristica: </label>
                  <textarea class="form-control ckeditor" name="caracteristica" id="caracteristica" placeholder="Caracteristica" cols="30" rows="6"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="precio">Precio: </label>
                  <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" required>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="glosa">Glosa: </label>
                  <textarea class="form-control ckeditor" name="glosa" id="glosa" placeholder="Glosa" cols="30" rows="6"></textarea>
                </div>
              </div>

              <div class="col-12 mb-3">
                <div class="form-group">
                  <label for="imagen">Imagen(es) :</label>
                  <input data-file-img="images" type="file" class="form-control" name="imagenes[]" id="imagenes" required
                    placeholder="Imagen" accept="image/*" multiple>
                </div>
              </div>

              <div class="col-12 mb-3">
                <div class="preview-img" data-img-preview="preview" id="preview"></div>
              </div>


              <div class="col-md-12">
                <div class="form-group">
                  <label for="email" class="d-block">Publicar </label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="si" value="S" checked="checked">
                    <label class="form-check-label" for="si">SI</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="publicar" id="no" value="N">
                    <label class="form-check-label" for="no">NO</label>
                  </div>
                </div>
              </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/convenio/convenio.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="far fa-save"></i> Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>
  </div>


  <?php require_once "../layout/foot_links.phtml"; ?>
  <?php require_once "../layout/ckeditor.phtml"; ?>

</body>

</html>
