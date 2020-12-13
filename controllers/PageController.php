<?php
require_once("models/Product.php");
require_once("models/ProductImage.php");
require_once("models/Cate.php");
require_once("models/User.php");
require_once("models/Cart.php");

class PageController{

	public function __construct(){
	}

	private function setPageTitle($title) {
		echo '<script type="text/javascript">';
		echo 'document.title = "Megamall - '.$title.'";';
		echo '</script>';
	}
	public function viewNavigation(){
		$menus = Cate::getMenu();
		include_once("views/user/blocks/nav.php");
	}
	
	public function viewIndexPage(){
		$latest_product = Product::getLatestProduct(4);
		$random_product = Product::getRandomProduct(4);
		include_once("views/user/pages/intro_product.php");
	}

	public function viewProductCatePage(){
		if (isset($_GET['id'])){
			$paged = (!empty($_GET['page'])) ? $_GET['page'] : 1;
			$numberOfProductsPerPage = 6;
			$cate_id = $_GET['id'];
			$product_cate = Product::getProductCate($cate_id, $numberOfProductsPerPage, $paged);
			$latest_product = Product::getLatestProductCate($cate_id,3);
			$cate_parent_id = Cate::getCateParentId($cate_id);
			if ($cate_parent_id != 0)
				$menu_cate = Cate::getMenuCate($cate_parent_id);
			$cate = Cate::getCate($cate_id);

			$numberOfProductCate = (int)Product::getNumberOfProductCate($cate_id);
			$pagination = new stdClass; // Phân trang
			$pagination->currentPage = $paged;
			$pagination->lastPage = floor($numberOfProductCate/$numberOfProductsPerPage) + 1;
			// var_dump($pagination);
			$this->setPageTitle($cate['name']);
			include_once('views/user/pages/product_cate.php');
		}
	}
	public function viewProductDetailPage(){
		if(isset($_GET['id'])){
			$product_id=$_GET['id'];
			$product_detail = Product::getProductDetail($product_id);
			$product_image = Product::getProductImage($product_id);
			$cate_id = $product_detail['cate_id'];
			// $related_product = Product::getRelatedProduct($product_id,$cate_id);

			$this->setPageTitle($product_detail['name']);
			include_once('views/user/pages/product_detail.php');
		}
	}

	public function viewAddCatePage(){
		$cate_parent = Cate::getAllCate();
		include_once 'public/admin/functions.php';
		include_once('views/admin/add_cate.php');
	}

	public function viewListCatePage(){
		$cates = Cate::getAllCate();
		include_once('views/admin/list_cate.php');
	}

	public function viewEditCatePage(){
		if(isset($_GET['id'])){
			$cate_id=$_GET['id'];
			$cate = Cate::getCateById($cate_id);
			$cates = Cate::getAllCate();
			include_once 'public/admin/functions.php';
			include_once('views/admin/edit_cate.php');
		}
	}

	public function viewAddUserPage(){
		include_once('views/admin/add_user.php');
	}

	public function viewListUserPage(){
		$users = User::getAllUser();
		include_once('views/admin/list_user.php');
	}

	public function viewEditUserPage(){
		if(isset($_GET['id'])){
			$user_id=$_GET['id'];
			$data = User::getUserById($user_id);
			include_once('views/admin/edit_user.php');
		}
	}
	public function viewAddProductPage(){
		$cates = Cate::getAllCate();
		include_once 'public/admin/functions.php';
		include_once('views/admin/add_product.php');
	}

	public function viewListProductPage(){
		$products = Product::getAllProduct();
		//var_dump($products);
		include_once('views/admin/list_product.php');
	}

	public function viewEditProductPage(){
		if(isset($_GET['id'])){
			$product_id=$_GET['id'];
			$product = Product::getProductById($product_id);
			$cates = Cate::getAllCate();
			$product_images = ProductImage::getAllImageByProductId($product_id);
			include_once 'public/admin/functions.php';
			include_once('views/admin/edit_product.php');
		}
	}

	public function viewCartPage(){
		$cart = new Cart();
		if(isset($_SESSION['cart'])){// Lấy dữ liệu từ session lưu vào cart
			$cart->setContent($_SESSION['cart']);
		}
		$total = $cart->getTotal();
		$product_cart = $cart->getContent();

		$this->setPageTitle('My Cart');
		include_once('views/user/pages/cart.php');
	}

	public function viewContactPage(){
		include_once('views/user/pages/contact.php');
	}

	public function viewLoginPage(){
		include_once('views/user/pages/login.php');
	}
}

?>