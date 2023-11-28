<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$product_name = $_POST["product_name"];
$seller_name = $_POST["seller_name"];
// $product_img = $_POST["product_img"];
$caption = $_POST["caption"];
$price = $_POST["price"];
$img_name = $_FILES['image']['name'];
$img_size = $_FILES['image']['size'];
$tmp_name = $_FILES['image']['tmp_name'];
$error = $_FILES['image']['error'];

if ($error === 0) {
		if ($img_size > 500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: ./publish.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png","jfif"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
                try {
                    require_once "publish.db.php"; 
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'img/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                
                $query = "INSERT INTO chunk_item (product_Name,seller_name,caption,price,img_name) VALUES (?,?,?,?,?);";
            
                $stmt = $pdo->prepare($query);
            
                $stmt->execute([$product_name,$seller_name,$caption,$price,$new_img_name]);                
                $pdo = null;
                $stmt = null;
                header("LOCATION: ./publish.php");
                die();
                
                
                }catch (PDOException $e){
                    die("Query failed: " . $e->getMessage());
                }
				
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ./publish.php?error=$em");
			}

}
}
}else{
    header("LOCATION: ./publish.php");
}