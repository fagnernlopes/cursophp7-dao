<?php 
	
	spl_autoload_register(function($class_name){

		$filename = 'class' . DIRECTORY_SEPARATOR . $class_name . ".php"; //Se refere a todo o caminho do arquivo

		if(file_exists($filename)) {

			require_once ($filename);

		}

		



	});

 ?>