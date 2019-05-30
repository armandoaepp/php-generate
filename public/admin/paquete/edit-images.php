<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./noticia.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_controller = new PaqueteController();

  $paquete = $paquete_controller->find($id);

  $paquete_img_controller = new PaqueteImgController();

  $params = array(
    'paquete_id' => $id
  );

  $paquete_img = $paquete_img_controller->getByPaqueId($params);

  $title_page = "Paquete";

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
      "sidebar_active" => [3, 2],
  );

  require_once "../layout/head_links.phtml";
?>

  <!-- fancybox -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.css">
  <!-- sortable -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">


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
            <a href="admin/paquete/paquete.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page; ?>s
            </a>
          </li>
          <li class="breadcrumb-item">
            <a href="admin/paquete/editar.php?id=<?php echo $id; ?> ">
              <i class="fas fa-reply"></i>
              <?php echo $title_page; ?> Editar
            </a>
          </li>


          <li class="breadcrumb-item active bg-info text-white" aria-current="page">
            Editar Imagenes
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h4 class="page-header-title">Editar
              <?php echo $title_page; ?> Imagenes</h4>
          </div>
        </div>
        <div class="row">

          <div class="col-12 col-xl-12">
            <form action="admin/paquete/save-images.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accionForm" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

                <div class="col-md-12">
                  <label for="titulo">Paquete : </label>
                  <?php echo $paquete->nombre ?>
                </div>

                <!-- imagenes detalle -->
                <div class="col-12">
                  <div id="sortable" class="row my-2">

                    <?php
                      foreach ($paquete_img as $index => &$images) {
                    ?>

                    <div class="col-6 col-sm-3 col-md-2 mb-3 ">
                      <div class="card ui-state-default">
                        <!-- <span class="ui-icon ui-icon-arrowthick-2-n-s"></span> -->
                        <span class="icon-move"> <i class="fas fa-arrows-alt"></i> </span>
                        <input type="hidden" name="ids_paquete_img[]" value="<?php echo $images->paquete_id; ?>">
                        <a href="<?php echo $images->imagen; ?>" data-fancybox="gallery">
                          <img src="<?php echo $images->imagen; ?>" class="img-fluid " alt="" />
                        </a>
                        <button type="button" class="close close-danger ml-auto" title="Eliminar" aria-label="Close"
                          onclick="event.preventDefault(); deleteItemImg(<?php echo $images->paquete_id; ?>)">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    </div>

                    <?php
                    }
                    ?>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <hr>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="imagen">Agregar Imagen</label>
                      </div>
                      <input data-file-img="images" type="file" class="form-control" name="imagen[]" id="imagen"
                        placeholder="Imagen" accept="image/*" multiple>
                    </div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview" id="preview"></div>
                </div>

              </div>

              <div class="w-100 text-right">
                <a href="admin/noticia/noticia.php" type="button" class="btn btn-dark ">Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
              </div>

            </form>
          </div>


        </div>

      </div>

    </main>

  </div>

  <!-- Modal Delete -->
  <form id="formModal">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle text-uppercase">Eliminar
              <?php echo $title_page ?>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="idRowModal" id="idRowModal">
            <input type="hidden" name="accion" id="accion">
            <input type="hidden" name="estado" id="estado" value="1">
            <div id="dataTextModal">
            </div>

            <div class="col-12 my-3">
              <label for="si" class="text-bold "> Conservar en historial: </label>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="historial" id="si" value="1">
                <label class="form-check-label" for="si">SI</label>
              </div>

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="historial" id="no" value="0" checked="checked">
                <label class="form-check-label" for="no">NO</label>
              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-danger" id="btn-send">Eliminar </button>
            <div id="alertModal"></div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <?php require_once "../layout/foot_links.phtml"?>

  <!-- fancybos -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
  <!-- detalle -->
  <script>
    (function ($) {
      function processFormModal(event) {
        event.preventDefault();

        // var params = JSON.stringify({
        //   "id_producto_detalle": $('#idRowModal').val(),
        //   "accion": $('#accion').val(),
        // });

        var inputs = $('#formModal').serializeFormJSON();
        inputs.id =  $('#idRowModal').val();
        var params = JSON.stringify(inputs);

        console.log(params);

        $.ajax({
          url: './app/api/noticia-img/IndexNoticiaImg.php',
          dataType: 'json',
          type: 'POST',
          contentType: 'application/json',
          data: params,
          processData: false,
          success: function (data, textStatus, jQxhr) {
            console.log(data);

            if (!data.error && data.data) {
              $('#myModal').modal('hide');
              $("#formModal")[0].reset();
              location.reload();
            } else {
              $('#alertModal').html('Error en servidor: ' + data.data);
            }

          },
          error: function (jqXhr, textStatus, errorThrown) {
            console.log(textStatus);
            console.log(jqXhr);
            console.log(errorThrown);
          }
        });

      }

      $('#formModal').submit(processFormModal);

    })(jQuery);


    // modal DELETE
    function deleteItemImg(id, textRow) {
      $('#idRowModal').val(id);
      // $('#accion').val("deleteImg");
      $('#accion').val("delete");
      var text = `¿Esta seguro de eliminar Imagen del <?php echo $title_page ?>?`;
      $('#dataTextModal').html(text);
      $('#btn-send').text("Eliminar");

      $('#myModal').modal('show');
    }
  </script>

  <!-- sortable -->
  <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->
  <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $(function () {
      $("#sortable").sortable();
      $("#sortable").disableSelection();
    });
  </script>



</body>

</html>