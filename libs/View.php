<?php 
	class View{
		function __construct(){
			
		}
		public function render($name,$arg = false){
			if($arg == false){
				require 'views/'. $name. '.php';
			}
			else{
				require 'views/header/index.php';
				require 'views/'. $name. '.php';
			}
		}
	}
?>