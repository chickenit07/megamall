<?php
require_once(dirname(__DIR__).'/models/Cart.php');
require_once(dirname(__DIR__).'/models/Product.php');
class CartController {

	private $cart;
	public function __construct() {
		$this->cart = new Cart();
    }
    private function getCartFromSession() {
    	if(isset($_SESSION['cart'])){
			$this->cart->setContent($_SESSION['cart']);
		}
    }
    private function storeCartToSession() {
    	$_SESSION['cart'] = $this->cart->getContent();
    }
	public function addToCart($product_id) {
		$this->getCartFromSession();

		$product = Product::getProductById($product_id);
		$this->cart->add($product, 1);

		$this->storeCartToSession();
	}
	public function updateCart($product_id, $quantity) {
		$this->getCartFromSession();

		if ($quantity >= 1)
			$this->cart->update($product_id, $quantity);

		$this->storeCartToSession();
	}
	public function deleteProduct($product_id) {
		$this->getCartFromSession();
		$this->cart->delete($product_id);
		$this->storeCartToSession();
	}
}
?>