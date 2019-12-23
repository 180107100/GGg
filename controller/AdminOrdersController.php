<?php
class AdminOrdersController{
    public function actionGet(){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		$orders = array();
		$orders = Order::getOrders();
		
        include_once(DIRNAME.'backend/orders.php');
        return true;
    }
    
    public function actionAdd($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}

		$name = false;
		$email = false;
		$phone = false;
		$product_id = false;
		$title = Product::getProductByID($id)["title"];
		$count = false;
		$comments = false;

		if(isset($_POST["order_add"])){
		    $name = $_POST["name"];
		    $email = $_POST["email"];
		    $phone = $_POST["phone"];
		    $product_id = $_POST["product_id"];
		    $title = $_POST["title"];
		    $count = $_POST["count"];
		    $comments = $_POST["comments"];
		    $user_id = Admin::getAdmin($_SESSION["admin"])["id"];

    		Order::addOrders($name,$email,$phone,$product_id,$title, $count,$comments,$user_id);
    		header("Location:/admin/createOrder");
		}
		
		
		include_once(DIRNAME.'backend/createOrder.php');
        return true;
    }
    
    public function actionDelete($id){
        if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		Order::deleteOrder($id);
		header("Location:/admin/orders");
        return true;
    }
}
?>