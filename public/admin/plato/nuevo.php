<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $title_page = "Plato" ;
  require_once "../../app/autoload.php";

   # Actividades
   $categoria_controller = new CategoriaController();

   $array = array(
     'estado' => 1,
   ) ;

   $categorias = $categoria_controller->getByEstado($array);

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
      "active"      => [1,0]
    );

    $sidebar = array(
      "sidebar_class"  => "",
      "sidebar_toggle" => "only",
      "sidebar_active" => [2, 1],
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
            <a href="admin/plato/plato.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page ;?>s
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
            <form action="admin/plato/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="categoria_id">CategoriaId: </label>
                    <select class="custom-select select2-box" name="categoria_id" id="categoria_id"
                      placeholder="CategoriaId">
                      <option value="" selected disabled hidden>Seleccionar </option>
                      <?php foreach ($categorias as $row) { ?>
                      <option value="<?php echo $row->categoria_id; ?>"> <?php echo $row->desc_categoria; ?></option>
                      <?php } ?>
                    </select>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descripcion">Descripción: </label>
                    <textarea class="form-control ckeditor" name="descripcion" id="descripcion"
                      placeholder="Descripción" cols="30" rows="6"></textarea>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="precio">Precio: </label>
                    <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="descuento">Descuento: </label>
                    <input type="number" class="form-control" name="descuento" id="descuento" placeholder="Descuento">
                  </div>
                </div>
                <!-- <div class="col-md-4">
                <div class="form-group">
                  <label for="precio_descuento">Precio con Descuento: </label>
                  <input type="number" class="form-control" name="precio_descuento" id="precio_descuento" placeholder="Precio con Descuento">
                </div>
              </div> -->
                <!-- <div class="col-md-6">
                  <div class="form-group">
                    <label for="fecha_ini_promo">Fecha Ini Promo: </label>
                    <input type="text" class="form-control" name="fecha_ini_promo" id="fecha_ini_promo"
                      placeholder="Fecha Ini Promo">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="fecha_fin_promo">Fecha Fin Promo: </label>
                    <input type="text" class="form-control" name="fecha_fin_promo" id="fecha_fin_promo"
                      placeholder="Fecha Fin Promo">
                  </div>
                </div> -->

                <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="num_visitas">NumVisitas: </label>
                  <input type="text" class="form-control" name="num_visitas" id="num_visitas" placeholder="NumVisitas">
                </div>
              </div> -->


                <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="create_at">CreateAt: </label>
                  <input type="text" class="form-control" name="create_at" id="create_at" placeholder="CreateAt">
                </div>
              </div> -->

              <div class="col-md-6">
                <div class="form-group">
                  <label for="fechas_promo">Fecha Promo: </label>
                  <input type="text" data-filter-type="date-range" class="form-control" name="fechas_promo" id="fechas_promo" placeholder="Fecha Inicio Promo">
                </div>
              </div>

                <div class="col-12 mb-3">
                  <div class="form-group">
                    <label for="imagen">Imagen:</label>
                     <input data-file-img="images" data-id="preview-images" type="file" class="form-control" name="imagen"  required placeholder="Imagen" accept="image/*">
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview-images" ></div>
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
                <a href="admin/plato/plato.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i>
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


  <?php require_once "../layout/foot_links.phtml"; ?>

  <?php require_once "../layout/ckeditor.phtml"; ?>
  <?php require_once "../layout/select2.phtml"; ?>
  <?php require_once "../layout/daterangepicker.phtml"; ?>

</body>

</html>