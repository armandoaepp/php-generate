<?php
<<<<<<< HEAD:public/admin/noticias/noticias.php

    require_once "../sesion_admin.php";
=======
require_once "../sesion_admin.php";
loginRedirect('../login.php');
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php

    loginRedirect("../login.php");

<<<<<<< HEAD:public/admin/noticias/noticias.php
    require_once "../../app/autoload.php";

    $noticias_controller = new NoticiasController();

    $data = $noticias_controller->getAll();

    $title_page = "noticiass"
=======
$user_controller = new UserController();

$users = $user_controller->list();
// var_dump($users);
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php

?>

<?php $title_page = "noticias" ; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
<<<<<<< HEAD:public/admin/noticias/noticias.php
    $setvar = array("titulo" => $title_page . " | Admin ", "follow" => "", "active" => [1, 1]);
    require_once "../layout/head_links.phtml";
=======
  $setvar = array('titulo' => ' Usuarios | Admin ', 'follow' => '', 'active' => [1, 1]);
  require_once "../layout/head_links.phtml";
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php
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
<<<<<<< HEAD:public/admin/noticias/noticias.php
          <a href="admin/noticias/noticias.php">
            <?php echo $title_page ?></a>
=======
          <a href="admin/usuarios/usuarios.php">Usuarios</a>
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php
        </li>
      </ol>
    </nav>

    <div class="container py-2">
      <div class="row">
        <div class="col-12">
<<<<<<< HEAD:public/admin/noticias/noticias.php
          <h4 class="page-header-title">Lista de <?php echo $title_page ?>
          </h4>
=======
          <h4 class="page-header-title">Lista de Usuarios </h4>
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php
        </div>
        <div class="col-12 mb-3">
          <a href="admin/usuarios/usuarios.php" class="btn btn-primary btn-sm btn-bar" role="button">
            <i class="material-icons ">format_list_bulleted</i> Listar
          </a>
<<<<<<< HEAD:public/admin/noticias/noticias.php
          <a href="admin/noticias/nuevo.php" class="btn btn-primary btn-sm btn-bar" role="button">
=======
          <a href="admin/usuarios/nuevo-usuario.php" class="btn btn-primary btn-sm btn-bar" role="button">
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php
            <i class="material-icons ">insert_drive_file</i> Nuevo
          </a>
        </div>

        <div class="col-12">
<<<<<<< HEAD:public/admin/noticias/noticias.php
        
<table id="dataTableList" class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
         <th>Id </th>
         <th>Titulo </th>
         <th>Descripcion </th>
         <th>Imagen </th>
         <th>Banner </th>
         <th>Nombreseo </th>
         <th>Orden </th>
         <th>Fecha </th>
         <th>Activo </th>
         <th width="70"></th>
        <th width="70"></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as &$row) {?>
      <tr>
        <td> <?php echo $row["id"] ?> </td>
        <td> <?php echo $row["titulo"] ?> </td>
        <td> <?php echo $row["descripcion"] ?> </td>
        <td> <?php echo $row["imagen"] ?> </td>
        <td> <?php echo $row["banner"] ?> </td>
        <td> <?php echo $row["nombreseo"] ?> </td>
        <td> <?php echo $row["orden"] ?> </td>
        <td> <?php echo $row["fecha"] ?> </td>
        <td> <?php echo $row["activo"] ?> </td>

        <td class="text-center">
          <a class="btn btn-primary btn-sm lh-1 " href="admin/noticias/editar.php?id=<?php echo $row["id"] ?>"
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
=======
          <table id="dataTable" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th width="40">Id</th>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Usuario</th>
                <th width="80">Editar</th>
                <th width="80">Eliminar</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as &$user) {?>
              <tr>
                <td>
                  <?php echo $user['user_id'] ?>
                </td>
                <td>
                  <?php echo $user['nombre'] ?>
                </td>
                <td>
                  <?php echo $user['apellidos'] ?>
                </td>
                <td>
                  <?php echo $user['email'] ?>
                </td>
                <td class="text-center">
                  <a class="btn btn-primary btn-sm lh-1 " href="admin/usuarios/reset-password.php?id=<?php echo $user['user_id'] ?>"
                    title="Cambiar Contraseña">
                    <i class="material-icons">reset</i>
                  </a>
                </td>
                <td class="text-center">
                  <a class="btn btn-primary btn-sm lh-1 " href="admin/usuarios/editar-usuario.php?id=<?php echo $user['user_id'] ?>"
                    title="Editar">
                    <i class="material-icons">edit</i>
                  </a>
                </td>
                <td class="text-center">
                  <button class="btn btn-danger btn-sm lh-1" onclick="modalDelete(<?php echo $user['user_id'] ?>, `<?php echo $user['nombre'].' '.$user['apellidos'] ?>`);" title="Eliminar">
                    <i class="material-icons">delete</i>
                  </button>
                </td>
              </tr>
              <?php }?>
            </tbody>

          </table>
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php
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
<<<<<<< HEAD:public/admin/noticias/noticias.php
            <h5 class="modal-title" id="exampleModalLongTitle text-uppercase">Eliminar
              <?php echo $title_page; ?>
            </h5>
=======
            <h5 class="modal-title" id="exampleModalLongTitle">Eliminar user </h5>
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php
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


<<<<<<< HEAD:public/admin/noticias/noticias.php
=======


>>>>>>> master:composer-demo/admin/usuarios/usuarios.php
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script src="admin/js/data-table-ES.js"></script>

  <script>

    $(document).ready(function () {
      $("#dataTableList").DataTable({

        "language": language,
      });
<<<<<<< HEAD:public/admin/noticias/noticias.php
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
          url: "./app/api/noticias/IndexNoticias.php",
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
=======

    });



(function($) {
  function processFormModal(event) {
    var params = JSON.stringify({
      "user_id": $('#idRowModal').val(),
      "accion"     : $('#accion').val(),
      "publicar"   : $('#publicar').val(),
    });

    $.ajax({
      url: './api/ajax/user/IndexUser.php',
      dataType: 'json',
      type: 'post',
      contentType: 'application/json',
      data: params,
      processData: false,
      success: function(data, textStatus, jQxhr) {
        // console.log(data);

        if(!data.error && data.data){
          $('#myModal').modal('hide');
          $("#formModal")[0].reset();
          location.reload();
        }
        else {
            $('#alertModal').html('Error en servidor: ' + data.data);
        }

      },
      error: function(jqXhr, textStatus, errorThrown) {
        console.log(errorThrown);
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php
      }

      $("#formModal").submit(processFormModal);

    })(jQuery);


<<<<<<< HEAD:public/admin/noticias/noticias.php
    // modal DELETE
    function modalDelete(id, textRow) {
      $("#idRowModal").val(id);
      $("#accion").val("delete");
      var text = `¿Esta seguro de eliminar  <?php echo $title_page ?>: <strong> ${textRow} </strong> ?`;
      $("#dataTextModal").html(text);
      $("#btn-send").text("Eliminar");
=======
 // modal DELETE
 function modalDelete(id,textRow) {
      $('#idRowModal').val(id);
      $('#accion').val('delete');
      var  text = `¿Esta seguro de eliminar la categoría: <strong> ${textRow} </strong> ?` ;
      $('#dataTextModal').html(text);
      $('#btn-send').text("Eliminar");
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php

      $("#myModal").modal("show");
    }


    // modal PUBLICAR
    function modalPublicar(id, textRow, title, publicar) {
      $("#idRowModal").val(id);
      $("#accion").val("publicar");
      $("#publicar").val(publicar);

<<<<<<< HEAD:public/admin/noticias/noticias.php
      var text = `¿Esta seguro de ${title} la categoría: <strong> ${textRow} </strong> ?`;
      $("#dataTextModal").html(text);
      $("#btn-send").text(title);
=======
      var  text = `¿Esta seguro de ${title} la categoría: <strong> ${textRow} </strong> ?` ;
      $('#dataTextModal').html(text);
      $('#btn-send').text(title);
>>>>>>> master:composer-demo/admin/usuarios/usuarios.php

      $("#myModal").modal("show");
    }

  </script>


</body>

</html>
