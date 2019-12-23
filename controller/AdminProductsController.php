<?php
class AdminProductsController{
    public function actionGet(){

		$products = array();
        $products = Product::getProduct();
		
        include_once(DIRNAME.'backend/products.php');
        return true;
    }

    public function actionView($id){
        if(!isset($_SESSION["admin"])){
            header("Location:/");
        }

        $product = Product::getProductByID($id);



        $title = false;
        $specialty_id = false;



        include_once(DIRNAME.'backend/createOrder.php');
        return true;
    }

    public function actionAdd(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		$title = false;
		$cost = false;
		$photo = false;

		if(isset($_POST["product_add"])){
		    $title = $_POST["title"];
		    $title = $_POST["cost"];
		    $title = $_POST["photo"];

    		Product::addProduct($title,$cost,$photo);
    		header("Location:/admin/products");
		}
		
		include_once(DIRNAME.'backend/products.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Product::deleteProduct($id);
    	header("Location:/admin/products");
        return true;
    }
}
?>