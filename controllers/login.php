<?php 
	class Login extends Controller{
		function __construct(){
			parent::__construct();
		}
		public function index(){
			Session::init();
			if(!isset($_SESSION['loggedIn'])){
				$this->view->render('login/index',false);	
			}
			else{
				header('location:'.HOME);
			}
		}
		public function login(){

		}
		public static function isLoggedIn(){
			Session::init();
			if(isset($_SESSION['loggedIn'])){
				return true;
			}
			else{
				return false;
			}
		}
		public function checkin(){
			if(isset($_POST['username']) && isset($_POST['password'])){
				$username = $_POST['username'];
				$password = $_POST['password'];	
				require 'models/Login_model.php';
				$model = new Login_model();
				$model->login($username,$password);
			}
		}
		//example for how to use a model
		public function signup(){
			require 'models/Login_model.php';
			$model = new Login_model();
			$model->signup();
			header('location:'.URL);
		}
	}
?>