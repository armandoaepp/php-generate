<!DOCTYPE html>
<html lang="es_ES">

<head>
  <?php
    $setvar = array(
      'titulo'     => 'Sidebar Admin | Armando tu web ',
      'follow'      => '', 
      'description' => 'Sidebar admin template boostrap 4, armandotuweb.net',
      'keywords'    => 'sidebar, sidebar admin, sidebar css, sidebar bootstrap 4, template admin, admin template',
      'active'      => [1,0]
    );

    $sidebar = array(
      'sidebar_class'     => 'sidebar-blue',
      'sidebar_toggle'      => 'only',  
     );

  require_once "templates/head_links.phtml";
?>
</head>

<body>
  <?php require "templates/header.phtml";?>
    <div class="app-wrap">
    <?php require "templates/sidebar.phtml";?>

    <main class="main">
    </main>  
  </div>
 

 
  <?php require_once "templates/foot_links.phtml"?>

</body>

</html>