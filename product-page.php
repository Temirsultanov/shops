<?php 
    require('./config.php');
    $sql = 'SELECT * from productstemirsultanov where id=' . $_GET["id"];
	$result = $db->query($sql);
	$products = $result->fetchAll(PDO::FETCH_ASSOC);
    $product = $products[0]; 
    $pageTitle = $product['name'] .' -  '. $product['firm'];
    include('templates/_head.php');
?>
<section class="white">
    <?php 
        include('templates/_header.php'); 
        include('templates/_menu.php'); 
    ?>
    <div class="productpage">
        <h1>
            <?php echo($product['name'] .' <span class="productpage__firm">' . $product['firm'] . ' </span>');  ?>
        </h1>
        <div class="productpage__body">
            <div class="productpage__img">
                <div class="productpage__wrap-image">
                    <a href="images/<? echo($product['img']); ?>" data-fancybox="gallery">
                        <img src="images/<? echo($product['img']); ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="productpage__info">
                <div class="productpage__buyprice">
                <h3 class="productpage__price">
                <? echo(number_format($product['price'], 0, '', ' ') . ' $'); ?>
                </h3>
                <a href="add-in-shop.php?id=<? echo($product['id']); ?>" class="productpage__buy">Сделать заказ</a>
                </div>
                <p class="productpage__desc">
                    <?php echo($product['description']); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php include('templates/_footer.php') ?>