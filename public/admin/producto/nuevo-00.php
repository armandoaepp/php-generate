
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  require_once "../../app/autoload.php";

  // Categorias
  // =========================================================
  $categoria_controller = new CategoriaController();

  $params = array(
    'estado' => 1
  );

  $categorias = $categoria_controller->getByEstado($params);
  // =========================================================

  // SubCategorias
  // =========================================================
  $sub_categoria_controller = new SubCategoriaController();

  $params = array(
    'estado' => 1
  );

  $sub_categorias = $sub_categoria_controller->getByEstado($params);
  // =========================================================

  $title_page = "Producto" ;

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
      "active"      => [1, 0]
    );

    $sidebar = array(
      "sidebar_class"  => "",
      "sidebar_toggle" => "only",
      "sidebar_active" => [1, 1],
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
            <a href="admin/producto/producto.php">
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
            <form action="admin/producto/save.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="new">
              <div class="row">



              <div class="col-md-6">
                <div class="form-group">
                <label for="categoria_id">Categoria: </label>
                  <select class="custom-select select2-box" name="categoria_id" id="categoria_id" placeholder="Categoria" requerid>
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <?php foreach ($categorias as $row) { ?>
                    <option value="<?php echo $row->categoria_id; ?>"> <?php echo $row->cat_nombre; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="sub_categoria_id">Sub Categoria: </label>
                  <select class="custom-select select2-box" name="sub_categoria_id" id="sub_categoria_id" placeholder="Sub Categoria">
                    <option value="" selected disabled hidden>Seleccionar </option>
                    <?php foreach ($sub_categorias as $row) { ?>
                    <option value="<?php echo $row->sub_categoria_id; ?>"> <?php echo $row->sc_nombre; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="codigo">Codigo: </label>
                  <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Codigo">
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
                  <label for="descripcion_corta">DescripcionCorta: </label>
                  <input type="text" class="form-control" name="descripcion_corta" id="descripcion_corta" placeholder="DescripcionCorta">
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
                  <label for="descuento">Descuento: </label>
                  <input type="number" class="form-control" name="descuento" id="descuento" placeholder="Descuento">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="precio_descuento">PrecioDescuento: </label>
                  <input type="number" class="form-control" name="precio_descuento" id="precio_descuento" placeholder="PrecioDescuento">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="num_visitas">NumVisitas: </label>
                  <input type="number" class="form-control" name="num_visitas" id="num_visitas" placeholder="NumVisitas">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="updated_at">UpdatedAt: </label>
                  <input type="text" class="form-control" name="updated_at" id="updated_at" placeholder="UpdatedAt">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label for="productocol">Productocol: </label>
                  <input type="text" class="form-control" name="productocol" id="productocol" placeholder="Productocol">
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

              </div>

              <div class="w-100 text-center">
                <a href="admin/producto/producto.php" class="btn btn-outline-danger"> <i class="fas fa-times"></i> Cancelar</a>
                <button type="submit" class="btn btn-outline-primary rounded-0  "> <i class="far fa-save"></i> Guardar</button>
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
