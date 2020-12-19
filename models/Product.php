<?php
require_once(dirname(__DIR__)."/models/Database.php");

class Product{

	private $id,$name,$alias,$price,$intro,$content,$image,$keywords,$description,$user_id,$cate_id;

	public function __construct(){
		
	}

	public function setProperties($id,$name,$alias,$price,$intro,$content,$image,$keywords,$description,$user_id,$cate_id){
		$this->id=$id;
		$this->name=$name;
		$this->alias=$alias;
		$this->price=$price;
		$this->intro=$intro;
		$this->content=$content;
		$this->image=$image;
		$this->keywords=$keywords;
		$this->description=$description;
		$this->user_id=$user_id;
		$this->cate_id=$cate_id;
	}

	public static function getLatestProduct($numberOfProduct){
		$sql="select id,name,image,price,alias from products order by id DESC limit ".$numberOfProduct."";
		$latest_product = Database::selectAll($sql);
		return $latest_product;
	}

	public static function getLatestProductCate($cate_id, $numberOfProduct){
		$sql="select id,name,image,price,alias from products where cate_id = '".$cate_id."' order by id DESC limit ".$numberOfProduct."";
		$latest_product = Database::selectAll($sql);
		return $latest_product;
	}

	public static function getRandomProduct($numberOfProduct){ 
		$sql="SELECT * FROM products ORDER BY RAND() LIMIT 0,$numberOfProduct";
		$random_product = Database::selectAll($sql);
		return $random_product;
	}

	public static function getProductCate($cate_id, $numberOfProducts, $paged){
		$offset = $numberOfProducts*($paged-1);
		$limit = $numberOfProducts;
		$sql="select id,name,image,price,alias from products where cate_id = '$cate_id' limit $offset,$limit";
		// var_dump($sql);

		$product_cate = Database::selectAll($sql);
		// die;
		return $product_cate;
	}

	public static function getNumberOfProductCate($cate_id) {
		$sql = "select count(*) from products where cate_id = '$cate_id'";
		$number = Database::getNumber($sql);
		return $number;
	}

	public static function getRelatedProduct($product_id,$cate_id){
		$sql="select * from products where cate_id='".$cate_id."' and id<>'".$product_id."' limit 4";
		$related_product = Database::selectAll($sql);
		return $related_product;
	}

	public static function getProductDetail($product_id){
		$sql="select * from products where id='".$product_id."'";
		$product_detail = Database::select($sql);
		return $product_detail;
	}

	public static function getProductImage($product_id){
		$sql="select image from product_images where product_id='".$product_id."'";
		$images = Database::selectAll($sql);
		return $images;
	}

	public static function getAllProduct(){
		$sql="select products.id,products.name,products.price,cates.name as cate_name 
		from products inner join cates on products.cate_id=cates.id";
		$products = Database::selectAll($sql);
		return $products;
	}

	public static function getProductById($product_id){
		$sql="select * from products where id='".$product_id."'";
		$product = Database::select($sql);
		return $product;
	}

	public static function addProductGetId(Product $product){
		$sql="insert into products
		(name,alias,price,intro,content,image,keywords,description,user_id,cate_id,created_at,updated_at)
		values
		('".$product->name."','".$product->alias."',".$product->price.",'".$product->intro."','".$product->content."','".$product->image."','".$product->keywords."','".$product->description."',".$product->user_id.",".$product->cate_id.",NOW(),NOW())";
		$last_id=Database::insertGetId($sql);
		return $last_id;
	}

	public static function editProduct(Product $product){
		$sql="update products set
		name='".$product->name."',alias='".$product->alias."',price=".$product->price.",intro='".$product->intro."',content='".$product->content."',image='".$product->image."',keywords='".$product->keywords."',description='".$product->description."',user_id=".$product->user_id.",cate_id=".$product->cate_id."
		where id='".$product->id."'";
		Database::update($sql);
	}

	public static function deleteProduct($id){
		$sql="delete from products where id=".$id;
		Database::delete($sql);
	}
}

?>
