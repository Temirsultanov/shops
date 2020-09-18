<?php 
    $pageTitle = 'Главная страница';
    include('templates/_head.php')  
?>

<section class="white">
    <?php 
        include('templates/_header.php'); 
        include('templates/_menu.php'); 
    ?>
    <div class="home">
        <h1>Брюки</h1>
        <div class="product-cards">
            <?php include('templates/_product-item.php'); ?>
        </div>
    </div>
</section>
<?php include('templates/_footer.php') ?>