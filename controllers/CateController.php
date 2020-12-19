<?php 
require_once(dirname(__DIR__).'/models/Cate.php');
require_once(dirname(__DIR__).'/public/functions.php');

class CateController {

	public function __construct(){
	}

	public function addCate(){
		$name=$_POST['txtCateName'];
		$alias=changeTitle($name);
		$order=$_POST['txtOrder'];
		$parent_id=$_POST['sltParent'];
		$keywords=$_POST['txtKeywords'];
		$description=$_POST['txtDescription'];
		$cate = new Cate();
		$cate->setProperties(0,$name,$alias,$order,$parent_id,$keywords,$description);
		Cate::addCate($cate);
	}

	public function editCate(){
		$id=$_POST['txtId'];
		$name=$_POST['txtCateName'];
		$alias=changeTitle($name);
		$order=$_POST['txtOrder'];
		$parent_id=$_POST['sltParent'];
		$keywords=$_POST['txtKeywords'];
		$description=$_POST['txtDescription'];
		$cate = new Cate();
		$cate->setProperties($id,$name,$alias,$order,$parent_id,$keywords,$description);
		Cate::editCate($cate);
	}

	public function deleteCate(){
		$id=$_GET['id'];
		Cate::deleteCate($id);
	}
}
?>