
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./carrera.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $carrera_controller = new CarreraController();

  $carrera = $carrera_controller->find($id);

  $title_page = "Carrera"
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array("titulo" => "Editar ".$title_page." | Admin ", "follow" => "", "active" => [1, 1]);
require_once "../layout/head_links.phtml";
?>
</head>

<body>
  <?php
    require "../layout/header.phtml";
  ?>

  <main role="main" class="screen-main">

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="admin">
            <i class="material-icons">home</i>
          </a>
        </li>
        <li class="breadcrumb-item">
          <a href="admin/carrera/carrera.php"><?php echo $title_page ;?>s</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Editar <?php echo $title_page ;?></li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Editar <?php echo $title_page ;?> </h4>
        </div>
      </div>
      <div class="row">

        <div class="col-12 col-md-10">
          <form action="admin/carrera/update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">titulo : </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="titulo"  value="<?php echo $carrera['titulo'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion">descripcion : </label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="descripcion"  value="<?php echo $carrera['descripcion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="slide">slide : </label>
                  <input type="text" class="form-control" name="slide" id="slide" required placeholder="slide"  value="<?php echo $carrera['slide'] ?>" >
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $carrera['imagen']; ?>">

                <img src="<?php echo $carrera['imagen'] ?>" class="img-fluid mb-1">
                <div class="col-auto">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="imagen">Nueva Imagen</label>
                    </div>
                    <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" accept="image/*">
                  </div>
                </div>
              </div>
                            <div class="col-md-6">
                <div class="form-group">
                  <label for="presentacion">presentacion : </label>
                  <input type="text" class="form-control" name="presentacion" id="presentacion" required placeholder="presentacion"  value="<?php echo $carrera['presentacion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="porque">porque : </label>
                  <input type="text" class="form-control" name="porque" id="porque" required placeholder="porque"  value="<?php echo $carrera['porque'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="donde">donde : </label>
                  <input type="text" class="form-control" name="donde" id="donde" required placeholder="donde"  value="<?php echo $carrera['donde'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="certificacion">certificacion : </label>
                  <input type="text" class="form-control" name="certificacion" id="certificacion" required placeholder="certificacion"  value="<?php echo $carrera['certificacion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulos">titulos : </label>
                  <input type="text" class="form-control" name="titulos" id="titulos" required placeholder="titulos"  value="<?php echo $carrera['titulos'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inversion">inversion : </label>
                  <input type="text" class="form-control" name="inversion" id="inversion" required placeholder="inversion"  value="<?php echo $carrera['inversion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulacion">titulacion : </label>
                  <input type="text" class="form-control" name="titulacion" id="titulacion" required placeholder="titulacion"  value="<?php echo $carrera['titulacion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleduracion">detalleduracion : </label>
                  <input type="text" class="form-control" name="detalleduracion" id="detalleduracion" required placeholder="detalleduracion"  value="<?php echo $carrera['detalleduracion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalledia">detalledia : </label>
                  <input type="text" class="form-control" name="detalledia" id="detalledia" required placeholder="detalledia"  value="<?php echo $carrera['detalledia'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detallehorario">detallehorario : </label>
                  <input type="text" class="form-control" name="detallehorario" id="detallehorario" required placeholder="detallehorario"  value="<?php echo $carrera['detallehorario'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detallelugar">detallelugar : </label>
                  <input type="text" class="form-control" name="detallelugar" id="detallelugar" required placeholder="detallelugar"  value="<?php echo $carrera['detallelugar'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleprecio">detalleprecio : </label>
                  <input type="text" class="form-control" name="detalleprecio" id="detalleprecio" required placeholder="detalleprecio"  value="<?php echo $carrera['detalleprecio'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleequipos">detalleequipos : </label>
                  <input type="text" class="form-control" name="detalleequipos" id="detalleequipos" required placeholder="detalleequipos"  value="<?php echo $carrera['detalleequipos'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleconsultas">detalleconsultas : </label>
                  <input type="text" class="form-control" name="detalleconsultas" id="detalleconsultas" required placeholder="detalleconsultas"  value="<?php echo $carrera['detalleconsultas'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalledirigido">detalledirigido : </label>
                  <input type="text" class="form-control" name="detalledirigido" id="detalledirigido" required placeholder="detalledirigido"  value="<?php echo $carrera['detalledirigido'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="aquien">aquien : </label>
                  <input type="text" class="form-control" name="aquien" id="aquien" required placeholder="aquien"  value="<?php echo $carrera['aquien'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="temas">temas : </label>
                  <input type="text" class="form-control" name="temas" id="temas" required placeholder="temas"  value="<?php echo $carrera['temas'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombreseo">nombreseo : </label>
                  <input type="text" class="form-control" name="nombreseo" id="nombreseo" required placeholder="nombreseo"  value="<?php echo $carrera['nombreseo'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="orden">orden : </label>
                  <input type="text" class="form-control" name="orden" id="orden" required placeholder="orden"  value="<?php echo $carrera['orden'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">fecha : </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="fecha"  value="<?php echo $carrera['fecha'] ?>" >
                </div>
              </div>

            </div>

            <div class="w-100 text-center">
              <a href="admin/carrera/carrera.php" type="button" class="btn btn-dark ">Cancelar</a>
              <button type="submit" class="btn btn-primary rounded-0  ">Guardar</button>
            </div>

          </form>
        </div>

      </div>

    </div>

  </main>

  <footer class="footer bg-dark sticky-bottom">
    <?php
      require "../layout/footer.phtml";
    ?>
  </footer>
  <?php require_once "../layout/foot_links.phtml"?>

</body>

</html>
