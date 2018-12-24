<?php


require_once "app/autoload.php";

$carrera_controller = new CarreraController();

$data = $carrera_controller->getAll();

 foreach ($data as &$row)
 {
  echo $row["id"] ."<br>" ;
  echo $row["titulo"] ."<br>" ;
  echo $row["descripcion"] ."<br>" ;
  echo $row["slide"] ."<br>" ;
  echo $row["presentacion"] ."<br>" ;
  echo $row["porque"] ."<br>" ;
  echo $row["donde"] ."<br>" ;
  echo $row["certificacion"] ."<br>" ;
  echo $row["titulos"] ."<br>" ;
  echo $row["inversion"] ."<br>" ;
  echo $row["titulacion"] ."<br>" ;
  echo $row["detalleduracion"] ."<br>" ;
  echo $row["detalledia"] ."<br>" ;
  echo $row["detallehorario"] ."<br>" ;
  echo $row["detallelugar"] ."<br>" ;
  echo $row["detalleprecio"] ."<br>" ;
  echo $row["detalleequipos"] ."<br>" ;
  echo $row["detalleconsultas"] ."<br>" ;
  echo $row["detalledirigido"] ."<br>" ;
  echo $row["aquien"] ."<br>" ;
  echo $row["temas"] ."<br>" ;
  echo $row["nombreseo"] ."<br>" ;
  echo $row["orden"] ."<br>" ;
  echo $row["fecha"] ."<br>" ;
 }





// solo para seleccionar una fila
$carrera = $carrera_controller->find(1);
var_dump($carrera);
return ;