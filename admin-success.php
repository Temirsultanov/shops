<?php 
    session_start();
    if (!isset($_SESSION['login']) || !($_SESSION['login'] == 'on')) {
        header('Location: login.php');
    }
    $pageTitle = 'Товар успешно добавлен!';
    include('templates/_head.php')  
?>
    <section class="white">
        <header class="header">
            <div class="header__logo">
                <h1 class="admin-title">Админ панель</h1>
            </div>
            <div class="header__menu">
                    <a href="index.php" class="menu__exit">
                        <img src="images/exit.svg" alt="">
                    </a>
            </div>
        </header>
        <div class="admin">
            <h2>Товар успешно добавлен!</h2>
            <div class="admin-success-links">
                <a class="link-in-home" href="admin.php">Добавить ещё товар</a>
                <a class="link-in-home" href="index.php">На главную</a>
            </div>
        </div>
    </section>
<?php include('templates/_footer.php') ?>