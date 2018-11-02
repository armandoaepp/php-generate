<?php

	define('FOLDER', 'public');
	define('APP', FOLDER.'/app');
	define('MODELS', APP.'/models');
	define('BEANS', APP.'/beans');
	define('CONTROLLERS', APP.'/controllers');
	define('API', APP.'/api');
	define('HELPERS', APP.'/helpers');
	define('ADMIN', FOLDER.'/admin');



	function copiandofiles(){

			if (!file_exists(APP )) {
				mkdir(APP , 0777);

				full_copy('core_app',APP) ;

			}

			if (!file_exists(MODELS)) {
				mkdir(MODELS, 0777);
			}

			if (!file_exists(BEANS)) {
				mkdir(BEANS, 0777);
			}

			if (!file_exists(CONTROLLERS)) {
				mkdir(CONTROLLERS, 0777);
			}

			if (!file_exists(API)) {
				mkdir(API, 0777);
			}

			if (!file_exists(HELPERS)) {
				mkdir(HELPERS, 0777);
				full_copy('core_app/helpers',HELPERS) ;

			}

			if (!file_exists(APP."/config" )) {
				mkdir(APP."/config" , 0777);
			}

			if (!file_exists(ADMIN )) {
				mkdir(ADMIN , 0777);

				full_copy('templates/admin', ADMIN ) ;
			}

			// copy("files_app/autoload.php", APP."/autoload.php");
			// copy("files_app/paths.php", APP."/paths.php");
			// copy("files_app/Conexion.php", APP."/models/Conexion.php");
			// copy("files_app/config.php", APP."/config/config.php");



				return "Archivos Creados Correctamente";
		}

/* function copiandofiles(){
$carpetap = "public";

	if (!file_exists("app" )) {
		mkdir("app" , 0777);
	}

	if (!file_exists("app/models" )) {
		mkdir("app/models" , 0777);
	}

	if (!file_exists("app/beans" )) {
		mkdir("app/beans" , 0777);
	}

	if (!file_exists("app/controllers" )) {
		mkdir("app/controllers" , 0777);
	}

	if (!file_exists("app/api" )) {
		mkdir("app/api" , 0777);
	}

	if (!file_exists("app/helpers" )) {
		mkdir("app/helpers" , 0777);
	}

	if (!file_exists("app/config" )) {
		mkdir("app/config" , 0777);
	}

	copy("files_app/autoload.php","app/autoload.php");
	copy("files_app/paths.php","app/paths.php");
	copy("files_app/Conexion.php","app/models/Conexion.php");
	copy("files_app/Validation.php","app/helpers/Validation.php");
	copy("files_app/config.php","app/config/config.php");
	copy("files_app/serialize.php","app/helpers/serialize.php");

	//  $midir=opendir("./img");
  //    // $i=0;
  //     while($archivo=readdir($midir)){
  //        if (!is_dir($archivo) && $archivo!="." && $archivo!=".."){
	// 		@copy("./img/".$archivo,"./app/Vistas/img/".$archivo);
	// 		 }
	//   }
	  return "Archivos Creados Correctamente";
}  */