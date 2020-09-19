<?php 
    session_start();
    if (!isset($_SESSION['login']) || !($_SESSION['login'] == 'on')) {
        header('Location: login.php');
    }
    $pageTitle = 'Главная страница';
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
            <h2>Добавить товар</h2>
            <form action="add-new.php" method="POST"enctype="multipart/form-data" class="addproduct-form">
                <div class="input-block">
                    <input name="name" type="text" placeholder="Название:">
                </div>
                <div class="input-block">
                    <input name="firm" type="text" placeholder="Фирма:">
                </div>
                <div class="input-block">
                    <select name="category" >
                        <option value="pants">Брюки</option>
                        <option value="shirt">Рубашки</option>
                        <option value="suit">Костюмы</option>
                        <option value="vest">Жилеты</option>
                    </select>
                </div>
                <div class="input-block">
                    <input name="price" type="text" placeholder="Цена:">
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" value="1" id="new" name="new">
                    <label for="new">Новинка</label>
                    <input type="checkbox" value="1" id="sale" name="sale">
                    <label for="sale">Распродажа</label>
                </div>
                <div class="photo-form">
                    <h5 >Фото:</h5>
                    <label for="photo">Выберите файл<input id="photo" name="img" type="file"></label>
                </div>
                <div class="input-block">
                    <label for="description">Описание:</label>
                    <textarea name="description" id="description" cols="" rows="" placeholder=""></textarea>
                </div>
                <button class="addform-button" type="submit">Добавить</button>
            </form>
            <h2>Таблица товаров</h2>
            <table class="product-table">
                <tr>
                    <th>Id</th>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Новинка</th>
                    <th>Скидка</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Брюки хлопковые DIOR</td>
                    <td>17990</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Брюки хлопковые
                        Stone Island</td>
                    <td>17400</td>
                    <td>1</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Брюки шерстяные
                        HUGO</td>
                    <td>57050</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Брюки шерстяные
                        Dior </td>
                    <td>17990</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Брюки классическиe
                        Tom Ford</td>
                    <td>16980</td>
                    <td>0</td>
                    <td>0</td>
                </tr>
            </table>
            <h2>Введите SQL-запрос:</h2>
            <form action="admin.php" class="sql-form">
                <div class="input-block">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your SQL-query:"></textarea>
                </div>
                <button  class="addform-button" type="submit">Отправить</button>
            </form>
        </div>
    </section>
<?php include('templates/_footer.php') ?>