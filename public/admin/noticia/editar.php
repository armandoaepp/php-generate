<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./noticia.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $noticia_controller = new NoticiaController();

  // $noticia = $noticia_controller->find($id);

  $data = $noticia_controller->getFindWithDetalle($id);

  $noticia     = $data['noticia'] ;
  $noticia_img = $data['noticia_img'] ;


  $publicar = trim($noticia["publicar"]);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked='checked'";
  } elseif ($publicar == "N") {
      $no = "checked='checked'";
  }

  $title_page = "Noticia";

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
        "active" => [3, 0],
    );

    $sidebar = array(
        "sidebar_class" => "",
        "sidebar_toggle" => "only",
        "sidebar_active" => [3, 2],
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
            <a href="admin/noticia/noticia.php">
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
            <form action="admin/noticia/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="titulo">Titulo: </label>
                    <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="Titulo"
                      value="<?php echo $noticia['titulo'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descripcion">Descripcion: </label>
                    <!-- <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="Descripcion"  value="<?php echo $noticia['descripcion'] ?>" > -->
                    <textarea class="form-control ckeditor" name="descripcion" id="descripcion" cols="30" rows="10"
                      required> <?php echo $noticia['descripcion']; ?> </textarea>
                  </div>
                </div>
                <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="item">Item: </label>
                  <input type="text" class="form-control" name="item" id="item" required placeholder="Item"  value="<?php echo $noticia['item'] ?>" >
                </div>
              </div> -->
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="glosa">Glosa: </label>
                    <!-- <input type="text" class="form-control" name="glosa" id="glosa" required placeholder="Glosa"  value="<?php echo $noticia['glosa'] ?>" > -->
                    <textarea class="form-control ckeditor" name="glosa" id="glosa" cols="30"
                      rows="6"> <?php echo $noticia['glosa'] ?> </textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email" class="d-block">Publicar </label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="publicar" id="si" value="S" <?php echo $si; ?>>
                      <label class="form-check-label" for="si">SI</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="publicar" id="no" value="N" <?php echo $no; ?>>
                      <label class="form-check-label" for="no">NO</label>
                    </div>
                  </div>
                </div>

                <!-- <div class="col-sm-6 col-md-12 text-center">
                  <input type="hidden" class="form-control" name="img_bd" id="img_bd"
                    value="<?php echo $noticia['imagen']; ?>">
                  <img src="<?php echo $noticia['imagen'] ?>" class="img-fluid img-view-edit mb-2">
                </div>
                <div class="col-12 mb-3">
                  <hr>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="imagen">Nueva Imagen</label>
                      </div>
                      <input data-file-img="images" type="file" class="form-control" name="imagen" id="imagen" required
                        placeholder="Imagen" accept="image/*">
                    </div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview" id="preview"></div>
                </div> -->

              </div>

              <div class="w-100 text-center">
                <a href="admin/noticia/noticia.php" type="button" class="btn btn-dark ">Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
              </div>

            </form>
          </div>

           <!-- imagenes detalle -->
           <div class="col-12 mt-3 mt-md-5 text-right">
            <a href="admin/noticia/edit-images.php?id=<?php echo $id ; ?>">Editar Imagenes </a>
            <hr>
          </div>

          <div class="col-12 mb-3">
            <div class="row my-2">
              <?php
                foreach ($noticia_img as &$images) {
              ?>
              <div class="col-6 col-sm-2 mb-3 px-2">
                <a href="<?php echo $images["imagen"] ?>" data-fancybox="gallery"
                  data-caption="Caption for single image">
                  <img src="<?php echo $images["imagen"] ?>" class="img-fluid " alt="" />
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

  <?php require_once "../layout/ckeditor.phtml"?>

  <!-- fancybox -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>


</body>

</html>