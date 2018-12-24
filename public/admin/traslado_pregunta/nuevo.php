
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

?>
<?php $title_page = "TrasladoPregunta" ?>
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
          <a href="admin/traslado-pregunta/traslado-pregunta.php"><?php echo $title_page ;?>s</a>
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
          <form action="admin/traslado-pregunta/save.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="new">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label for="pregunta">pregunta : </label>
                  <input type="text" class="form-control" name="pregunta" id="pregunta" required placeholder="pregunta">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="respuesta">respuesta : </label>
                  <input type="text" class="form-control" name="respuesta" id="respuesta" required placeholder="respuesta">
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
              <a href="admin/traslado-pregunta/traslado-pregunta.php" type="button" class="btn btn-dark ">Cancelar</a>
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
