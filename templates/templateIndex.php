<?php

function templateIndex($table, $atributos, $arraycabeza = array() ){

  $cmTable = toCamelCase($table) ;
  $url = toUrlFriendly($table) ;

$html = '
<?php $title_page = "'.$cmTable.'s" ; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php

    $setvar = array(
      "titulo"     => "$title_page",
      "follow"      => "",
      "description" => "Administrador",
      "keywords"    => "administrador",
      "active"      => [1,0]
    );

    $sidebar = array(
      "sidebar_class"     => "",
      "sidebar_toggle"      => "only",
      "sidebar_active"      => [2,1],
    );

    require_once "../layout/head_links.phtml";
  ?>

  <link rel="stylesheet" href="plugins/datatables/css/dataTables.bootstrap4.min.css">
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

          <li class="breadcrumb-item active bg-info text-white" aria-current="page">
            <a class="link-white" href="admin/'.$url.'/'.$table.'.php">
              <?php echo $title_page ?>
            </a>
          </li>
        </ol>
      </nav>

      <div class="container-full py-2 fs-x-14">
        <div class="row">
          <div class="col-12">
            <h5 class="page-header-title">Lista de <?php echo $title_page ?> </h5>
          </div>
          <div class="col-12 mb-3">
            <a href="admin/'.$url.'/'.$table.'.php" class="btn btn-outline-primary btn-sm btn-bar" role="button">
              <i class="fas fa-list-ul"></i>
              Listar
            </a>
            <a href="admin/'.$url.'/nuevo.php" class="btn btn-outline-primary btn-sm btn-bar" role="button">
              <i class="fas fa-file"></i>
              Nuevo
            </a>
          </div>

          <div class="col-12">
            <div class="table-responsive">
            '. tableHtml($table, $atributos, $arraycabeza) .'
            </div>
          </div>

        </div>

      </div>

    </main>

  </div>



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
            <input type="hidden" name="estado" id="estado">
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
            <button type="submit" class="btn btn-outline-danger" id="btn-send">Eliminar </button>
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
        url: "./app/api/taller/IndexTaller.php",
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
  function modalDelete(id, textRow, title, estado) {
    $("#idRowModal").val(id);
    $("#accion").val("delete");

    $("#modalHistorial").addClass("d-none");
    $("#modalTitle span").text("Eliminar");

    var text = `¿Esta seguro de <strong> ${title} </strong> la categoría: <strong> ${textRow} </strong> ?`;
    $("#dataTextModal").html(text);
    $("#btn-send").text(title);

    $("#estado").val(estado);
    $("#btn-send").addClass("btn-outline-danger");

    if (estado === "0") {
      $("#modalHistorial").addClass("d-none");
      $("#modalHistorial").removeClass("d-block");
    }
    else if (estado === "1") {
      $("#modalHistorial").addClass("d-block");
    }
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
    $("#btn-send").removeClass("btn-outline-danger");

    if (publicar.toLowerCase() === "n") {
      $("#btn-send").addClass("btn-outline-success");
    }
    else{
      $("#btn-send").addClass("btn-outline-danger");
    }

    $("#myModal").modal("show");
  }

</script>

</body>

</html>
';

  return $html ;
}


function tableHtml($table, $atributos, $arraycabeza){

$table_html = '' ;
$table_html .= '
            <table id="dataTableList" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>' . PHP_EOL ;

      for ($i = 0; $i < count($arraycabeza); $i++)
      {
          if ( !itemsNotListTable( $atributos[$i] ) )
          {
            if($i == 0){
              $table_html .= '                  <th width="50">' . ucwords($arraycabeza[$i]) . ' </th>' . PHP_EOL;
            }
            else
            {
              $table_html .= '                  <th>' . ucwords($arraycabeza[$i]) . ' </th>' . PHP_EOL;
            }

          }
      }

      if ( in_array('publicar', $atributos ) )
      {
        $table_html .= '                  <th width="50" class="fs-x-13"> Publicar </th>' . PHP_EOL;
      }

      $table_html .= '                  <th width="70"></th>' . PHP_EOL;
      $table_html .= '                </tr>' . PHP_EOL;
      $table_html .= '              </thead>' . PHP_EOL;

$table_html .= '
              <tbody>
                <?php foreach ($data as &$row) {?>

                  <?php
                    $classBtn = "" ;
                    $title    = "" ;
                    $icon_pub = "" ;

                    if(!empty($row["publicar"])){
                      if($row["publicar"] == "S"){
                        $classBtn =  "btn-outline-danger";
                        $title = "Desactivar/Ocultar" ;
                        $icon_pub = \'<i class="fas fa-times"></i>\';
                      }
                      else {
                        $classBtn =  "btn-outline-success";
                        $title = "Publicar" ;
                        $icon_pub = \'<i class="fas fa-check"></i>\';
                      }
                    }

                    /* estado */
                    $title_estado = "" ;
                    if(!empty($row["estado"])){
                      if($row["estado"] == 1){
                        $title_estado = "Eliminar" ;
                      }
                      else {
                        $title_estado = "Recuperar" ;
                      }
                    }
                  ?>

                <tr class="<?php if($row["estado"] == 0 ) echo "tr-estado" ;?>" >
                ' . PHP_EOL ;


        for ($i = 0; $i < count($atributos); $i++)
        {
          if ( !itemsNotListTable( $atributos[$i] ) )
          {
              $table_html .= '                  <td> <?php echo $row["' . $atributos[$i] . '"] ?> </td>' . PHP_EOL;
          }
        }

        if ( in_array('publicar', $atributos ) )
        {


            $table_html .= '
                  <td class="text-center">
                    <span class="sr-only"><?php echo $row["publicar"] ?></span>
                    <button onclick="modalPublicar(<?php echo $row[\''. $atributos[0] .'\'] ?>, `<?php echo $row[\''. $atributos[1] .'\'] ?>` ,`<?php echo $title ?>`, `<?php echo $row[\'publicar\'] ?>`);" class="btn btn-sm lh-1 btn-table <?php echo $classBtn; ?> " title="<?php echo $title; ?>" >
                    <?php echo $icon_pub ;?>
                    </button>
                  </td>
            ' . PHP_EOL;
        }

$table_html .= '
                  <td class="text-center">
                    <a class="btn btn-outline-primary btn-sm lh-1 btn-table" href="admin/'. $table .'/editar.php?id=<?php echo $row["'. $atributos[0] .'"] ?>" title="Editar">
                    <i class="fas fa-pencil-alt"></i>
                    </a>
                    <button class="btn btn-outline-danger btn-sm lh-1 btn-table" onclick="modalDelete(<?php echo $row["'. $atributos[0] .'"] ?>, `<?php echo $row[\''. $atributos[1] .'\'] ?>`,`<?php echo $title_estado ?>`,`<?php echo $row[\'estado\'] ?>`);" title="<?php echo $title_estado ;?>">
                    <i class="far fa-trash-alt"></i>
                    </button>
                    <span class="sr-only"><?php echo $row["estado"] ?></span>
                  </td>
                </tr>
                <?php }?>
              </tbody>

            </table> ' ;

  return $table_html  ;

}