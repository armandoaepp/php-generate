
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

?>
<?php $title_page = "Carrera" ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <?php
$setvar = array("titulo" => "Nuevo ".$title_page." | Admin ", "follow" => "", "active" => [1, 1]);
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
        <li class="breadcrumb-item active" aria-current="page">Nuevo <?php echo $title_page ;?></li>
      </ol>
    </nav>

    <div class="container py-2 py-md-3">
      <div class="row">
        <div class="col-12">
          <h4 class="page-header-title">Nuevo <?php echo $title_page ;?> </h4>
        </div>
      </div>
      <div class="row">

        <div class="col-12 col-md-10">
          <form action="admin/carrera/save.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="new">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulo">titulo : </label>
                  <input type="text" class="form-control" name="titulo" id="titulo" required placeholder="titulo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descripcion">descripcion : </label>
                  <input type="text" class="form-control" name="descripcion" id="descripcion" required placeholder="descripcion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="slide">slide : </label>
                  <input type="text" class="form-control" name="slide" id="slide" required placeholder="slide">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="imagen">Imagen(Recomendación Imagen de 350 x 200 pixeles ) </label>
                  <input type="file"  class="form-control" name="imagen" id="imagen"  placeholder="Imagen" accept="image/*">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="presentacion">presentacion : </label>
                  <input type="text" class="form-control" name="presentacion" id="presentacion" required placeholder="presentacion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="porque">porque : </label>
                  <input type="text" class="form-control" name="porque" id="porque" required placeholder="porque">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="donde">donde : </label>
                  <input type="text" class="form-control" name="donde" id="donde" required placeholder="donde">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="certificacion">certificacion : </label>
                  <input type="text" class="form-control" name="certificacion" id="certificacion" required placeholder="certificacion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulos">titulos : </label>
                  <input type="text" class="form-control" name="titulos" id="titulos" required placeholder="titulos">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inversion">inversion : </label>
                  <input type="text" class="form-control" name="inversion" id="inversion" required placeholder="inversion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="titulacion">titulacion : </label>
                  <input type="text" class="form-control" name="titulacion" id="titulacion" required placeholder="titulacion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleduracion">detalleduracion : </label>
                  <input type="text" class="form-control" name="detalleduracion" id="detalleduracion" required placeholder="detalleduracion">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalledia">detalledia : </label>
                  <input type="text" class="form-control" name="detalledia" id="detalledia" required placeholder="detalledia">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detallehorario">detallehorario : </label>
                  <input type="text" class="form-control" name="detallehorario" id="detallehorario" required placeholder="detallehorario">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detallelugar">detallelugar : </label>
                  <input type="text" class="form-control" name="detallelugar" id="detallelugar" required placeholder="detallelugar">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleprecio">detalleprecio : </label>
                  <input type="text" class="form-control" name="detalleprecio" id="detalleprecio" required placeholder="detalleprecio">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleequipos">detalleequipos : </label>
                  <input type="text" class="form-control" name="detalleequipos" id="detalleequipos" required placeholder="detalleequipos">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalleconsultas">detalleconsultas : </label>
                  <input type="text" class="form-control" name="detalleconsultas" id="detalleconsultas" required placeholder="detalleconsultas">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="detalledirigido">detalledirigido : </label>
                  <input type="text" class="form-control" name="detalledirigido" id="detalledirigido" required placeholder="detalledirigido">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="aquien">aquien : </label>
                  <input type="text" class="form-control" name="aquien" id="aquien" required placeholder="aquien">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="temas">temas : </label>
                  <input type="text" class="form-control" name="temas" id="temas" required placeholder="temas">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombreseo">nombreseo : </label>
                  <input type="text" class="form-control" name="nombreseo" id="nombreseo" required placeholder="nombreseo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="orden">orden : </label>
                  <input type="text" class="form-control" name="orden" id="orden" required placeholder="orden">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fecha">fecha : </label>
                  <input type="text" class="form-control" name="fecha" id="fecha" required placeholder="fecha">
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
