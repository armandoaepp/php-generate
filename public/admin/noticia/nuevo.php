<?php
require_once "../sesion_admin.php";
loginRedirect("../login.php");

$title_page = "Noticia";

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php

    $setvar = array(
        "titulo" => "Nueva $title_page",
        "follow" => "",
        "description" => "Administrador",
        "keywords" => "administrador",
        "active" => [1, 0],
    );

    $sidebar = array(
        "sidebar_class" => "",
        "sidebar_toggle" => "only",
        "sidebar_active" => [3, 2],
    );

    require_once "../layout/head_links.phtml";

    require_once "../../app/autoload.php";

    # load tipos noticias
    $estado = 1 ;
    $params = array(
                'estado' => $estado,
              );

    $tipo_noticia_controller = new TipoNoticiaController();

    $tipo_noticias = $tipo_noticia_controller->getByEstado($params);
?>
</head>

<body>
  <?php require "../layout/header.phtml";?>

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
            <a href="admin/noticia/noticia.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page; ?>s
            </a>
          </li>
          <li class="breadcrumb-item active bg-info text-white" aria-current="page">
            Nueva <?php echo $title_page; ?>
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h5 class="page-header-title">Nueva <?php echo $title_page; ?> </h5>
            <hr class="hr dashed">
          </div>
        </div>
        <div class="row">

          <div class="col-12">
            <form action="admin/noticia/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">

              <div class="col-md-12">
                  <div class="form-group">
                    <label for="tipo_noticia_id">Tipo Noticia / Evento: </label>
                     <select class="custom-select" name="tipo_noticia_id" id="tipo_noticia_id" placeholder="tipo noticia" required>
                      <option value="" selected disabled hidden>Seleccionar Tipo Noticia</option>
                      <?php foreach ($tipo_noticias as &$row) {?>
                      <option value="<?php echo $row["tipo_noticia_id"]; ?>" ><?php echo $row["nombre"]; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="titulo">Titulo: </label>
                    <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Titulo">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descripcion">Descripcion: </label>
                    <!-- <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="Descripcion"> -->
                    <textarea class="form-control ckeditor" name="descripcion" id="descripcion" cols="30"
                      rows="10"></textarea>
                  </div>
                </div>
                <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="item">Item: </label>
                  <input type="text" class="form-control" name="item" id="item" required placeholder="Item">
                </div>
              </div> -->
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="glosa">Glosa: </label>
                    <!-- <input type="text" class="form-control" name="glosa" id="glosa" required placeholder="Glosa"> -->
                    <textarea class="form-control ckeditor" name="glosa" id="glosa" cols="30" rows="10"></textarea>
                  </div>
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

                <!-- <div class="col-12 mb-3">
                <div class="form-group">
                  <label for="imagen">Imagen:</label>
                  <input data-file-img="images" type="file" class="form-control" name="imagen" id="imagen" required placeholder="Imagen" accept="image/*">
                </div>
              </div> -->
                <div class="col-12 mb-3">
                  <div class="form-group">
                    <label for="imagen">Imagen(es) :</label>
                    <input data-file-img="images" type="file" class="form-control" name="imagen[]" id="imagen" required
                      placeholder="Imagen" accept="image/*" multiple>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview" id="preview"></div>
                </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/noticia/noticia.php" type="button" class="btn btn-dark ">Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>
  </div>


  <?php require_once "../layout/foot_links.phtml";?>
  <?php require_once "../layout/ckeditor.phtml";?>

</body>

</html>