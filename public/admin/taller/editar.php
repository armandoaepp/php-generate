<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./taller.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $taller_controller = new TallerController();

  $taller = $taller_controller->find($id);

  $publicar = trim($taller["publicar"]);

  $si = "";
  $no = "";

  if ($publicar == "S") {
      $si = "checked='checked'";
  } elseif ($publicar == "N") {
      $no = "checked='checked'";
  }

  $title_page = "Taller";

  # load chefs
  $estado = 1 ;
  $params = array(
              'estado' => $estado,
            );

  $chef_controller = new ChefController();

  $chefs = $chef_controller->getByEstado($params);

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
        "sidebar_active" => [4, 1],
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
            <a href="admin/taller/taller.php">
              <i class="fas fa-list"></i>
              <?php echo $title_page ;?>s
            </a>
          </li>
          <li class="breadcrumb-item active bg-info text-white" aria-current="page">
            Editar
            <?php echo $title_page; ?>
          </li>
        </ol>
      </nav>

      <div class="container py-2 py-md-3">
        <div class="row">
          <div class="col-12">
            <h5 class="page-header-title">Editar
              <?php echo $title_page; ?>
            </h5>
            <hr class="hr dashed">
          </div>
        </div>
        <div class="row">

          <div class="col-12">
            <form action="admin/taller/update.php" method="POST" enctype="multipart/form-data">
              <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
              <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
              <div class="row">

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="titulo">Titulo: </label>
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="<?php echo $taller['titulo'] ?>">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="chef_id">Chef: </label>
                    <select class="custom-select" name="chef_id" id="chef_id" placeholder="ChefId">
                      <option value="" selected disabled hidden>Seleccionar Chef</option>
                      <?php foreach ($chefs as &$row) {?>
                      <option value="<?php echo $row["id"]; ?>" <?php if($row["id"] == $taller["chef_id"] ) echo 'selected="selected"' ?> >
                        <?php echo $row["nombre"]. " ".$row["apellidos"] ; ?>
                      </option>
                      <?php } ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descripcion">Descripcion: </label>
                    <textarea class="form-control ckeditor" name="descripcion" id="descripcion" cols="30" rows="10"><?php echo $taller['descripcion'] ?></textarea>
                  </div>
                </div>
                <!-- <div class="col-md-12">
                  <div class="form-group">
                    <label for="certificacion">Certificacion: </label>
                    <input type="text" class="form-control" name="certificacion" id="certificacion" placeholder="Certificacion"
                      value="<?php echo $taller['certificacion'] ?>">
                  </div>
                </div> -->
                <!-- <div class="col-md-12">
                  <div class="form-group">
                    <label for="titulos">Titulos: </label>
                    <input type="text" class="form-control" name="titulos" id="titulos" placeholder="Titulos" value="<?php echo $taller['titulos'] ?>">
                  </div>
                </div> -->
                <!-- <div class="col-md-12">
                  <div class="form-group">
                    <label for="titulacion">Titulacion: </label>
                    <input type="text" class="form-control" name="titulacion" id="titulacion" placeholder="Titulacion"
                      value="<?php echo $taller['titulacion'] ?>">
                  </div>
                </div> -->
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="duracion">Duracion: </label>
                    <input type="text" class="form-control" name="duracion" id="duracion" placeholder="Duracion" value="<?php echo $taller['duracion'] ?>">
                  </div>
                </div>
                <!-- <div class="col-md-12">
                  <div class="form-group">
                    <label for="dia">Dia: </label>
                    <input type="text" class="form-control" name="dia" id="dia" placeholder="Dia" value="<?php echo $taller['dia'] ?>">
                  </div>
                </div> -->
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="horario">Horario: </label>
                    <input type="text" class="form-control" name="horario" id="horario" placeholder="Horario" value="<?php echo $taller['horario'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="lugar">Lugar: </label>
                    <input type="text" class="form-control" name="lugar" id="lugar" placeholder="Lugar" value="<?php echo $taller['lugar'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="precio">Precio: </label>
                    <input type="text" class="form-control" name="precio" id="precio" placeholder="Precio" value="<?php echo $taller['precio'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="dirigido">Dirigido: </label>
                    <input type="text" class="form-control" name="dirigido" id="dirigido" placeholder="Dirigido" value="<?php echo $taller['dirigido'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="sesiones">Nun. Sesiones: </label>
                    <input type="text" class="form-control" name="sesiones" id="sesiones" placeholder="Sesiones" value="<?php echo $taller['sesiones'] ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="temas">Temas(Sesiones): </label>
                    <!-- <input type="text" class="form-control" name="temas" id="temas" placeholder="Temas" value="<?php echo $taller['temas'] ?>"> -->
                    <textarea class="form-control ckeditor" name="temas" id="temas" cols="30" rows="10"><?php echo $taller['temas']; ?></textarea>
                  </div>
                </div>
                <!-- <div class="col-md-12">
                  <div class="form-group">
                    <label for="item">Item: </label>
                    <input type="text" class="form-control" name="item" id="item" placeholder="Item" value="<?php echo $taller['item'] ?>">
                  </div>
                </div> -->
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="glosa">Glosa: </label>
                    <!-- <input type="text" class="form-control" name="glosa" id="glosa" placeholder="Glosa" value="<?php echo $taller['glosa'] ?>"> -->
                    <textarea class="form-control ckeditor" name="glosa" id="glosa" cols="30" rows="10"><?php echo $taller['glosa']; ?></textarea>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email" class="d-block">Publicar </label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="publicar" id="si" value="S" <?php echo $si; ?>
                      >
                      <label class="form-check-label" for="si">SI</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="publicar" id="no" value="N" <?php echo $no; ?>
                      >
                      <label class="form-check-label" for="no">NO</label>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-12 text-center">
                  <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $taller['imagen']; ?>">
                  <img src="<?php echo $taller['imagen'] ?>" class="img-fluid img-view-edit mb-2">
                </div>
                <div class="col-12 mb-3">
                  <hr>
                  <div class="form-group">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                        <label class="input-group-text" for="imagen">Nueva Imagen</label>
                      </div>
                      <input data-file-img="images" type="file" class="form-control" name="imagen" id="imagen"
                        placeholder="Imagen" accept="image/*">
                    </div>
                  </div>
                </div>

                <div class="col-12 mb-3">
                  <div class="preview-img" data-img-preview="preview" id="preview"></div>
                </div>

              </div>

              <div class="w-100 text-center">
                <a href="admin/taller/taller.php" type="button" class="btn btn-dark ">Cancelar</a>
                <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
              </div>

            </form>
          </div>

        </div>

      </div>

    </main>

  </div>

  <?php require_once "../layout/foot_links.phtml"; ?>
  <?php require_once "../layout/ckeditor.phtml"; ?>


</body>

</html>