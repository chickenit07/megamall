<?php
require_once(dirname(__DIR__)."/models/Database.php");

class Customer{
	public function __construct(){
	
	}
	public static function checkLogin($username, $password){
		$sql="select * from users where username = '".$username."' and password_md5='".$password."'";
		$user= Database::select($sql);
		if($user){
			if (!$user['level'] ){//admin, super admin
				return false;
			}
		}
		return $user;
	}
}

?>