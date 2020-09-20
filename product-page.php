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
            <?php echo($product['name'] .' ' . $product['firm']); ?>
        </h1>
        <div class="productpage__body">
            <div class="productpage__img">
                <div class="productpage__wrap-image">
                    <img src="images/<? echo($product['img']); ?>" alt="">
                </div>
            </div>
            <div class="productpage__info">
                <h3 class="productpage__price">
                <? echo(number_format($product['price'], 0, '', ' ') . ' $'); ?>
                </h3>
                <a href="add-in-shop.php?id=<? echo($product['id']); ?>" class="productpage__buy">Сделать заказ</a>
                <p class="productpage__desc">
                    <?php echo($product['description']); ?>
                </p>
            </div>
        </div>
    </div>
</section>
<?php include('templates/_footer.php') ?>