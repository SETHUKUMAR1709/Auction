<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$user = strtolower($_POST["user"]);
$pass = $_POST["pass"];

session_start();

		
    require_once "publish.db.php";
    $query = "SELECT * FROM  user_details WHERE user_name='$user';";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $res = $stmt -> fetchALL(PDO::FETCH_ASSOC);

  if (empty($res) == false) {
      foreach ($res as $details) {  
                $user_pass= $details["password"];
                if ($pass == $user_pass){
                try {
                                  
                $_SESSION["user"]=$user;   
                $pdo = null;
                $stmt = null;
                header("LOCATION: ./index.php");
                die();
                
                
                }catch (PDOException $e){
                    die("Query failed: " . $e->getMessage());
                }
				
			}else {
                $em="Password Incorrect!";
		        header("Location: ./BidAuction(Login Page).php?error=$em");
			}
		}
	}else {
		$em = "Invalid User Id!";
		header("Location: ./BidAuction(Login Page).php?error=$em");
	}
}else{
    header("LOCATION: ./BidAuction(Login Page).php?");
}
?>