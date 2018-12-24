
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

?>
<?php $title_page = "LoginAttempts" ?>
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
          <a href="admin/login-attempts/login-attempts.php"><?php echo $title_page ;?>s</a>
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
          <form action="admin/login-attempts/save.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="new">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label for="ip_address">ip_address : </label>
                  <input type="text" class="form-control" name="ip_address" id="ip_address" required placeholder="ip_address">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="login">login : </label>
                  <input type="text" class="form-control" name="login" id="login" required placeholder="login">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="time">time : </label>
                  <input type="text" class="form-control" name="time" id="time" required placeholder="time">
                </div>
              </div>




            </div>

            <div class="w-100 text-center">
              <a href="admin/login-attempts/login-attempts.php" type="button" class="btn btn-dark ">Cancelar</a>
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
