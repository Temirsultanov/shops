<ul class="menu">
    <li class="wow fadeIn menu__item <?php if ($categoryName == 'Все товары') {echo('menu__item-active');}; ?>"><a href="index.php">Все товары</a></li>
    <li class="menu__item wow fadeIn <?php if ($categoryName == 'pants') { echo(' menu__item-active'); }; ?>"><a href="index.php?category=pants">Брюки</a></li>
    <li class="menu__item wow fadeIn <?php if ($categoryName == 'shirt') { echo(' menu__item-active'); }; ?>"><a href="index.php?category=shirt">Рубашки</a></li>
    <li class="menu__item wow fadeIn <?php if ($categoryName == 'suit') { echo(' menu__item-active'); }; ?>"><a href="index.php?category=suit">Костюмы</a></li>
    <li class="menu__item wow fadeIn <?php if ($categoryName == 'shoes') { echo(' menu__item-active'); }; ?>"><a href="index.php?category=shoes">Обувь</a></li>
</ul>
<ul class="menu-mobile">
    <li class="menu__item <?php if ($categoryName == 'Все товары') {echo('menu__item-active');}; ?>"><a href="index.php">Все товары</a></li>
    <li class="menu__item <?php if ($categoryName == 'pants') { echo('menu__item-active'); }; ?>"><a href="index.php?category=pants">Брюки</a></li>
    <li class="menu__item <?php if ($categoryName == 'shirt') { echo('menu__item-active'); }; ?>"><a href="index.php?category=shirt">Рубашки</a></li>
    <li class="menu__item <?php if ($categoryName == 'suit') { echo('menu__item-active'); }; ?>"><a href="index.php?category=suit">Костюмы</a></li>
    <li class="menu__item <?php if ($categoryName == 'shoes') { echo('menu__item-active'); }; ?>"><a href="index.php?category=shoes">Обувь</a></li>
    <li class="menu__item"><a href="order.php">Корзина</a></li>
</ul>