
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./diplomado.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $diplomado_controller = new DiplomadoController();

  $diplomado = $diplomado_controller->find($id);

  $title_page = "Diplomado";

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
        "sidebar_active" => [1, 0],
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
            <a href="admin/diplomado/diplomado.php">
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
            <form action="admin/diplomado/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">Titulo: </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Titulo"  value="<?php echo $diplomado['titulo'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="Descripcion"  value="<?php echo $diplomado['descripcion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="slide">Slide: </label>
                  <input type="text" class="form-control" name="slide" id="slide" required placeholder="Slide"  value="<?php echo $diplomado['slide'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="certificacion">Certificacion: </label>
                  <input type="text" class="form-control" name="certificacion" id="certificacion" required placeholder="Certificacion"  value="<?php echo $diplomado['certificacion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulos">Titulos: </label>
                  <input type="text" class="form-control" name="titulos" id="titulos" required placeholder="Titulos"  value="<?php echo $diplomado['titulos'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inversion">Inversion: </label>
                  <input type="text" class="form-control" name="inversion" id="inversion" required placeholder="Inversion"  value="<?php echo $diplomado['inversion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulacion">Titulacion: </label>
                  <input type="text" class="form-control" name="titulacion" id="titulacion" required placeholder="Titulacion"  value="<?php echo $diplomado['titulacion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleduracion">Detalleduracion: </label>
                  <input type="text" class="form-control" name="detalleduracion" id="detalleduracion" required placeholder="Detalleduracion"  value="<?php echo $diplomado['detalleduracion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalledia">Detalledia: </label>
                  <input type="text" class="form-control" name="detalledia" id="detalledia" required placeholder="Detalledia"  value="<?php echo $diplomado['detalledia'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detallehorario">Detallehorario: </label>
                  <input type="text" class="form-control" name="detallehorario" id="detallehorario" required placeholder="Detallehorario"  value="<?php echo $diplomado['detallehorario'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detallelugar">Detallelugar: </label>
                  <input type="text" class="form-control" name="detallelugar" id="detallelugar" required placeholder="Detallelugar"  value="<?php echo $diplomado['detallelugar'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleprecio">Detalleprecio: </label>
                  <input type="text" class="form-control" name="detalleprecio" id="detalleprecio" required placeholder="Detalleprecio"  value="<?php echo $diplomado['detalleprecio'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleequipos">Detalleequipos: </label>
                  <input type="text" class="form-control" name="detalleequipos" id="detalleequipos" required placeholder="Detalleequipos"  value="<?php echo $diplomado['detalleequipos'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleconsultas">Detalleconsultas: </label>
                  <input type="text" class="form-control" name="detalleconsultas" id="detalleconsultas" required placeholder="Detalleconsultas"  value="<?php echo $diplomado['detalleconsultas'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalledirigido">Detalledirigido: </label>
                  <input type="text" class="form-control" name="detalledirigido" id="detalledirigido" required placeholder="Detalledirigido"  value="<?php echo $diplomado['detalledirigido'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="aquien">Aquien: </label>
                  <input type="text" class="form-control" name="aquien" id="aquien" required placeholder="Aquien"  value="<?php echo $diplomado['aquien'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="temas">Temas: </label>
                  <input type="text" class="form-control" name="temas" id="temas" required placeholder="Temas"  value="<?php echo $diplomado['temas'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombreseo">Nombreseo: </label>
                  <input type="text" class="form-control" name="nombreseo" id="nombreseo" required placeholder="Nombreseo"  value="<?php echo $diplomado['nombreseo'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="orden">Orden: </label>
                  <input type="text" class="form-control" name="orden" id="orden" required placeholder="Orden"  value="<?php echo $diplomado['orden'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">Fecha: </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="Fecha"  value="<?php echo $diplomado['fecha'] ?>" >
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $diplomado['imagen']; ?>">
                <img src="<?php echo $diplomado['imagen'] ?>" class="img-fluid img-view-edit mb-2">
              </div>
                <div class="col-12 mb-3">
                  <hr>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="imagen">Nueva Imagen</label>
                      </div>
                      <input data-file-img="images" type="file" class="form-control" name="imagen" id="imagen" required placeholder="Imagen" accept="image/*">
                    </div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview" id="preview"></div>
                </div>
              
              </div>

              <div class="w-100 text-center">
                <a href="admin/diplomado/diplomado.php" type="button" class="btn btn-dark ">Cancelar</a>
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
