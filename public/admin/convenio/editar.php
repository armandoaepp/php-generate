
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $convenio_id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($convenio_id <= 0) {
      header("Location: ./convenio.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $convenio_controller = new ConvenioController();

  $convenio = $convenio_controller->find($convenio_id);

  $publicar = trim($convenio->publicar);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked='checked'";
  } elseif ($publicar == "N") {
      $no = "checked='checked'";
  }

  $title_page = "Convenio";

  # tipo de convenios

    $tipo_convenio_controller = new TipoConvenioController();

    $params = array(
      'estado' => 1
    );

    $tipo_convenios = $tipo_convenio_controller->getByEstado($params);

  # Imgs convenio seleccionado
    $convenio_img_controller = new ConvenioImgController();
    $array = array(
      'convenio_id' => $convenio_id,
    ) ;

    $convenio_imgs = $convenio_img_controller->getByConvenioId($array);

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
        "sidebar_active" => [4, 2],
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
            <form action="admin/convenio/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $convenio_id ?>">
              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="tipo_convenio_id">Tipo Convenio: </label>
                    <select class="custom-select" name="tipo_convenio_id" id="tipo_convenio_id" placeholder="Tipo Convenio" required>
                      <option value="" selected disabled hidden>Seleccionar </option>
                      <?php foreach ($tipo_convenios as $row) { ?>
                      <option value="<?php echo $row->tipo_convenio_id; ?>" <?php if( $convenio->tipo_convenio_id == $row->tipo_convenio_id ) echo "selected" ?> > <?php echo $row->desc_convenio; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $convenio->nombre; ?>" required>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="caracteristica">Caracteristicas: </label>
                    <textarea class="form-control ckeditor" name="caracteristica" id="caracteristica" placeholder="Caracteristica" cols="30" rows="6"><?php echo htmlspecialchars_decode($convenio->caracteristica); ?></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="precio">Precio: </label>
                    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="<?php echo $convenio->precio; ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="glosa">Glosa: </label>
                    <textarea class="form-control ckeditor" name="glosa" id="glosa" placeholder="Glosa" cols="30" rows="6"><?php echo htmlspecialchars_decode($convenio->glosa); ?></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email" class="d-block">Publicar </label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="publicar" id="si" value="S" <?php echo $si; ?> >
                      <label class="form-check-label" for="si">SI</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="publicar" id="no" value="N" <?php echo $no; ?> >
                      <label class="form-check-label" for="no">NO</label>
                    </div>
                  </div>
                </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/convenio/convenio.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="fas fa-sync-alt"></i> Actualizar</button>
              </div>

            </form>
          </div>

          <!-- imagenes detalle -->
          <div class="col-12 mt-3 mt-md-5 text-right">
            <a href="admin/convenio/edit-images.php?id=<?php echo $convenio_id ; ?>">Editar Imagenes </a>
            <hr>
          </div>

          <div class="col-12 mb-3">
            <div class="row my-2">
              <?php
              // var_dump($convenio_imgs);
              foreach ($convenio_imgs as $images) {
              ?>
              <div class="col-6 col-sm-2 mb-3 px-2">
                <a href="<?php echo $images->imagen ?>" data-fancybox="gallery"
                  data-caption="<?php echo $images->desc_img ?>">
                  <img src="<?php echo $images->imagen ?>" class="img-fluid " alt="<?php echo $images->desc_img ?>" />
                </a>
              </div>

              <?php
                }
              ?>
            </div>
          </div>

        </div>

      </div>

    </main>

  </div>

  <?php require_once "../layout/foot_links.phtml"; ?>
  <?php require_once "../layout/ckeditor.phtml"; ?>

</body>

</html>
