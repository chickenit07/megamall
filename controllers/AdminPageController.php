<?php
require_once("../models/Product.php");
require_once("../models/ProductImage.php");
require_once("../models/Cate.php");
require_once("../models/User.php");
require_once("../models/Cart.php");

class AdminPageController{

	public function __construct(){
	}	

	public function viewAddCatePage(){
		
		$cate_parent = Cate::getAllCate();
		include_once '../public/functions.php';
		include_once('../views/admin/pages/add_cate.php');
	}

	public function viewListCatePage(){
		$cates = Cate::getAllCate();
		include_once('../views/admin/pages/list_cate.php');
	}

	public function viewEditCatePage(){
		if(isset($_GET['id'])){
			$cate_id=$_GET['id'];
			$cate = Cate::getCateById($cate_id);
			$cates = Cate::getAllCate();
			include_once '../public/functions.php';
			include_once('../views/admin/pages/edit_cate.php');
		}
	}

	public function viewAddUserPage(){
		include_once('../views/admin/pages/add_user.php');
	}

	public function viewListUserPage(){
		$users = User::getAllUser();
		include_once('../views/admin/pages/list_user.php');
	}

	public function viewDashboardPage(){
		include_once('../views/admin/pages/dashboard.php');
	}
	public function viewEditUserPage(){
		if(isset($_GET['id'])){
			$user_id=$_GET['id'];
			$data = User::getUserById($user_id);
			include_once('../views/admin/pages/edit_user.php');
		}
	}

	public function viewAddProductPage(){
		$cates = Cate::getAllCate();
		include_once '../public/functions.php';
		include_once('../views/admin/pages/add_product.php');
	}

	public function viewListProductPage(){
		$products = Product::getAllProduct();
		//var_dump($products);
		include_once('../views/admin/pages/list_product.php');
	}

	public function viewEditProductPage(){
		if(isset($_GET['id'])){
			$product_id=$_GET['id'];
			$product = Product::getProductById($product_id);
			$cates = Cate::getAllCate();
			$product_images = ProductImage::getAllImageByProductId($product_id);
			include_once '../public/functions.php';
			include_once('../views/admin/pages/edit_product.php');
		}
	}
}

?>