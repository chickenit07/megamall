<?php
require_once(dirname(__DIR__)."/models/Database.php");

class User{

	private $id,$username,$password,$email,$level;

	public function __construct(){
	
	}

	public function setProperty($id,$username,$password,$email,$level){
		$this->id=$id;
		$this->username=$username;
		$this->password=$password;
		$this->email=$email;
		$this->level=$level;
	}

	public static function addUser(User $user){
		$sql="insert into users (username,password_md5,email,level,created_at,updated_at)
		values('".$user->username."','".$user->password."','".$user->email."',".$user->level.",NOW(),NOW())";
		Database::insert($sql);
	}

	public static function getUserById($user_id){
		$sql="select * from users where id = '".$user_id."'";
		$user= Database::select($sql);
		return $user;
	}

	public static function getAllUser(){
		$sql="select * from users";
		$users= Database::selectAll($sql);
		return $users;
	}

	public static function editUser(User $user){
		$sql="update users 
		set username='".$user->username."',password_md5='".$user->password."',email='".$user->email."',level=".$user->level.",updated_at=NOW()
		where id='".$user->id."'";
		Database::update($sql);
	}

	public static function deleteUser($id){
		$sql="delete from users where id=".$id;
		Database::delete($sql);
	}

	public static function checkLogin($username, $password){
		$sql="select * from users where username = '".$username."' and password_md5='".$password."'";
		$user= Database::select($sql);
		if($user){
			if ($user['level']==1){//member
				return false;
			}
		}
		return $user;
	}
}

?>