<?php 
	class Home extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('home/index',true);
		}
		public function signUp(){
			$this->view->render('index/signUp',false);
		}
	}
?>