
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./paquete.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $paquete_controller = new PaqueteController();

  $paquete = $paquete_controller->find($id);

  $publicar = trim($paquete->publicar);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked='checked'";
  } elseif ($publicar == "N") {
      $no = "checked='checked'";
  }

  $title_page = "Paquete";

?>

<!DOCTYPE html>
<html lang="es">

<head>

  <?php

    $setvar = array(
        "titulo" => "Editar $title_page",
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
            <a href="admin/paquete/paquete.php">
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
            <form action="admin/paquete/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">
              
              <div class="col-md-12">
                <div class="form-group">
                  <label for="ubigeo_id">UbigeoId: </label>
                  <select class="custom-select" name="ubigeo_id" id="ubigeo_id" placeholder="UbigeoId">
                    <option value="" selected disabled hidden>Seleccionar </option> 
                    <option value="text">text</option>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="<?php echo $paquete->nombre; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripcion: </label>
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" placeholder="Descripcion" cols="30" rows="6"><?php echo htmlspecialchars_decode($paquete->descripcion); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="recomendacion">Recomendacion: </label>
                  <textarea class="form-control ckeditor" name="recomendacion" id="recomendacion" placeholder="Recomendacion" cols="30" rows="6"><?php echo htmlspecialchars_decode($paquete->recomendacion); ?></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="num_dias">NumDias: </label>
                  <input type="text" class="form-control" name="num_dias" id="num_dias" placeholder="NumDias" value="<?php echo $paquete->num_dias; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="num_noches">NumNoches: </label>
                  <input type="text" class="form-control" name="num_noches" id="num_noches" placeholder="NumNoches" value="<?php echo $paquete->num_noches; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="precio">Precio: </label>
                  <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="<?php echo $paquete->precio; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="descuento">Descuento: </label>
                  <input type="text" class="form-control" name="descuento" id="descuento" placeholder="Descuento" value="<?php echo $paquete->descuento; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="precio_descuento">PrecioDescuento: </label>
                  <input type="text" class="form-control" name="precio_descuento" id="precio_descuento" placeholder="PrecioDescuento" value="<?php echo $paquete->precio_descuento; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="fecha_ini_promo">FechaIniPromo: </label>
                  <input type="text" class="form-control" name="fecha_ini_promo" id="fecha_ini_promo" placeholder="FechaIniPromo" value="<?php echo $paquete->fecha_ini_promo; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="fecha_fin_promo">FechaFinPromo: </label>
                  <input type="text" class="form-control" name="fecha_fin_promo" id="fecha_fin_promo" placeholder="FechaFinPromo" value="<?php echo $paquete->fecha_fin_promo; ?>">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="num_visitas">NumVisitas: </label>
                  <input type="text" class="form-control" name="num_visitas" id="num_visitas" placeholder="NumVisitas" value="<?php echo $paquete->num_visitas; ?>">
                </div>
              </div>

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

              </div>

              <div class="w-100 text-center">
                <a href="admin/paquete/paquete.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="fas fa-sync-alt"></i> Actualizar</button>
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