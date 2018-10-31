<?php

    require_once "../sesion_admin.php";

    loginRedirect("../login.php");

    require_once "../../app/autoload.php";

    $users_groups_controller = new UsersGroupsController();

    $data = $users_groups_controller->getAll();

    $title_page = "users_groupss"

?>

<?php $title_page = "users_groups" ; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
    $setvar = array("titulo" => $title_page . " | Admin ", "follow" => "", "active" => [1, 1]);
    require_once "../layout/head_links.phtml";
  ?>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
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
          <a href="admin/users-groups/users_groups.php">
            <?php echo $title_page ?></a>
        </li>
      </ol>
    </nav>

    <div class="container py-2">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Lista de <?php echo $title_page ?>
          </h4>
        </div>
        <div class="col-12 mb-3">
          <a href="admin/users-groups/users_groups.php" class="btn btn-primary btn-sm btn-bar" role="button">
            <i class="material-icons ">format_list_bulleted</i> Listar
          </a>
          <a href="admin/users-groups/nuevo.php" class="btn btn-primary btn-sm btn-bar" role="button">
            <i class="material-icons ">insert_drive_file</i> Nuevo
          </a>
        </div>

        <div class="col-12">
        
<table id="dataTableList" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
         <th>Id </th>
         <th>User_id </th>
         <th>Group_id </th>
         <th width="70"></th>
        <th width="70"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as &$row) {?>
      <tr>
        <td> <?php echo $row["id"] ?> </td>
        <td> <?php echo $row["user_id"] ?> </td>
        <td> <?php echo $row["group_id"] ?> </td>

        <td class="text-center">
          <a class="btn btn-primary btn-sm lh-1 " href="admin/users_groups/editar.php?id=<?php echo $row["id"] ?>"
            title="Editar">
            <i class="material-icons">edit</i>
          </a>
        </td>
        <td class="text-center">
          <button class="btn btn-danger btn-sm lh-1" onclick="modalDelete(<?php echo $row["id"] ?>, `aqui va el texto`);"
            title="Eliminar">
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
            <h5 class="modal-title" id="exampleModalLongTitle text-uppercase">Eliminar
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


  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/js/data-table-ES.js"></script>

  <script>

    $(document).ready(function () {
      $("#dataTableList").DataTable({

        "language": language,
      });
    });

    // modals
    (function ($) {
      function processFormModal(event) {
        var params = JSON.stringify({
          "idproducto": $("#idRowModal").val(),
          "accion": $("#accion").val(),
          "publicar": $("#publicar").val(),
        });

        $.ajax({
          url: "./app/api/users_groups/IndexUsersGroups.php",
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
      var text = `¿Esta seguro de eliminar  <?php echo $title_page ?>: <strong> ${textRow} </strong> ?`;
      $("#dataTextModal").html(text);
      $("#btn-send").text("Eliminar");

      $("#myModal").modal("show");
    }


    // modal PUBLICAR
    function modalPublicar(id, textRow, title, publicar) {
      $("#idRowModal").val(id);
      $("#accion").val("publicar");
      $("#publicar").val(publicar);

      var text = `¿Esta seguro de ${title} la categoría: <strong> ${textRow} </strong> ?`;
      $("#dataTextModal").html(text);
      $("#btn-send").text(title);

      $("#myModal").modal("show");
    }

  </script>


</body>

</html>
