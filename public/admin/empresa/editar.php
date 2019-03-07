
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./empresa.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $empresa_controller = new EmpresaController();

  $empresa = $empresa_controller->find($id);

  $publicar = trim($empresa["publicar"]);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked='checked'";
  } elseif ($publicar == "N") {
      $no = "checked='checked'";
  }

  # load tipos empresas
  $estado = 1 ;
  $params = array(
              'estado' => $estado,
            );

  $tipo_empresa_controller = new TipoEmpresaController();

  $tipo_empresas = $tipo_empresa_controller->getByEstado($params);

  $title_page = "Empresa";

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <?php

    $setvar = array(
        "titulo" => "$title_page",
        "follow" => "",
        "description" => "Administrador",
        "keywords" => "administrador",
        "active" => [1, 0],
    );

    $sidebar = array(
      "sidebar_class"  => "",
      "sidebar_toggle" => "only",
      "sidebar_active" => [7,2],
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
            <a href="admin/empresa/empresa.php">
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
            <form action="admin/empresa/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo_empresa_id">TipoEmpresaId: </label>
                  <select class="custom-select" name="tipo_empresa_id" id="tipo_empresa_id" placeholder="TipoEmpresaId">
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <option value="text">text</option>
                  </select>
                </div>
              </div> -->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo_empresa_id">TipoEmpresaId: </label>
                  <select class="custom-select" name="tipo_empresa_id" id="tipo_empresa_id" placeholder="TipoEmpresaId">
                    <option value="" selected disabled hidden>Seleccionar Tipo Empresa </option>
                    <?php foreach ($tipo_empresas as &$row) {?>
                      <option value="<?php echo $row["tipo_empresa_id"]; ?>" <?php if($row["tipo_empresa_id"] == $empresa["tipo_empresa_id"] ) echo 'selected="selected"' ?> ><?php echo $row["descripcion"]; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $empresa['nombre']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" placeholder="Descripcion" cols="30" rows="6"><?php echo htmlspecialchars_decode($empresa['descripcion']); ?></textarea>
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

              <div class="col-md-12 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $empresa['imagen']; ?>">
                <img src="<?php echo $empresa['imagen'] ?>" class="img-fluid img-view-edit mb-2">
              </div>
                <div class="col-12 mb-3">
                  <hr>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="imagen">Nueva Imagen</label>
                      </div>
                      <input data-file-img="images" type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" accept="image/*">
                    </div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview" id="preview"></div>
                </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/empresa/empresa.php" type="button" class="btn btn-dark ">Cancelar</a>
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
