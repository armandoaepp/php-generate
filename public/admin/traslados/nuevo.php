
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

?>
<?php $title_page = "Traslados" ?>
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
          <a href="admin/traslados/traslados.php"><?php echo $title_page ;?>s</a>
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
          <form action="admin/traslados/save.php" method="POST" enctype="multipart/form-data">
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
                  <label for="item1">item1 : </label>
                  <input type="text" class="form-control" name="item1" id="item1" required placeholder="item1">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="item2">item2 : </label>
                  <input type="text" class="form-control" name="item2" id="item2" required placeholder="item2">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="item3">item3 : </label>
                  <input type="text" class="form-control" name="item3" id="item3" required placeholder="item3">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="item4">item4 : </label>
                  <input type="text" class="form-control" name="item4" id="item4" required placeholder="item4">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descitem1">descitem1 : </label>
                  <input type="text" class="form-control" name="descitem1" id="descitem1" required placeholder="descitem1">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descitem2">descitem2 : </label>
                  <input type="text" class="form-control" name="descitem2" id="descitem2" required placeholder="descitem2">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descitem3">descitem3 : </label>
                  <input type="text" class="form-control" name="descitem3" id="descitem3" required placeholder="descitem3">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="descitem4">descitem4 : </label>
                  <input type="text" class="form-control" name="descitem4" id="descitem4" required placeholder="descitem4">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="promocion">promocion : </label>
                  <input type="text" class="form-control" name="promocion" id="promocion" required placeholder="promocion">
                </div>
              </div>




            </div>

            <div class="w-100 text-center">
              <a href="admin/traslados/traslados.php" type="button" class="btn btn-dark ">Cancelar</a>
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
