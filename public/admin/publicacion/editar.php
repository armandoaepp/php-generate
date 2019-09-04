
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./publicacion.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $publicacion_controller = new PublicacionController();

  $publicacion = $publicacion_controller->find($id);

  $publicar = trim($publicacion->publicar);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked='checked'";
  } elseif ($publicar == "N") {
      $no = "checked='checked'";
  }

  $title_page = "Publicacion";

  # tipo de publicaciones
  $params = array(
    'publicar' => 'S'
  );

  $tipo_publicacion_controller = new TipoPublicacionController();

  $tipo_publicaciones = $tipo_publicacion_controller->getPublished($params);

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
      "sidebar_active" => [1, 1],
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
            <a href="admin/publicacion/publicacion.php">
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
            <form action="admin/publicacion/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo_publicacion_id">Tipo Publicación: </label>
                  <select class="custom-select" name="tipo_publicacion_id" id="tipo_publicacion_id" placeholder="Tipo Publicación" required>
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <?php foreach ($tipo_publicaciones as $row) { ?>
                    <option value="<?php echo $row->tipo_publicacion_id; ?>" <?php if( $publicacion->tipo_publicacion_id == $row->tipo_publicacion_id ) echo "selected" ?> > <?php echo $row->descripcion; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="titulo">Titulo: </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="<?php echo $publicacion->titulo; ?>" required>
                </div>
              </div>

              <div class="col-md-10">
                <div class="form-group">
                  <label for="url_file">Nuevo Archivo: </label>
                  <input type="file" class="form-control" name="url_file" id="url_file" placeholder="Nuevo Archivo" value="<?php echo $publicacion->url_file; ?>" accept="image/jpeg,image/gif,image/png,application/pdf">
                </div>
              </div>

              <div class="col-md-2 text-center d-flex align-items-center justify-content-end">
                <a href="<?php echo $publicacion->url_file; ?>" target="_blank" rel="noopener noreferrer">Ver Archivo Guardado</a>
                <input type="hidden" class="form-control" name="file_db" id="file_db" value="<?php echo $publicacion->url_file; ?>">
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
                <a href="admin/publicacion/publicacion.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
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