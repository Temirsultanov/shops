<div class="product-card">
    <div class="card-top">
        <?php 
            if ($product['new']) {
                echo('<div class="card-top__new">Новинка</div>');
            }
            if ($product['sale']) {
                echo('<div class="card-top__new">Sale</div>');
            }
        ?>
        <div class="card-top__category">
            <?php 
                if ($product['category'] == 'pants') {
                    echo('Брюки');
                }
                if ($product['category'] == 'shirt') {
                    echo('Рубашка');
                }
                if ($product['category'] == 'suit') {
                    echo('Костюм');
                }
                if ($product['category'] == 'shoes') {
                    echo('Обувь');
                }
                
            ?>
        </div>
    </div>
    <div class="card-img">
        <img src="images/<? echo($product['img']);?>" alt="">
    </div>
    <div class="card-body">
        <h2 class="card-body__title"><? echo($product['name']); ?></h2>
        <h2 class="card-body__title"><? echo($product['firm']); ?></h2>
        <div class="card-body__price">
            <? echo(number_format($product['price'], 0, '', ' ') . ' $'); ?>
        </div>
        <div class="card-body__buttons">
            <a href="product-page.php?id=<? echo($product['id']); ?>" class="card-body__button">Подробнее</a>
            <a href="add-in-shop.php?id=<?php echo($product['id']); ?>" class="card-body__button">Купить</a>
        </div>
    </div>
</div>