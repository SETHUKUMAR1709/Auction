<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="First_page.css">
    <title>BidsAuction</title>
</head>


<body>
<nav class="navbar">
<?php 
    session_start() ?>
                <div class="logo"><a href="#"><img src="img\BID AUCTION 2.png"></a></div>
                <ul>
                    <li class="list"><a href="index.php">Home</a></li>
                    <li class="list"><a href="about us.php">Contacts</a></li>
                    <li class="list"><a href="#catagories">Biding Categories</a></li>
                    <li class="list"><a href="feedback.php.php">Feedback</a></li>
                    
                    
                    <button><a href="BidAuction(Login Page).php?error= " target="_blank">Login</a></button>
                        
                    
                        <!-- <button><a href="BidAuction(Login Page).php?error=none " target="_blank">Login</a></button> -->
                     

                    </ul>
            </div>
        </nav>
    
    
    <div class="contents">
        <div class="topics">
            <div class="icons">
                <img src="secondary logo.jpg" class="img_icons">
                <a href="http://localhost/auction/publish.php">Publish Your Item</a>
            </div>
            
            <div class="icons">
                <img src="Secondary logo.jpg" class="img_icons">
                <a href="bid_page.php" target="_blank">Bid On Items</a>
            </div>
        </div>
        <!--live auctions and upcoming biddings-->
        <hr>
        <div class="upcoming_bids">
            <h2>Upcoming Bids</h2>
        <div class="upcoming_bids_items"> 
             
            <?php 
            require_once "publish.db.php";
            $query = "SELECT * FROM  publish_item GROUP BY time";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $res = $stmt -> fetchALL(PDO::FETCH_ASSOC);

          if (empty($res) == false) {
          	foreach ($res as $items) {  ?>
             <div class="bids" id=<?='bid' . $items["bid_id"] ?>> 
                <a href="bid_placement.php?product_id=<?=$items['bid_id']?>"> 
                <img class=".upcoming_bids_images" src="img/<?=$items['img_name']?>">
                <h1><?=$items['product_name']?></h1>
                <h3><?=$items['seller_name']?></h3>
                <h3><?=$items['time']?></h3>
                
            </a></div>
             
          		
    <?php }} 
    else{?>
        <p>No items</p>
    <?php }
    ?>
    </div>
        </div>
        <hr>
    </div>




        <div class="catagories" id="catagories"><?php
        $catagory = ['Electronics', "Antique","Appliances",'Furniture',"Properties","Vehicles"];
        foreach ( $catagory as $s ) {  ?>
             <label><a href="http://localhost/auction/catagory.php?catagory_input=<?=$s?>" target="_blank" ><?=$s?></a></label>
             </a> 
            <?php }?>
    </div>




        <hr>
        <div class="chunks">
            <h2>Chunks</h2>
            <div class="chunks_list">
            <?php 
            require_once "publish.db.php";
            $query = "SELECT * FROM  chunk_item";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $res = $stmt -> fetchALL(PDO::FETCH_ASSOC);

          if (empty($res) == false) {
          	foreach ($res as $items) {  ?>
             <div class="bids" id<?='bid' . $items["chunk_id"] ?>><a href="buy_chunk.php?chunk_id=<?=$items['chunk_id']?>"> <img src="img/<?=$items['img_name']?>">
                <h3><?=$items['product_name']?></h3>
                <h4><?=$items['seller_name']?></h4>
                <p><?=$items['caption']?></p>
                <h4>Rupees <?=$items['price']?></h4>
            </a></div>   
             
          		
    <?php }} 
    else{?>
        <p>No items</p>
    <?php }?>
            </div>
        </div>
        <hr>
    </div>
    <footer>
        <p>&copy; TEAM SSTP</p>
        <p><a href="mailto:sethukumars774@gmail.com">email</a></p>
        <p><a href="tel:+919360181828">contacts</a></p>
    </footer>
    <!-- <script src="First_page.js"></script> -->
</body>

</html>