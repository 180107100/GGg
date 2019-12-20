<?php
class Order{
    public static function getOrders(){
		$db = DB::getConnection();
		$get = array();
        $user_id = Admin::getAdmin($_SESSION["admin"])["id"];

        $result = $db->query("SELECT * FROM Orders WHERE user_id=$user_id");
		$i=0;
		while($row = $result->fetch()){
			$get[$i]["id"] = $row["id"];
			$get[$i]["name"] = $row["name"];
			$get[$i]["email"] = $row["email"];
			$get[$i]["phone"] = $row["phone"];
			$get[$i]["product_id"] = $row["product_id"];
			$get[$i]["title"] = $row["title"];
			$get[$i]["count"] = $row["count"];
			$get[$i]["comments"] = $row["comments"];
			$get[$i]["user_id"] = $row["user_id"];
			$i++;
		}
		return $get;
    }
    public static function addOrders($name,$email,$phone,$product_id,$title, $count,$comments,$user_id){
        $db = DB::getConnection();
		$sql = "INSERT INTO Orders (name, email, phone, product_id, title, count, comments,user_id) VALUES(:name,:email,:phone,:product_id, :title, :count, :comments,:user_id)";
		$result=$db->prepare($sql);
		$result->bindParam(":name",$name,PDO::PARAM_STR);
		$result->bindParam(":email",$email,PDO::PARAM_INT);
		$result->bindParam(":phone",$phone,PDO::PARAM_INT);
		$result->bindParam(":product_id",$product_id,PDO::PARAM_INT);
		$result->bindParam(":title",$title,PDO::PARAM_INT);
		$result->bindParam(":count",$count,PDO::PARAM_INT);
		$result->bindParam(":comments",$comments,PDO::PARAM_INT);
		$result->bindParam(":user_id",$user_id,PDO::PARAM_INT);

		return $result->execute();
    }

    public static function getOrderByID($id){
		$db = DB::getConnection();
		$sql = "SELECT * FROM Orders WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		$result->setFetchMode(PDO::FETCH_ASSOC);
		$result->execute();
		return $result->fetch();
	}
	public static function deleteOrder($id){
		$db = DB::getConnection();
		$sql = "DELETE FROM Orders WHERE id = :id";
		$result=$db->prepare($sql);
		$result->bindParam(":id",$id,PDO::PARAM_INT);
		return $result->execute();
	}
}
?>