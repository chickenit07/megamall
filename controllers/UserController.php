<?php 
require_once(dirname(__DIR__).'/models/User.php');
require_once(dirname(__DIR__).'/public/admin/functions.php');
class UserController{

	public function addUser(){
		$username = trim($_POST['txtUser']);
		if (!empty($username)) {
			$password = md5($_POST['txtPass']);
			$email = $_POST['txtEmail'];
			$level = $_POST['rdoLevel'];
			$user = new User();
			$user->setProperty(0,$username,$password,$email,$level);
			User::addUser($user);
			return true;
		}
		return false;
	}

	public function editUser(){
		$id=$_POST['txtId'];
		$username=$_POST['txtUser'];
		$password=$_POST['txtPass'];
		$re_password=$_POST['txtRePass'];
		$email=$_POST['txtEmail'];
		$level=$_POST['rdoLevel'];
		$password=md5($password);
		$user = new User();
		$user->setProperty($id,$username,$password,$email,$level);
		User::editUser($user);
		return true;
	}

	public function getEditUser($userId){
		$edit_user=User::getUserById($userId);
		$current_user_level=$_SESSION['level'];
		if($current_user_level > $edit_user['level']){
			return true;
		}
		return false;
	}

	public function deleteUser(){
		$id=$_GET['id'];
		$del_user=User::getUserById($id);
		$current_user_level=$_SESSION['level'];
		if($current_user_level > $del_user['level']){
			User::deleteUser($id);
			return true;
		}
		return false;
	}

	public function checkLogin(){
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$login=User::checkLogin($username,$password);
		if($login){
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['level']=$login['level'];
			return true;
		}
		return false;
	}
}
