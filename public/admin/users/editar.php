
<?php
  require_once "../sesion_admin.php";
  loginRedirect("../login.php");

  $id = !empty($_GET["id"]) ? $_GET["id"] : 0;

  if ($id <= 0) {
      header("Location: ./users.php ", true, 301);
  }

  require_once "../../app/autoload.php";

  $users_controller = new UsersController();

  $users = $users_controller->find($id);

  $title_page = "Users"
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
          <a href="admin/users/users.php"><?php echo $title_page ;?>s</a>
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
          <form action="admin/users/update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="accion" id="accion" value="edit">
            <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>">
            <div class="row">
            
              <div class="col-md-6">
                <div class="form-group">
                  <label for="ip_address">ip_address : </label>
                  <input type="text" class="form-control" name="ip_address" id="ip_address" required placeholder="ip_address"  value="<?php echo $users['ip_address'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="username">username : </label>
                  <input type="text" class="form-control" name="username" id="username" required placeholder="username"  value="<?php echo $users['username'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="password">password : </label>
                  <input type="text" class="form-control" name="password" id="password" required placeholder="password"  value="<?php echo $users['password'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="salt">salt : </label>
                  <input type="text" class="form-control" name="salt" id="salt" required placeholder="salt"  value="<?php echo $users['salt'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="email">email : </label>
                  <input type="text" class="form-control" name="email" id="email" required placeholder="email"  value="<?php echo $users['email'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="activation_code">activation_code : </label>
                  <input type="text" class="form-control" name="activation_code" id="activation_code" required placeholder="activation_code"  value="<?php echo $users['activation_code'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="forgotten_password_code">forgotten_password_code : </label>
                  <input type="text" class="form-control" name="forgotten_password_code" id="forgotten_password_code" required placeholder="forgotten_password_code"  value="<?php echo $users['forgotten_password_code'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="forgotten_password_time">forgotten_password_time : </label>
                  <input type="text" class="form-control" name="forgotten_password_time" id="forgotten_password_time" required placeholder="forgotten_password_time"  value="<?php echo $users['forgotten_password_time'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="remember_code">remember_code : </label>
                  <input type="text" class="form-control" name="remember_code" id="remember_code" required placeholder="remember_code"  value="<?php echo $users['remember_code'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="created_on">created_on : </label>
                  <input type="text" class="form-control" name="created_on" id="created_on" required placeholder="created_on"  value="<?php echo $users['created_on'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="last_login">last_login : </label>
                  <input type="text" class="form-control" name="last_login" id="last_login" required placeholder="last_login"  value="<?php echo $users['last_login'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="active">active : </label>
                  <input type="text" class="form-control" name="active" id="active" required placeholder="active"  value="<?php echo $users['active'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="first_name">first_name : </label>
                  <input type="text" class="form-control" name="first_name" id="first_name" required placeholder="first_name"  value="<?php echo $users['first_name'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="last_name">last_name : </label>
                  <input type="text" class="form-control" name="last_name" id="last_name" required placeholder="last_name"  value="<?php echo $users['last_name'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="company">company : </label>
                  <input type="text" class="form-control" name="company" id="company" required placeholder="company"  value="<?php echo $users['company'] ?>" >
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="phone">phone : </label>
                  <input type="text" class="form-control" name="phone" id="phone" required placeholder="phone"  value="<?php echo $users['phone'] ?>" >
                </div>
              </div>

              <div class="col-sm-6 col-md-6 text-center">
                <input type="hidden" class="form-control" name="img_bd" id="img_bd" value="<?php echo $users['imagen']; ?>">

                <img src="<?php echo $users['imagen'] ?>" class="img-fluid mb-1">
                <div class="col-auto">
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="imagen">Nueva Imagen</label>
                    </div>
                    <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" accept="image/*">
                  </div>
                </div>
              </div>
              
            </div>

            <div class="w-100 text-center">
              <a href="admin/users/users.php" type="button" class="btn btn-dark ">Cancelar</a>
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
