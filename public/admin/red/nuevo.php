
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

?>
<?php $title_page = "Red" ?>
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
          <a href="admin/red/red.php"><?php echo $title_page ;?>s</a>
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
          <form action="admin/red/save.php" method="POST" enctype="multipart/form-data">
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
                  <label for="subtitulo">subtitulo : </label>
                  <input type="text" class="form-control" name="subtitulo" id="subtitulo" required placeholder="subtitulo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="tipo">tipo : </label>
                  <input type="text" class="form-control" name="tipo" id="tipo" required placeholder="tipo">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="vacantes">vacantes : </label>
                  <input type="text" class="form-control" name="vacantes" id="vacantes" required placeholder="vacantes">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="requisitos">requisitos : </label>
                  <input type="text" class="form-control" name="requisitos" id="requisitos" required placeholder="requisitos">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="conocimientos">conocimientos : </label>
                  <input type="text" class="form-control" name="conocimientos" id="conocimientos" required placeholder="conocimientos">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="salario">salario : </label>
                  <input type="text" class="form-control" name="salario" id="salario" required placeholder="salario">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nombrecontacto">nombrecontacto : </label>
                  <input type="text" class="form-control" name="nombrecontacto" id="nombrecontacto" required placeholder="nombrecontacto">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="telefonocontacto">telefonocontacto : </label>
                  <input type="text" class="form-control" name="telefonocontacto" id="telefonocontacto" required placeholder="telefonocontacto">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="emailcontacto">emailcontacto : </label>
                  <input type="text" class="form-control" name="emailcontacto" id="emailcontacto" required placeholder="emailcontacto">
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
              <a href="admin/red/red.php" type="button" class="btn btn-dark ">Cancelar</a>
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
