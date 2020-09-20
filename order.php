<?php 
    session_start();
    $pageTitle = 'Сделать заказ';
    include('templates/_head.php')  
?>
<section class="white">
    <?php 
        include('templates/_header.php'); 
        include('templates/_menu.php'); 
        if ($_SESSION['orders']) {
            include('product-order.php');
        }
        else{
            echo('
            <div class="order0">
                <h1>В корзине 0 товаров :(</h1>
                <a class="link-in-home" href="index.php">Перейти в каталог</a>
            </div>
            ');
        }
    ?>
</section>
<?php include('templates/_footer.php') ?>