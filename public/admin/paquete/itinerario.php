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

  $itinerario_controller = new ItinerarioController();

  $params = array(
    'paquete_id' => $id
  );

  $itinerarios = $itinerario_controller->getByPaqueteId($params);

  $title_page = "Paquete";

?>

<!DOCTYPE html>
<html lang="es">

<head>

<?php

  $setvar = array(
      "titulo"      => "$title_page",
      "follow"      => "",
      "description" => "Administrador",
      "keywords"    => "administrador",
      "active"      => [1, 0],
  );

  $sidebar = array(
      "sidebar_class"  => "",
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
            Itinerario
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h4 class="page-header-title">
              <?php echo $title_page; ?> Itinerario</h4>
          <hr>
          </div>
        </div>
        <div class="row">

          <div class="col-12 col-xl-12">
            <form action="admin/paquete/itinerario-save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accionForm" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">



              </div>

              <div class="row">

                <div class="col-md-10 mb-3">
                    <h4> paquete: <?php echo $paquete->nombre; ?> </h4>
                </div>
                <div class="col-2 text-right">
                    <button class="btn btn-outline-info btn-sm lh-1 btn-table"
                        onclick="modalAdd(<?php echo $paquete->paquete_id; ?>, event);" title="Agregar Dia">
                        <i class="fas fa-plus"></i>
                    </button>
                    <?php if( count($itinerarios) > 1 ) { ?>
                    <button class="btn btn-outline-danger btn-sm lh-1 btn-table"
                        onclick="modalDelete(<?php echo $paquete->paquete_id; ?>, <?php echo count($itinerarios) ; ?>, event);"
                        title="ELiminar Ultimo Día">
                        <i class="fas fa-minus"></i>
                    </button>
                    <?php } ?>
                </div>

                <?php foreach ($itinerarios as $indexKey => $row) { ?>
                <div class="col-12">
                    <h4 class="text-primary"> Día <?php echo str_pad($row->dia, 2, "0", STR_PAD_LEFT)  ; ?></h4>
                    <hr class="hr dashed">
                    <input type="hidden" name="itinerario_id[<?php echo $indexKey; ?>]" value="<?php echo $row->id ; ?>">
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="titulo">Titulo: </label>
                        <input type="text" class="form-control" name="titulo[<?php echo $indexKey; ?>]"
                            id="titulo_<?php echo $indexKey; ?>" placeholder="Titulo" value="<?php echo $row->titulo ; ?>">
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label for="descripcion">Descripción: </label>
                        <textarea class="form-control ckeditor" name="descripcion[<?php echo $indexKey; ?>]"
                            id="descripcion_<?php echo $indexKey; ?>" placeholder="Descripción" cols="30"
                            rows="6"><?php echo $row->descripcion ; ?></textarea>
                    </div>
                </div>

                <?php } ?>

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
<form id="formAddModal">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary text-uppercase" id="modalTitle">
                        <span> Agregar Nuevo Día al Itinerario del Paquete </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="tourIdAddModal" id="tourIdAddModal">
                    <div id="dataTextModal">
                        <h5> ¿Desea Agregar <strong>1 día</strong> al Itinerario Paquete?</h5>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-outline-secondary" id="btn-send">Agregar </button>
                    <div id="alertModal"></div>
                </div>
            </div>
        </div>
    </div>
</form>

<form id="formDeleteModal">
    <div class="modal fade" id="myDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger text-uppercase" id="modalTitle">
                        <span> Eliminar Día del Itinerario Paquete </span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="tourIdDeleteModal" id="tourIdDeleteModal">
                    <div id="dataTextDeleteModal">

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-outline-danger" id="btn-send">Eliminar Día </button>
                    <div id="alertModal"></div>
                </div>
            </div>
        </div>
    </div>
</form>


  <?php require_once "../layout/foot_links.phtml"?>
  <?php require_once "../layout/ckeditor.phtml"?>

  <script>
    (function ($) {
        // modals ADD
        function processFormAddModal(event) {

            // event.preventDefault();
            var inputs = $("#formAddModal").serializeFormJSON();
            inputs.paquete_id = $("#tourIdAddModal").val();
            inputs.accion = 'add-day';
            var params = JSON.stringify(inputs);


            $.ajax({
                url: './app/api/itinerario/IndexItinerario.php',
                dataType: "json",
                type: "post",
                contentType: "application/json",
                data: params,
                processData: false,
                success: function (data, textStatus, jQxhr) {

                    if (!data.error) {
                        $("#myModal").modal("hide");
                        // $("#formAddModal")[0].reset();
                        location.reload();
                    } else {
                        $("#alertModal").html("Error en servidor: " + data.message);
                    }

                },
                error: function (jqXhr, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });

            event.preventDefault();
        }

        $("#formAddModal").submit(processFormAddModal);

        // modals DELETE
        function processFormDeleteModal(event) {

            event.preventDefault();
            var inputs = $("#formDeleteModal").serializeFormJSON();
            inputs.paquete_id = $("#tourIdDeleteModal").val();
            inputs.accion = 'remove-day';
            var params = JSON.stringify(inputs);

            $.ajax({
                url: './app/api/itinerario/IndexItinerario.php',
                dataType: "json",
                type: "post",
                contentType: "application/json",
                data: params,
                processData: false,
                success: function (data, textStatus, jQxhr) {

                    if (!data.error) {
                        $("#myModal").modal("hide");
                        // $("#formDeleteModal")[0].reset();
                        location.reload();
                    } else {
                        $("#alertModal").html("Error en servidor: " + data.message);
                    }

                },
                error: function (jqXhr, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });

            event.preventDefault();
        }

        $("#formDeleteModal").submit(processFormDeleteModal);

    })(jQuery);


    // modal ADD
    function modalAdd(id, event) {
        event.preventDefault();
        $("#tourIdAddModal").val(id);

        // var text = `<strong> ${textRow} </strong> `;
        // $("#dataTextModal").html(text);

        $("#myModal").modal("show");
    }

    // modal DELETE
    function modalDelete(id, text, event) {
        event.preventDefault();
        $("#tourIdDeleteModal").val(id);

        var html = `<h5> ¿Desea Eliminar el <strong>día ${text} </strong> del Itinerario del tours?</h5>`;
        $("#dataTextDeleteModal").html(html);

        $("#myDeleteModal").modal("show");
    }
</script>



</body>

</html>