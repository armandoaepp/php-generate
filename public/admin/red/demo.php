<?php

$fecha_actual = date("d-m-Y");
echo $fecha_actual ;
echo "<br>";
//sumo 1 día
// echo date("d-m-Y",strtotime($fecha_actual."+ 1 days"));
//resto 1 día
echo date("d-m-Y",strtotime($fecha_actual."- 20 days"));


require_once "../../app/autoload.php";

$red_controller = new RedController();

$data = $red_controller->getCountRowByDate(20);

print($data) ;