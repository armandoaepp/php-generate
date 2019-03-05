
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./carrera.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $carrera_controller = new CarreraController();

  $carrera = $carrera_controller->find($id);

  $publicar = trim($carrera["publicar"]);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked='checked'";
  } elseif ($publicar == "N") {
      $no = "checked='checked'";
  }

  $title_page = "Carrera";

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
            <a href="admin/carrera/carrera.php">
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
            <form action="admin/carrera/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              
              <div class="col-md-12">
                <div class="form-group">
                  <label for="titulo">Titulo: </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="<?php echo $carrera['titulo']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" placeholder="Descripcion" cols="30" rows="6"><?php echo htmlspecialchars_decode($carrera['descripcion']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="slide">Slide: </label>
                  <input type="text" class="form-control" name="slide" id="slide" placeholder="Slide" value="<?php echo $carrera['slide']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="presentacion">Presentacion: </label>
                  <textarea class="form-control ckeditor" name="presentacion" id="presentacion" placeholder="Presentacion" cols="30" rows="6"><?php echo htmlspecialchars_decode($carrera['presentacion']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="porque">Porque: </label>
                  <textarea class="form-control ckeditor" name="porque" id="porque" placeholder="Porque" cols="30" rows="6"><?php echo htmlspecialchars_decode($carrera['porque']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="donde">Donde: </label>
                  <textarea class="form-control ckeditor" name="donde" id="donde" placeholder="Donde" cols="30" rows="6"><?php echo htmlspecialchars_decode($carrera['donde']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="certificacion">Certificacion: </label>
                  <textarea class="form-control ckeditor" name="certificacion" id="certificacion" placeholder="Certificacion" cols="30" rows="6"><?php echo htmlspecialchars_decode($carrera['certificacion']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="titulos">Titulos: </label>
                  <textarea class="form-control ckeditor" name="titulos" id="titulos" placeholder="Titulos" cols="30" rows="6"><?php echo htmlspecialchars_decode($carrera['titulos']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="inversion">Inversion: </label>
                  <textarea class="form-control ckeditor" name="inversion" id="inversion" placeholder="Inversion" cols="30" rows="6"><?php echo htmlspecialchars_decode($carrera['inversion']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="titulacion">Titulacion: </label>
                  <textarea class="form-control ckeditor" name="titulacion" id="titulacion" placeholder="Titulacion" cols="30" rows="6"><?php echo htmlspecialchars_decode($carrera['titulacion']); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="duracion">Duracion: </label>
                  <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Duracion" value="<?php echo $carrera['duracion']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="dia">Dia: </label>
                  <input type="text" class="form-control" name="dia" id="dia" placeholder="Dia" value="<?php echo $carrera['dia']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="horario">Horario: </label>
                  <input type="text" class="form-control" name="horario" id="horario" placeholder="Horario" value="<?php echo $carrera['horario']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="lugar">Lugar: </label>
                  <input type="text" class="form-control" name="lugar" id="lugar" placeholder="Lugar" value="<?php echo $carrera['lugar']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="precio">Precio: </label>
                  <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="<?php echo $carrera['precio']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="equipos">Equipos: </label>
                  <input type="text" class="form-control" name="equipos" id="equipos" placeholder="Equipos" value="<?php echo $carrera['equipos']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="consultas">Consultas: </label>
                  <input type="text" class="form-control" name="consultas" id="consultas" placeholder="Consultas" value="<?php echo $carrera['consultas']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="dirigido">Dirigido: </label>
                  <input type="text" class="form-control" name="dirigido" id="dirigido" placeholder="Dirigido" value="<?php echo $carrera['dirigido']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="aquien">Aquien: </label>
                  <input type="text" class="form-control" name="aquien" id="aquien" placeholder="Aquien" value="<?php echo $carrera['aquien']; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="temas">Temas: </label>
                  <textarea class="form-control ckeditor" name="temas" id="temas" placeholder="Temas" cols="30" rows="6"><?php echo htmlspecialchars_decode($carrera['temas']); ?></textarea>
                </div>
              </div>
              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="item">Item: </label>
                  <input type="text" class="form-control" name="item" id="item" placeholder="Item" value="<?php echo $carrera['item']; ?>">
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

              <div class="col-md-12 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $carrera['imagen']; ?>">
                <img src="<?php echo $carrera['imagen'] ?>" class="img-fluid img-view-edit mb-2">
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
                <a href="admin/carrera/carrera.php" type="button" class="btn btn-dark ">Cancelar</a>
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
