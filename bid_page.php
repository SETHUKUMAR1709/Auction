<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bid_page.css">
    <title>Document</title>
</head>
<body>
    <header>
        <a href="First_page.php">
        <img src="img\BID AUCTION 2.png" class="header_img">
        </a>
</header>
    <div class="upcoming_bids_items">
    <?php
    $catagory = ['Electronics', "Antique","Appliances",'Furniture',"Properties","Vehicles"];
    require_once "publish.db.php";
    foreach ( $catagory as $s ) {
        echo "<h1> $s </h1>";
        
            $query = "SELECT * FROM  publish_item WHERE catagory = '$s';";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $res = $stmt -> fetchALL(PDO::FETCH_ASSOC);
        ?>
        <div class="horizontal_scroll_items">
        <?php
          if (empty($res) == false) {
          	foreach ($res as $items) {  ?>
             <div class="bids" id=<?='bid' . $items["bid_id"] ?>> 
                <a href="bid_placement.php?product_id=<?=$items['bid_id']?>"> 
                <img class=".upcoming_bids_images" src="img/<?=$items['img_name']?>">
                <h3><?=$items['product_name']?></h3>
                <h4><?=$items['seller_name']?></h4>
                <p><?=$items['time']?></p>
            </a></div>   
             
          		
    <?php }}
    else{ ?>
        <p>No items</p>
    <?php };?>
    </div>
    <hr>
    <?php }
    ?>
    
    
    </div>
</body>
</html>