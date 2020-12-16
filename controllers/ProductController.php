<?php 
require_once(dirname(__DIR__)."/models/Product.php");
require_once(dirname(__DIR__)."/models/ProductImage.php");
require_once(dirname(__DIR__).'/public/admin/functions.php');
class ProductController{
	
	public function __construct(){
		
	}

	public function addProduct(){
		$name=$_POST['txtName'];
		$alias=changeTitle($name);
		$price=$_POST['txtPrice'];
		$cate_id=$_POST['sltParent'];
		$intro=$_POST['txtIntro'];
		$content=$_POST['txtContent'];
		$image=$_FILES['fImages']['name'];
		$keywords=$_POST['txtKeywords'];
		$description=$_POST['txtDescription'];
		$user_id=2;
		$product = new Product();
		$product->setProperties(0,$name,$alias,$price,$intro,$content,$image,$keywords,$description,$user_id,$cate_id);
		$product_id=Product::addProductGetId($product);

		//Upload image file
		$target_dir=dirname(__DIR__)."/resources/upload/";
		if($image!=null){
			$tmp_name=$_FILES['fImages']['tmp_name'];
			move_uploaded_file($tmp_name, $target_dir.$image);
		}

		//Upload detail image files
		for($i=0;$i<10;$i++){
			$image_detail=$_FILES['fProductDetail']['name'][$i];
			$tmp_name_detail=$_FILES['fProductDetail']['tmp_name'][$i];
			if($image_detail!=null){
				move_uploaded_file($tmp_name_detail, $target_dir."detail/".$image_detail);
				//Luu vao database
				$productImage = new ProductImage();
				$productImage->setProperties(0,$image_detail,$product_id);
				ProductImage::addProductImage($productImage);
			}
		}
	}

	public function editProduct(){
		$id=$_POST['txtId'];
		$product_id=$id;
		$name=$_POST['txtName'];
		$alias=changeTitle($name);
		$price=$_POST['txtPrice'];
		$cate_id=$_POST['sltParent'];
		$intro=$_POST['txtIntro'];
		$content=$_POST['txtContent'];
		$keywords=$_POST['txtKeywords'];
		$description=$_POST['txtDescription'];
		$user_id=2;
		//Edit image file
		$image=$_POST['img_current'];
		$target_dir=dirname(__DIR__)."/resources/upload/";
		$img_current=dirname(__DIR__)."/resources/upload/".$_POST['img_current'];
		if($_FILES['fImages']['name']!=null){
			$image=$_FILES['fImages']['name'];
			$tmp_name=$_FILES['fImages']['tmp_name'];
			if(file_exists($img_current)){
				unlink($img_current);
			}
			move_uploaded_file($tmp_name, $target_dir.$image);
		}

		$product = new Product();
		$product->setProperties($id,$name,$alias,$price,$intro,$content,$image,$keywords,$description,$user_id,$cate_id);
		Product::editProduct($product);

		//Edit detail image files
		if(isset($_FILES['fEditDetail'])){
			for ($i=0;$i<count($_FILES['fEditDetail']['name']);$i++){
				$image_detail=$_FILES['fEditDetail']['name'][$i];
				$tmp_name_detail=$_FILES['fEditDetail']['tmp_name'][$i];
				if($image_detail!=null){
					move_uploaded_file($tmp_name_detail, $target_dir."detail/".$image_detail);
					//Luu vao database
					$productImage = new ProductImage();
					$productImage->setProperties(0,$image_detail,$product_id);
					ProductImage::addProductImage($productImage);
				}
			}
		}
	}

	public function deleteProduct(){
		$id=$_GET['id'];
		Product::deleteProduct($id);
	}

	public function deleteImageDetail(){
		$idHinh = (int) $_GET['idHinh'];
		$image_detail = ProductImage::getImageById($idHinh);
		if ($image_detail!=null){
			$img = dirname(__DIR__).'resources/upload/detail/'.$image_detail['image'];
			if (file_exists($img)){
				unlink($img);
			}
			ProductImage::deleteImage($idHinh);
		}
		return "Oke";
	}
}
?>