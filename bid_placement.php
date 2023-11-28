<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlaceBids</title>
    <link rel="stylesheet" href="bid_placement.css">
</head>
<body>
    <?php 
    session_start()?>
    <header>
        <a href="First_page.php">
        <img src="img\BID AUCTION 2.png" class="header_img">
        </a>
    </header>
    <?php 
            $id=$_GET['product_id'];
            require_once "publish.db.php";
            $query = "SELECT * FROM  publish_item WHERE bid_id = $id;";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $res = $stmt -> fetchALL(PDO::FETCH_ASSOC);

          if (empty($res) == false) {
          	$items = $res[0] ?>

             <div class="bids">
                <img class="upcoming_bids_images" src="img/<?=$items['img_name']?>">

                <div class="desc">
                <h3><?=$items['product_name']?></h3>
                <h4><?=$items['seller_name']?></h4>
                <h4><?=$items['time']?></h4>
                <h4>Min-Bids : <?=$items['Min-Price']?>rup</h4>
                <h5><?=$items['caption']?></h5>
                </div>

                <div class="buttons">
                    <button><a href="#">BUY ITEM</a></button>
                </div>
                
            </div>    
             
          		
    <?php } 
    else{?>
        <p>No item Found</p>
    <?php }
    session_unset();
    ?>
</body>
</html>