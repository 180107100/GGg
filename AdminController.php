<?php
class AdminController{
	public function actionPanel(){
		if(!isset($_SESSION["admin"])){
			header("Location:/");
		}
		
		
		
		include_once(DIRNAME.'view/main.php');
		return true;
	}

}
?>