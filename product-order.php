<?php 
    session_start();
    // require('./config.php');
    // $sql = 'SELECT * from products';
    // $result = $db->query($sql);
    // $products = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="order">
    <h1>Сделать заказ</h1>
    <div class="orders">
        <?php
            foreach($_SESSION['orders'] as $product) {
               echo(
                   '
                   <div class="orders__item">
                        <div class="orders__item-left">
                            <div class="order__photo">
                                <img src="images/'.$product['img'].'" alt="">
                            </div>
                            <div class="order__info">
                                <h3 class="order__title">'.$product['name'].' '.$product['firm'].'</h3>
                                <h5 class="order__price">
                                '
                                .number_format($product['price'], 0, '', ' ') . ' $' .
                                '
                                </h5>
                                <div class="order-counter order-counter1">
                                <div class="counter-minus">
                                    <a href="minus.php?id='.$product['id'].'">-</a>
                                </div>
                                <div class="counter-count">
                                    <h6> '.$product['count'].'</h6>
                                </div>
                                <div class="counter-plus">
                                    <a href="plus.php?id='.$product['id'].'">+</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="orders__item-right">
                            <div class="order-counter order-counter2">
                                <div class="counter-minus">
                                    <a href="minus.php?id='.$product['id'].'">-</a>
                                </div>
                                <div class="counter-count">
                                    <h6> '.$product['count'].'</h6>
                                </div>
                                <div class="counter-plus">
                                    <a href="plus.php?id='.$product['id'].'">+</a>
                                </div>
                            </div>
                            <a href="delete-order.php?id='.$product['id'].'" class="order-delete">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z"/></svg>
                            </a>
                        </div>
                    </div>
                   '
               ); 
            }
        ?>
    </div>
    <?php 
        $total_price = 0;
        foreach($_SESSION['orders'] as $product) {
            $total_price+=$product['count'] * $product['price'];
        }
    ?>
    <h2 class="total-price">Итоговая цена: <?php echo(number_format($total_price, 0, '', ' ') . ' $'); ?></h2>
    <form action="registration-order.php" method="POST" class="order-form">
        <input name="name" type="text" placeholder="Имя:" required>
        <input name="phone" type="phone" placeholder="Телефон:" required>
        <input name="email" type="email" placeholder="Email:" required>
        <input name="address" type="text" placeholder="Адрес:" required>
        <input type="submit" value="Оформить заказ">
    </form>
</div>