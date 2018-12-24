
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

  $title_page = "Taller"
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
          <a href="admin/taller/taller.php"><?php echo $title_page ;?>s</a>
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
          <form action="admin/taller/update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">titulo : </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="titulo"  value="<?php echo $taller['titulo'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion">descripcion : </label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="descripcion"  value="<?php echo $taller['descripcion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="slide">slide : </label>
                  <input type="text" class="form-control" name="slide" id="slide" required placeholder="slide"  value="<?php echo $taller['slide'] ?>" >
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $taller['imagen']; ?>">

                <img src="<?php echo $taller['imagen'] ?>" class="img-fluid mb-1">
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
                  <label for="certificacion">certificacion : </label>
                  <input type="text" class="form-control" name="certificacion" id="certificacion" required placeholder="certificacion"  value="<?php echo $taller['certificacion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulos">titulos : </label>
                  <input type="text" class="form-control" name="titulos" id="titulos" required placeholder="titulos"  value="<?php echo $taller['titulos'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inversion">inversion : </label>
                  <input type="text" class="form-control" name="inversion" id="inversion" required placeholder="inversion"  value="<?php echo $taller['inversion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulacion">titulacion : </label>
                  <input type="text" class="form-control" name="titulacion" id="titulacion" required placeholder="titulacion"  value="<?php echo $taller['titulacion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleduracion">detalleduracion : </label>
                  <input type="text" class="form-control" name="detalleduracion" id="detalleduracion" required placeholder="detalleduracion"  value="<?php echo $taller['detalleduracion'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalledia">detalledia : </label>
                  <input type="text" class="form-control" name="detalledia" id="detalledia" required placeholder="detalledia"  value="<?php echo $taller['detalledia'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detallehorario">detallehorario : </label>
                  <input type="text" class="form-control" name="detallehorario" id="detallehorario" required placeholder="detallehorario"  value="<?php echo $taller['detallehorario'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detallelugar">detallelugar : </label>
                  <input type="text" class="form-control" name="detallelugar" id="detallelugar" required placeholder="detallelugar"  value="<?php echo $taller['detallelugar'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleprecio">detalleprecio : </label>
                  <input type="text" class="form-control" name="detalleprecio" id="detalleprecio" required placeholder="detalleprecio"  value="<?php echo $taller['detalleprecio'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleequipos">detalleequipos : </label>
                  <input type="text" class="form-control" name="detalleequipos" id="detalleequipos" required placeholder="detalleequipos"  value="<?php echo $taller['detalleequipos'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleconsultas">detalleconsultas : </label>
                  <input type="text" class="form-control" name="detalleconsultas" id="detalleconsultas" required placeholder="detalleconsultas"  value="<?php echo $taller['detalleconsultas'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalledirigido">detalledirigido : </label>
                  <input type="text" class="form-control" name="detalledirigido" id="detalledirigido" required placeholder="detalledirigido"  value="<?php echo $taller['detalledirigido'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="aquien">aquien : </label>
                  <input type="text" class="form-control" name="aquien" id="aquien" required placeholder="aquien"  value="<?php echo $taller['aquien'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="temas">temas : </label>
                  <input type="text" class="form-control" name="temas" id="temas" required placeholder="temas"  value="<?php echo $taller['temas'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombreseo">nombreseo : </label>
                  <input type="text" class="form-control" name="nombreseo" id="nombreseo" required placeholder="nombreseo"  value="<?php echo $taller['nombreseo'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="orden">orden : </label>
                  <input type="text" class="form-control" name="orden" id="orden" required placeholder="orden"  value="<?php echo $taller['orden'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">fecha : </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="fecha"  value="<?php echo $taller['fecha'] ?>" >
                </div>
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

  <footer class="footer bg-dark sticky-bottom">
    <?php
      require "../layout/footer.phtml";
    ?>
  </footer>
  <?php require_once "../layout/foot_links.phtml"?>

</body>

</html>
