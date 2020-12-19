<?php
require_once(dirname(__DIR__)."/models/Database.php");

class Cate {

	private $id,$name,$alias,$order,$parent_id,$keywords,$description;

	public function __construct(){
	
	}

	public function setProperties($id,$name,$alias,$order,$parent_id,$keywords,$description){
		$this->id=$id;
		$this->name=$name;
		$this->alias=$alias;
		$this->order=$order;
		$this->parent_id=$parent_id;
		$this->keywords=$keywords;
		$this->description=$description;
	}

	public static function getCate($cate_id) {
		$sql="select * from cates where id = '$cate_id'";
		$cate = Database::select($sql);
		return $cate;
	}
	public static function getAllCate() {
		$sql="select * from cates";
		$cates = Database::selectAll($sql);
		return $cates;
	}
	public static function getMenu(){
		$sql="select * from cates";
		$cates = Database::selectAll($sql);
		$menus = array();
		foreach ($cates as $cate) {
		    $id = $cate['id'];
		    if (!isset($menus[$id])) {// Nếu cate hiện tại chưa tồn tại => tạo mới
		        $menus[$id] = array(
		            'id' => $id,
		            'name' => $cate['name'],
		            'alias' => $cate['alias'],
		            'parent_id' => $cate['parent_id'],
		            'has_sub' => 'false',
		            'sub_cate' => array()
		        );
		    } else { // Nếu cate hiện tại đã tồn tại => bổ sung name và parent_id
		        $menus[$id]['name'] = $cate['name'];
		        $menus[$id]['alias'] = $cate['alias'];
		        $menus[$id]['parent_id'] = $cate['parent_id'];
		    }
		    if ($cate['parent_id'] != 0) {// Nếu có cate cha
		        $parent_id = $cate['parent_id'];
		        if (!isset($menus[$parent_id])) {//Cate cha chưa tồn tại => tạo mới cate cha
		            $menus[$parent_id] = array(
		                'id' => $parent_id,
		                'has_sub' => 'true',
		                'sub_cate' => array($id)
		            );
		        } else {// Cate cha đã tồn tại => thêm id cate con vào cate cha
		            $menus[$parent_id]['has_sub'] = 'true';
		            $menus[$parent_id]['sub_cate'][] = $id;
		        }
		        
		    }
		}
		return $menus;
	}

	public static function getParentName($parent_id){
		$sql="select name from cates where id='".$parent_id."'";
		$parent_name= Database::select($sql);
		return $parent_name['name'];
	}

	public static function getMenuCate($cate_parent_id){
		$sql="select id,name,alias from cates where parent_id = '".$cate_parent_id."'";
		$menu_cate= Database::selectAll($sql);
		return $menu_cate;
	}

	public static function getCateParentId($cate_id){
		$sql="select parent_id from cates where id = '".$cate_id."'";
		$cate= Database::select($sql);
		return $cate['parent_id'];
	}

	public static function addCate($cate){
		$sql="insert into cates (name,alias,`order`,parent_id,keywords,description,created_at,updated_at)
		values('".$cate->name."','".$cate->alias."',".$cate->order.",".$cate->parent_id.",'".$cate->keywords."','".$cate->description."',NOW(),NOW())";
		Database::insert($sql);
	}

	public static function getCateById($cate_id){
		$sql="select * from cates where id = '".$cate_id."'";
		$cate= Database::select($sql);
		return $cate;
	}

	public static function editCate($cate){
		$sql="update cates set name='".$cate->name."',alias='".$cate->alias."',`order`='".$cate->order."',parent_id='".$cate->parent_id."',
		keywords='".$cate->keywords."',description='".$cate->description."',updated_at=NOW() where id='".$cate->id."'";
		Database::update($sql);
	}

	public static function deleteCate($id){
		$sql="delete from cates where id=".$id;
		Database::delete($sql);
	}

}

?>