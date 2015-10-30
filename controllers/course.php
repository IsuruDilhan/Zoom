<?php 
	class Course extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			$this->view->render('course/index',true);
		}
		public function signUp(){
			$this->view->render('index/signUp',false);
		}
	}
?>