<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $paquete_id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($paquete_id <= 0) {
      header("Location: ./paquete.php ", true, 301);
  }

  $title_page = "Paquete" ;

  require_once "../../app/autoload.php";

  #Distritos
    $ubigeo_controller = new UbigeoController();

    $array = array(
      'pais_id' => 1,
    ) ;

    $distritos = $ubigeo_controller->getDistritosByPaisId($array);

  # Actividades
    $actividad_controller = new ActividadController();

    $array = array(
      'estado' => 1,
    ) ;

    $actividades = $actividad_controller->getByEstado($array);


  # Servicios
    $servicio_controller = new ServicioController();

    $array = array(
      'estado' => 1,
    ) ;

    $servicios = $servicio_controller->getByEstado($array);

  # Adicionales
    $adicional_controller = new AdicionalController();

    $array = array(
      'estado' => 1,
    ) ;

    $adicionales = $adicional_controller->getByEstado($array);

  # paquete by IDs
    $paquete_controller = new PaqueteController();

    $paquete = $paquete_controller->find($paquete_id);

    $publicar = trim($paquete->publicar);

    $si = "";
    $no = "";

    if ($publicar == "S") {
        $si = "checked='checked'";
    } elseif ($publicar == "N") {
        $no = "checked='checked'";
    }

    $title_page = "Paquete";

  # actividades paquete seleccionado
    $paquete_actividad_controller = new PaqueteActividadController();
    $array = array(
      'paquete_id' => $paquete_id,
    ) ;

    $actividades_paquete = $paquete_actividad_controller->getByPaqueteId($array);

    $paquete_actividad_ids = array_column($actividades_paquete, 'actividad_id');

  # servicios paquete seleccionado
    $paquete_servicio_controller = new PaqueteServicioController();
    $array = array(
      'paquete_id' => $paquete_id,
    ) ;

    $paquete_servicios = $paquete_servicio_controller->getByPaqueteId($array);

    $paquete_servicio_ids = array_column($paquete_servicios, 'servicio_id');

  # adicionales paquete seleccionado
  $paquete_adicionales_controller = new PaqueteAdicionalController();
  $array = array(
    'paquete_id' => $paquete_id,
  ) ;

  $paquete_adicioales = $paquete_adicionales_controller->getByPaqueteId($array);

  $paquete_adicional_ids = array_column($paquete_adicioales, 'adicional_id');

  // var_dump($paquete_adicioales);
  // var_dump($paquete_adicional_ids);

  # Imgs paquete seleccionado
  $paquete_adicionales_controller = new PaqueteImgController();
  $array = array(
    'paquete_id' => $paquete_id,
  ) ;

  $paquete_imgs = $paquete_adicionales_controller->getByPaqueId($array);

  $fecha_ini_promo = HelperDate::formatDate_DB_to_dd_mm_yyyyy($paquete->fecha_ini_promo);
  $fecha_fin_promo = HelperDate::formatDate_DB_to_dd_mm_yyyyy($paquete->fecha_fin_promo);

?>

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
      "sidebar_class"  => "",
      "sidebar_toggle" => "only",
      "sidebar_active" => [3, 1],
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
            <form action="admin/paquete/save.php" method="POST" enctype="multipart/form-data">
              <!-- <input type="hidden" class="form-control" name="accion" id="accion" value="new">               -->
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $paquete_id ?>">
              <div class="row">

              <div class="col-md-12">
                <div class="form-group">
                  <label for="ubigeo_id">Distrito: </label>
                  <select class="custom-select select2-box" name="ubigeo_id" id="ubigeo_id" placeholder="UbigeoId" required>
                    <option value="" selected disabled hidden>Seleccionar</option>
                    <!-- <option value="text">text</option> -->
                    <?php foreach ($distritos as $row) { ?>
                    <option value="<?php echo $row->ubigeo_id; ?>" <?php if( $paquete->ubigeo_id == $row->ubigeo_id ) echo "selected" ?> > <?php echo $row->descripcion; ?> </option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="nombre">Nombre Paquete y/o Tours: </label>
                  <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required value="<?php echo $paquete->nombre; ?>" >
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="descripcion">Descripción: </label>
                  <textarea class="form-control ckeditor" name="descripcion" id="descripcion" placeholder="Descripción" cols="30" rows="6"><?php echo $paquete->descripcion; ?></textarea>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="recomendacion">Recomendación: </label>
                  <textarea class="form-control ckeditor" name="recomendacion" id="recomendacion" placeholder="Recomendación" cols="30" rows="6"><?php echo $paquete->recomendacion; ?></textarea>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="num_dias">Num. Días: </label>
                  <input type="number" class="form-control" name="num_dias" id="num_dias" required="" placeholder="Número Días" pattern="\d*" min="1" max="60" value="<?php echo $paquete->num_dias; ?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="num_noches">Num. Noches: </label>
                  <input type="number" class="form-control" name="num_noches" id="num_noches" placeholder="Num. Noches" pattern="\d*" min="1" max="60" value="<?php echo $paquete->num_noches; ?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="precio">Precio: </label>
                  <input type="number" class="form-control" name="precio" id="precio" placeholder="Precio" required="" pattern="\d*" min="0" max="99999" value="<?php echo $paquete->precio; ?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="descuento">Descuento(entre 0 y 100)%:: </label>
                  <input type="number" class="form-control" name="descuento" id="descuento" placeholder="Descuento" pattern="\d*" min="0" max="100" value="0" required="" value="<?php echo $paquete->descuento; ?>">
                </div>
              </div>

             <!--  <div class="col-md-12">
                <div class="form-group">
                  <label for="precio_descuento">PrecioDescuento: </label>
                  <input type="text" class="form-control" name="precio_descuento" id="precio_descuento" placeholder="PrecioDescuento">
                </div>
              </div> -->

              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha_ini_promo">Fecha Inicio Promo: </label>
                  <input type="text" class="form-control datepicker" name="fecha_ini_promo" id="fecha_ini_promo" placeholder="Fecha Inicio Promo" value="<?php echo $paquete->fecha_ini_promo; ?>">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha_fin_promo">Fecha Fin Promo: </label>
                  <input type="text" class="form-control datepicker" name="fecha_fin_promo" id="fecha_fin_promo" placeholder="Fecha Fin Promo" value="<?php echo $paquete->fecha_fin_promo; ?>">
                </div>
              </div> -->

              <div class="col-md-6">
                <div class="form-group">
                  <label for="fechas_promo">Fechas  Promo: </label>
                  <input type="text" data-filter-type="date-range" class="form-control" name="fechas_promo" id="fechas_promo" placeholder="Fecha Fin Promo" value="<?php echo $fecha_ini_promo." - ".$fecha_fin_promo; ?>">
                </div>
              </div>



              <!-- <div class="col-md-12">
                <div class="form-group">
                  <label for="num_visitas">NumVisitas: </label>
                  <input type="text" class="form-control" name="num_visitas" id="num_visitas" placeholder="NumVisitas">
                </div>
              </div> -->

              <div class="col-md-12">
                <div class="form-group">
                  <label for="actividad_ids">Actividades: </label>
                  <select class="custom-select select2-box" name="actividad_ids[]" id="actividad_ids" multiple="multiple" placeholder="Actividades" required>
                    <!-- <option value="" selected disabled hidden>Seleccionar </option> -->
                    <!-- <option value="text">text</option> -->
                    in_array("Irix", $os)
                    <?php foreach ($actividades as $row) { ?>
                    <option value="<?php echo $row->actividad_id; ?>" <?php if( in_array($row->actividad_id, $paquete_actividad_ids) ) echo "selected" ?>> <?php echo $row->nombre; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-6 mb-3">
                  <label class="fw-500" for="">Incluye </label>
                  <?php
                  foreach ($servicios as $servicio)
                  {
                    // if ($servicio->incluye === 1)
                    // {
                  ?>
                  <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="servicio_ids_incluye[]"
                          id="servicio_ids_incluye<?php echo $servicio->id ?>" value="<?php echo $servicio->id ?>" <?php if( in_array($servicio->id, $paquete_servicio_ids) ) echo "checked" ?>>
                      <label class="custom-control-label" for="servicio_ids_incluye<?php echo $servicio->id ?>">
                          <?php echo $servicio->descripcion ?>
                      </label>
                  </div>
                  <?php
                    // }
                  }
                  ?>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="actividad_ids">Adicionales: </label>
                  <select class="custom-select select2-box" name="adicionales_ids[]" id="adicionales_ids" multiple="multiple" placeholder="Adicionales" required>
                    <!-- <option value="" selected disabled hidden>Seleccionar </option> -->
                    <!-- <option value="text">text</option>  -->
                    <?php foreach ($adicionales as $row) { ?>
                    <option value="<?php echo $row->adicional_id; ?>" <?php if( in_array($row->adicional_id, $paquete_adicional_ids) ) echo "selected" ?>> <?php echo $row->descripcion; ?></option>
                    <?php } ?>
                  </select>
                </div>
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

                <!-- <div class="col-12 mb-3">
                  <div class="form-group">
                    <label for="imagen">Imagen(es) :</label>
                    <input data-file-img="images" type="file" class="form-control" name="imagenes[]" id="imagenes" required
                      placeholder="Imagen" accept="image/*" multiple>
                  </div>
                </div> -->

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview" id="preview"></div>
                </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/paquete/paquete.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="far fa-save"></i> Guardar</button>
              </div>

            </form>
          </div>

          <!-- imagenes detalle -->
          <div class="col-12 mt-3 mt-md-5 text-right">
            <a href="admin/paquete/edit-images.php?id=<?php echo $paquete_id ; ?>">Editar Imagenes </a>
            <hr>
          </div>

          <div class="col-12 mb-3">
            <div class="row my-2">
              <?php
              // var_dump($paquete_imgs);
                foreach ($paquete_imgs as $images) {
              ?>
              <div class="col-6 col-sm-2 mb-3 px-2">
                <a href="<?php echo $images->imagen ?>" data-fancybox="gallery"
                  data-caption="<?php echo $images->descripcion ?>">
                  <img src="<?php echo $images->imagen ?>" class="img-fluid " alt="<?php echo $images->descripcion ?>" />
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
  <?php require_once "../layout/ckeditor.phtml"; ?>
  <?php require_once "../layout/select2.phtml"; ?>
  <?php require_once "../layout/fancybox.phtml"; ?>
  <?php require_once "../layout/daterangepicker.phtml"; ?>

</body>

</html>