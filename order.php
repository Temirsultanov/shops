<?php 
    $pageTitle = 'Сделать заказ';
    include('templates/_head.php')  
?>
<section class="white">
    <?php 
        include('templates/_header.php'); 
        include('templates/_menu.php'); 
    ?>
    <!-- <div class="order0">
        <h1>В корзине 0 товаров :(</h1>
        <a class="link-in-home" href="index.php">Перейти в каталог</a>
    </div> -->
    <div class="order">
        <h1>Сделать заказ</h1>
        <div class="orders">
            <div class="orders__item">
                <div class="orders__item-left">
                    <div class="order__photo">
                        <img src="images/pants3.png" alt="">
                    </div>
                    <div class="order__info">
                        <h3 class="order__title">Брюки шерстяные HUGO</h3>
                        <h5 class="order__price">14 000 Р </h5>
                    </div>
                </div>
                <div class="orders__item-right">
                    <div class="order-counter">
                        <div class="counter-minus">
                            <a href="">-</a>
                        </div>
                        <div class="counter-count">
                            <h6>1</h6>
                        </div>
                        <div class="counter-plus">
                            <a href="">+</a>
                        </div>
                        
                    </div>
                    <a href="" class="order-delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                    </a>
                </div>
            </div>
            <div class="orders__item">
                <div class="orders__item-left">
                    <div class="order__photo">
                        <img src="images/pants4.png" alt="">
                    </div>
                    <div class="order__info">
                        <h3 class="order__title">Брюки хлопковые DIOR </h3>
                        <h5 class="order__price">17 990 Р </h5>
                    </div>
                </div>
                <div class="orders__item-right">
                    <div class="order-counter">
                        <div class="counter-minus">
                            <a href="">-</a>
                        </div>
                        <div class="counter-count">
                            <h6>1</h6>
                        </div>
                        <div class="counter-plus">
                            <a href="">+</a>
                        </div>
                        
                    </div>
                    <a href="" class="order-delete">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <h2 class="total-price">Итоговая цена: 31 990 Р</h2>
        <form action="ordersuccess.php" class="order-form">
            <input type="text" placeholder="Имя:">
            <input type="phone" placeholder="Телефон:">
            <input type="email" placeholder="Email:">
            <input type="text" placeholder="Адрес:">
            <input type="submit" value="Оформить заказ">
        </form>
    </div>
</section>
<?php include('templates/_footer.php') ?>