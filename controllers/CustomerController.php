<?php 
require_once(dirname(__DIR__).'/models/Customer.php');
// require_once(dirname(__DIR__).'/public/admin/functions.php');
class CustomerController{
		public function checkLogin(){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$login=Customer::checkLogin($username,$password);
		if($login){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['level']=$login['level'];
			return true;
		}
		return false;
	}
}
