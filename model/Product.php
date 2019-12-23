<?php
class Product{
    public static function getProduct(){
		$db = DB::getConnection();
		$get = array();
		$result = $db->query("SELECT * FROM Products");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["title"] = $row["title"];
			$get[$i]["cost"] = $row["cost"];
			$get[$i]["photo"] = $row["photo"];
			$i++;
		}
		return $get;
    }

    public static function addProduct($title,$cost,$photo){
        $db = DB::getConnection();
		$sql = "INSERT INTO Products (title,cost,photo) VALUES(:title,:cost,:photo)";
		$result=$db->prepare($sql);
		$result->bindParam(":title",$title,PDO::PARAM_STR);
		$result->bindParam(":cost",$cost,PDO::PARAM_STR);
		$result->bindParam(":photo",$photo,PDO::PARAM_STR);
		return $result->execute();
    }

    public static function getProductByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Products WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteProduct($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Products WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>