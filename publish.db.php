<?php
$dsn = "mysql:host=localhost;dbname=bid_auction" ;
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connection success";
} catch (PDOException $e) {
    echo "connection failed: " . $e->getMessage();
}
?>