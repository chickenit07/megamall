<?php
require_once(dirname(__DIR__)."/models/Database.php");
class ProductImage{

	private $id,$image,$product_id;

	public function __construct(){
		
	}

	public function setProperties($id,$image,$product_id){
		$this->id=$id;
		$this->image=$image;
		$this->product_id=$product_id;
	}

	public static function getAllImageByProductId($product_id){
		$sql="select * from product_images where product_id=".$product_id;
		$product_images= Database::selectAll($sql);
		return $product_images;
	}

	public static function addProductImage($product_image){
		$sql="insert into product_images (image,product_id,created_at,updated_at)
		values('".$product_image->image."',".$product_image->product_id.",NOW(),NOW())";
		Database::insert($sql);
	}

	public static function editProductImage($product_image){
		$sql="update product_images set image='".$product_image->image."',product_id=".$product_image->product_id."
		where id='".$product_image->id."'";
		Database::update($sql);
	}

	public static function getImageById($id){
		$sql="select * from product_images where id=".$id;
		$image= Database::select($sql);
		return $image;
	}

	public static function deleteImage($id){
		$sql="delete from product_images where id=".$id;
		Database::delete($sql);
	}
}

?>