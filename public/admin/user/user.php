<?php

    require_once "../sesion_admin.php";

    loginRedirect("../login.php");

    require_once "../../app/autoload.php";

    $user_controller = new UserController();

    $data = $user_controller->getAll();

    $title_page = "users"

?>

<?php $title_page = "user" ; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array("titulo" => $title_page . " | Admin ", "follow" => "", "active" => [1, 1]);
    require_once "../layout/head_links.phtml";
  ?>

  <link rel="stylesheet" href="plugins/datatables/css/dataTables.bootstrap4.min.css">
</head>

<body>
  <?php require "../layout/header.phtml"; ?>

  <main role="main" class="screen-main">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">
            <i class="material-icons">home</i>
          </a>
        </li>
        <li class="breadcrumb-item" aria-current="page">
          <a href="admin/user/user.php">
            <?php echo $title_page ?></a>
        </li>
      </ol>
    </nav>

    <div class="container py-2">
      <div class="row">
        <div class="col-12">
          <h5 class="page-header-title">Lista de <?php echo $title_page ?> </h5>
        </div>
        <div class="col-12 mb-3">
          <a href="admin/user/user.php" class="btn btn-outline-primary btn-sm btn-bar" role="button">
            <i class="material-icons ">format_list_bulleted</i> Listar
          </a>
          <a href="admin/user/nuevo.php" class="btn btn-outline-primary btn-sm btn-bar" role="button">
            <i class="material-icons ">insert_drive_file</i> Nuevo
          </a>
        </div>

        <div class="col-12">
        
            <table id="dataTableList" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th width="50">User_id </th>
                  <th>Nombre </th>
                  <th>Apellidos </th>
                  <th>Email </th>
                  <th>Password </th>
                  <th width="70"></th>
                </tr>
              </thead>

              <tbody>
                <?php foreach ($data as &$row) {?>
                  <tr>
                  <td> <?php echo $row["user_id"] ?> </td>
                  <td> <?php echo $row["nombre"] ?> </td>
                  <td> <?php echo $row["apellidos"] ?> </td>
                  <td> <?php echo $row["email"] ?> </td>
                  <td> <?php echo $row["password"] ?> </td>

                  <td class="text-center">
                    <a class="btn btn-outline-primary btn-sm lh-1 btn-table" href="admin/user/editar.php?id=<?php echo $row["user_id"] ?>" title="Editar">
                      <i class="material-icons">edit</i>
                    </a>
                    <button class="btn btn-outline-danger btn-sm lh-1 btn-table" onclick="modalDelete(<?php echo $row["user_id"] ?>, `<?php echo $row['nombre'] ?>`);" title="Eliminar">
                      <i class="material-icons">delete</i>
                    </button>
                  </td>
                  </tr>
                  <?php }?>
                </tbody>

              </table> 
        </div>

      </div>

    </div>

  </main>

  <footer class="footer bg-dark sticky-bottom">
    <?php require "../layout/footer.phtml"; ?>
  </footer>

  <?php require_once "../layout/foot_links.phtml"?>

  <!-- Modal Delete -->
  <form id="formModal">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalTitle">
            <span> Eliminar </span>
              <?php echo $title_page; ?>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <input type="hidden" name="idRowModal" id="idRowModal">
            <input type="hidden" name="accion" id="accion">
            <input type="hidden" name="publicar" id="publicar">
            <div id="dataTextModal">
            </div>

            <div id="modalHistorial" class="d-none">
              <div class="col-12 my-3">
                <label for="si" class="text-bold "> Conservar en historial: </label>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="historial" id="si" value="1" checked="checked">
                  <label class="form-check-label" for="si">SI</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="historial" id="no" value="0" >
                  <label class="form-check-label" for="no">NO</label>
                </div>
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

  <script src="plugins/datatables/js/jquery.dataTables.min.js"></script>
  <script src="plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
  <script src="plugins/datatables/js/data-table-ES.js"></script>

  <script>

    $(document).ready(function () {
      $("#dataTableList").DataTable({
        "language": language,
      });
    });

    // modals
    (function ($) {
      function processFormModal(event) {

        event.preventDefault();
        var inputs = $("#formModal").serializeFormJSON();
        inputs.id = $("#idRowModal").val();
        var params = JSON.stringify(inputs);

        $.ajax({
          url: "./app/api/user/IndexUser.php",
          dataType: "json",
          type: "post",
          contentType: "application/json",
          data: params,
          processData: false,
          success: function (data, textStatus, jQxhr) {

            if (!data.error && data.data) {
              $("#myModal").modal("hide");
              $("#formModal")[0].reset();
              location.reload();
            }
            else {
              $("#alertModal").html("Error en servidor: " + data.data);
            }

          },
          error: function (jqXhr, textStatus, errorThrown) {
            console.log(errorThrown);
          }
        });

        event.preventDefault();
      }

      $("#formModal").submit(processFormModal);

    })(jQuery);


    // modal DELETE
    function modalDelete(id, textRow) {
      $("#idRowModal").val(id);
      $("#accion").val("delete");
      var text = `¿Esta seguro de <strong> eliminar </strong>  <?php echo $title_page ?>: <strong> ${textRow} </strong> ?`;
      $("#dataTextModal").html(text);
      $("#btn-send").text("Eliminar");

      $("#modalHistorial").addClass("d-block");
      $("#modalTitle span").text("Eliminar");

      $("#btn-send").removeClass("btn-outline-success");

      $("#myModal").modal("show");
    }


    // modal PUBLICAR
    function modalPublicar(id, textRow, title, publicar) {
      $("#idRowModal").val(id);
      $("#accion").val("publish");
      $("#publicar").val(publicar);

      $("#modalHistorial").addClass("d-none");
      $("#modalTitle span").text("Publicar");

      var text = `¿Esta seguro de <strong> ${title} </strong> la categoría: <strong> ${textRow} </strong> ?`;
      $("#dataTextModal").html(text);
      $("#btn-send").text(title);

      $("#btn-send").removeClass("btn-outline-success");

      if( publicar.toLowerCase() === "n" )
      {
        $("#btn-send").addClass("btn-outline-success");
      }

      $("#myModal").modal("show");
    }

  </script>


</body>

</html>
