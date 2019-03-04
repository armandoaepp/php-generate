
<?php
require_once "../sesion_admin.php";
loginRedirect("../login.php");

$id = !empty($_GET["id"]) ? $_GET["id"] : 0;

if ($id <= 0) {
    header("Location: ./red.php ", true, 301);
}

require_once "../../app/autoload.php";

$red_controller = new RedController();

$red = $red_controller->find($id);

$publicar = trim($red["publicar"]);

$si = "";
$no = "";

if ($publicar == "S") {
    $si = "checked='checked'";
} elseif ($publicar == "N") {
    $no = "checked='checked'";
}

$title_page = "Red";

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
    "sidebar_active" => [5, 0],
);

require_once "../layout/head_links.phtml";
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
            <a href="admin/red/red.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page; ?>s
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
            <form action="admin/red/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="titulo">Titulo: </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Titulo"  value="<?php echo $red['titulo'] ?>" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="subtitulo">Subtitulo: </label>
                  <input type="text" class="form-control" name="subtitulo" id="subtitulo" required placeholder="Subtitulo"  value="<?php echo $red['subtitulo'] ?>" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo">Tipo: </label>
                  <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo"  value="<?php echo $red['tipo'] ?>" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="vacantes">Vacantes: </label>
                  <input type="text" class="form-control" name="vacantes" id="vacantes" placeholder="Vacantes"  value="<?php echo $red['vacantes'] ?>" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="requisitos">Requisitos: </label>
                  <!-- <input type="text" class="form-control" name="requisitos" id="requisitos" placeholder="Requisitos"  value="<?php echo $red['requisitos'] ?>" > -->
                  <textarea class="form-control ckeditor" name="requisitos" id="requisitos" cols="30" rows="10"><?php echo $red['requisitos'] ?></textarea>

                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="conocimientos">Conocimientos: </label>
                  <!-- <input type="text" class="form-control" name="conocimientos" id="conocimientos" placeholder="Conocimientos"  value="<?php echo $red['conocimientos'] ?>" > -->
                  <textarea class="form-control ckeditor" name="conocimientos" id="conocimientos" cols="30" rows="10"><?php echo $red['conocimientos'] ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="salario">Salario: </label>
                  <input type="text" class="form-control" name="salario" id="salario" placeholder="Salario"  value="<?php echo $red['salario'] ?>" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombrecontacto">Nombre Contacto: </label>
                  <input type="text" class="form-control" name="nombrecontacto" id="nombrecontacto" placeholder="Nombre Contacto"  value="<?php echo $red['nombrecontacto'] ?>" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="telefonocontacto">Teléfono Contacto: </label>
                  <input type="text" class="form-control" name="telefonocontacto" id="telefonocontacto" placeholder="Teléfono Contacto"  value="<?php echo $red['telefonocontacto'] ?>" >
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="emailcontacto">Email Contacto: </label>
                  <input type="text" class="form-control" name="emailcontacto" id="emailcontacto" placeholder="Email Contacto"  value="<?php echo $red['emailcontacto'] ?>" >
                </div>
              </div>
              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="item">Item: </label>
                  <input type="text" class="form-control" name="item" id="item" placeholder="Item"  value="<?php echo $red['item'] ?>" >
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
                <a href="admin/red/red.php" type="button" class="btn btn-dark ">Cancelar</a>
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
