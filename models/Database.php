<?php

class Database{

	private static $conn=null;
	private static function connect(){
		$dbInfo = "mysql:host=127.0.0.1;dbname=online_shop";
		$sqlUsername = "root";
		$sqlPassword = "Dat090299@";

		try {
			self::$conn = new PDO($dbInfo,$sqlUsername,$sqlPassword);
			self::$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			self::$conn->query('SET NAMES "utf8"'); 
		} catch (PDOException $e) {
			echo "Failed to connect to database". $e->getMessage();
		}
	}

	public static function select($sql){
		self::connect();
		$stmt=self::$conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetch();
		$conn=null;
		return $result;
	}

	public static function getNumber($sql){
		self::connect();
		$stmt=self::$conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_NUM);
		$result = $stmt->fetch();
		$conn=null;
		return $result[0];
	}

	public static function selectAll($sql){
		self::connect();
		$stmt=self::$conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$result = $stmt->fetchAll();
		self::$conn=null;
		return $result;
	}

	public static function insert($sql){
		self::connect();
		self::$conn->exec($sql);
		self::$conn=null;
	}

	public static function insertGetId($sql){
		self::connect();
		self::$conn->exec($sql);
		$last_id=self::$conn->lastInsertId();
		self::$conn=null;
		return $last_id;
	}

	public static function update($sql){
		self::connect();
		$stmt=self::$conn->prepare($sql);
		$stmt->execute();
		self::$conn=null;
	}

	public static function delete($sql){
		self::connect();
		self::$conn->exec($sql);
		self::$conn=null;
	}
}

?>