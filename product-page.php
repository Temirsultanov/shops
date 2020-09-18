<?php 
    $pageTitle = 'Главная страница';
    include('templates/_head.php')  
?>
<section class="white">
    <?php 
        include('templates/_header.php'); 
        include('templates/_menu.php'); 
    ?>
    <div class="productpage">
        <h1>Брюки хлопковые DIOR</h1>
        <div class="productpage__body">
            <div class="productpage__img">
                <div class="productpage__wrap-image">
                    <img src="images/pants4.png" alt="">
                </div>
            </div>
            <div class="productpage__info">
                <h3 class="productpage__price">17 990 Р</h3>
                <a href="order.php" class="productpage__buy">Сделать заказ</a>
                <p class="productpage__desc">Прямые антрацитово-серые брюки вошли в летнюю к оллекцию 2020 года. Для пошива модели мастера Дома, основанного Кристианом Диором, использовали мягкий твил из шерсти Super 120S. За счет плотного кручения т волокон ткань получается легкой, гладкой и при этом прочной.</p>
            </div>
        </div>
    </div>
</section>
<?php include('templates/_footer.php') ?>