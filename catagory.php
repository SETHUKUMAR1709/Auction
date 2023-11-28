<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="catagory.css">
</head>
<body>
    <?php session_start();
    ?>
    
    <header>
    <a href="index.php">
        <img src="img/BID AUCTION 2.png" class="header_img">
    </a>
    </header>
    
    <div class="items">
        <?php
        
        $catagory = $_GET["catagory_input"];
        echo "<h1>Catagory : $catagory</h1>";
        catagory_item($catagory);
        
        ?>
    <?php
    function catagory_item($catagory){ 
            require_once "publish.db.php";
            $query = "SELECT * FROM publish_item WHERE catagory = '$catagory';";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $res = $stmt -> fetchALL(PDO::FETCH_ASSOC);
          if (empty($res) == false) {
          	foreach ($res as $items) {  ?>             
                 
            <div class="wrap">
            <a href="bid_placement.php?product_id=<?=$items['bid_id']?>">
            <img class="Elec" src="img/<?=$items['img_name']?>">
            <h1><?=$items['product_name']?></h1>
            <h3><?=$items['seller_name']?></h3>
            <h3><?=$items['time']?></h3>
            <div class="pa">
                <p><?=$items['caption']?></p>
            </div>
            </a>
            </div>
            
    <?php }} 
    else{?>
        <p>No items</p>
    <?php }}
    // unset($_SESSION["catagory_input"]);
    ?>
    </div>
</body>
</html>