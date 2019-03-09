
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./oportunidad-laboral.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $oportunidad_laboral_controller = new OportunidadLaboralController();

  $oportunidad_laboral = $oportunidad_laboral_controller->find($id);

  $publicar = trim($oportunidad_laboral["publicar"]);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked='checked'";
  } elseif ($publicar == "N") {
      $no = "checked='checked'";
  }

  # load tipos empresas

  $params = array(
              'estado' => 1,
            );

  $empresa_controller = new EmpresaController();

  $tipo_empresas = $empresa_controller->getByEstado($params);


  $title_page = "Oportunidad Laboral";

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
        "sidebar_class" => "",
        "sidebar_toggle" => "only",
        "sidebar_active" => [7, 3],
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
            <a href="admin/oportunidad-laboral/oportunidad-laboral.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page ;?>es
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
            <form action="admin/oportunidad-laboral/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="empresa_id">Empresa: </label>
                  <!-- <select class="custom-select" name="empresa_id" id="empresa_id" placeholder="EmpresaId">
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <option value="text">text</option>
                  </select> -->
                  <select class="custom-select" name="empresa_id" id="empresa_id" required placeholder="Empresa">
                    <option value="" selected disabled hidden>Seleccionar Empresa </option>
                    <?php foreach ($tipo_empresas as &$row) {?>
                      <option value="<?php echo $row["empresa_id"]; ?>" <?php if($row["empresa_id"] == $oportunidad_laboral["empresa_id"] ) echo 'selected="selected"' ?> ><?php echo $row["nombre"]; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="titulo">Titulo: </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="<?php echo $oportunidad_laboral['titulo']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo">Tipo: </label>
                  <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo" value="<?php echo $oportunidad_laboral['tipo']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="vacantes">Vacantes: </label>
                  <input type="text" class="form-control" name="vacantes" id="vacantes" placeholder="Vacantes" value="<?php echo $oportunidad_laboral['vacantes']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="requisitos">Requisitos: </label>
                  <textarea class="form-control ckeditor" name="requisitos" id="requisitos" placeholder="Requisitos" cols="30" rows="6"><?php echo htmlspecialchars_decode($oportunidad_laboral['requisitos']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="conocimientos">Conocimientos: </label>
                  <textarea class="form-control ckeditor" name="conocimientos" id="conocimientos" placeholder="Conocimientos" cols="30" rows="6"><?php echo htmlspecialchars_decode($oportunidad_laboral['conocimientos']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="salario">Salario: </label>
                  <input type="text" class="form-control" name="salario" id="salario" placeholder="Salario" value="<?php echo $oportunidad_laboral['salario']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombrecontacto">Nombrecontacto: </label>
                  <input type="text" class="form-control" name="nombrecontacto" id="nombrecontacto" placeholder="Nombrecontacto" value="<?php echo $oportunidad_laboral['nombrecontacto']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="telefonocontacto">Telefonocontacto: </label>
                  <input type="tel" class="form-control" name="telefonocontacto" id="telefonocontacto" placeholder="Telefonocontacto" value="<?php echo $oportunidad_laboral['telefonocontacto']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="emailcontacto">Emailcontacto: </label>
                  <input type="email" class="form-control" name="emailcontacto" id="emailcontacto" placeholder="Emailcontacto" value="<?php echo $oportunidad_laboral['emailcontacto']; ?>">
                </div>
              </div>
              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="item">Item: </label>
                  <input type="number" class="form-control" name="item" id="item" placeholder="Item" value="<?php echo $oportunidad_laboral['item']; ?>">
                </div>
              </div> -->

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
                <a href="admin/oportunidad-laboral/oportunidad-laboral.php" type="button" class="btn btn-dark ">Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
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