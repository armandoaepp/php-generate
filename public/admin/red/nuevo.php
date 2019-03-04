
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Red" ;

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
      "active"      => [5,0]
    );

    $sidebar = array(
      "sidebar_class"     => "",
      "sidebar_toggle"      => "only",
      "sidebar_active"      => [1,1],
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
            <a href="admin/red/red.php">
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
            <form action="admin/red/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="titulo">Titulo: </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Titulo">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="subtitulo">Empresa: </label>
                  <input type="text" class="form-control" name="subtitulo" id="subtitulo" required placeholder="Empresa">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="tipo">Tipo: </label>
                  <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="vacantes">Vacantes: </label>
                  <input type="text" class="form-control" name="vacantes" id="vacantes" placeholder="Vacantes">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="requisitos">Requisitos: </label>
                  <!-- <input type="text" class="form-control" name="requisitos" id="requisitos" placeholder="Requisitos"> -->
                  <textarea class="form-control ckeditor" name="requisitos" id="requisitos" cols="30" rows="10"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="conocimientos">Conocimientos: </label>
                  <!-- <input type="text" class="form-control" name="conocimientos" id="conocimientos" placeholder="Conocimientos"> -->
                  <textarea class="form-control ckeditor" name="conocimientos" id="conocimientos" cols="30" rows="10"></textarea>

                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="salario">Salario: </label>
                  <input type="text" class="form-control" name="salario" id="salario" placeholder="Salario">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombrecontacto">Nombre Contacto: </label>
                  <input type="text" class="form-control" name="nombrecontacto" id="nombrecontacto" placeholder="Nombre Contacto">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="telefonocontacto">Teléfono Contacto: </label>
                  <input type="text" class="form-control" name="telefonocontacto" id="telefonocontacto" placeholder="Teléfono Contacto">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="emailcontacto">Email Contacto: </label>
                  <input type="text" class="form-control" name="emailcontacto" id="emailcontacto" placeholder="Email Contacto">
                </div>
              </div>
              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="item">Item: </label>
                  <input type="text" class="form-control" name="item" id="item" placeholder="Item">
                </div>
              </div> -->

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
                <a href="admin/red/red.php" type="button" class="btn btn-dark ">Cancelar</a>
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
