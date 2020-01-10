<?php
require_once "../sesion_admin.php";
loginRedirect("../login.php");

$title_page = "Habitacion";

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
  "sidebar_active" => [2, 0],
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
            <a href="admin/habitacion/habitacion.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page; ?>s
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
            <form action="admin/habitacion/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="precio">Precio: </label>
                    <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descripcion">Descripcion: </label>
                    <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion"
                      cols="30" rows="6"></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="caracteristicas">Caracteristicas: </label>
                    <textarea class="form-control ckeditor" name="caracteristicas" id="caracteristicas"
                      placeholder="Caracteristicas" cols="30" rows="6"></textarea>
                  </div>
                </div>

                <!--  <div class="col-md-12">
                <div class="form-group">
                  <label for="num_visitas">NumVisitas: </label>
                  <input type="text" class="form-control" name="num_visitas" id="num_visitas" placeholder="NumVisitas">
                </div>
              </div> -->

                <div class="col-12 mb-3">
                  <div class="form-group">
                    <label for="imagen">Imagen:</label>
                    <input data-file-img="images" data-id="preview-images" type="file" class="form-control"
                      name="imagenes[]" required placeholder="Imagen" accept="image/*" multiple>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview-images"></div>
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

              </div>

              <div class="w-100 text-center">
                <a href="admin/habitacion/habitacion.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i>
                  Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="far fa-save"></i>
                  Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>
  </div>


  <?php require_once "../layout/foot_links.phtml";?>

  <?php require_once "../layout/ckeditor.phtml";?>

  <style>
    /* .preview-item-image {
      display: inline-block !important;

    }

    .preview-item-image img {
      max-width: 100%;
      max-height: 120px;
    }

    .preview-item-image img {
      max-width: 100%;
    } */
  </style>

  <script>
   /*  (function (document) {

      img_preview = document.querySelectorAll("[data-file-img=\"images\"]");

      if (img_preview) {
        for (var i = 0; i < img_preview.length; i++) {

          input_image = img_preview[i];

          //AGREGAMOS EL EVENTOS
          input_image.addEventListener('change', function () {

            identificador = this.dataset.id;

            var preview = document.querySelector("[data-img-preview=\"" + identificador + "\"]");
            console.log(this.files);
            if (preview) {
              preview.innerHTML = "";

              if (this.files) {
                [].forEach.call(this.files, readAndPreview);
              }

            }

            function readAndPreview(file) {

              // Make sure `file.name` matches our extensions criteria
              if (!/\.(jpe?g|png|gif)$/i.test(file.name)) {
                return alert(file.name + " is not an image");
              } // else...

              var reader = new FileReader();

              reader.onload = function (event) {
                //  console.log(file.type) ;
                var image = new Image();
                image.title = file.name;
                image.src = this.result;
                // image.height = 100;

                // Eliminar extension
                let file_name = file.name;
                let n_sep_ext = file_name.lastIndexOf(".");
                let value_text = file_name.slice(0, n_sep_ext)

                html_preview = `<div class="preview-item-image">
                    <input type="text" class="form-control" name="desc_img[]" value="${value_text}" >
                    </div>` ;

                $($.parseHTML(html_preview)).prepend(image).appendTo(preview);


              }

              reader.readAsDataURL(file);

            }


          });
        }


      }


    })(document); */

  </script>

</body>

</html>