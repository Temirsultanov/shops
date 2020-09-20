<?php 
    $categoryName = $_GET['category'];
    if (!$categoryName) {
        $categoryName = 'Все товары';
        $pageTitle = 'Temirsultanov - ' . $categoryName;
    }
    if ($categoryName == 'pants') {
        $pageTitle = 'Temirsultanov - Брюки';
    }
    if ($categoryName == 'shirt') {
        $pageTitle = 'Temirsultanov - Рубашки';
    }
    if ($categoryName == 'suit') {
        $pageTitle = 'Temirsultanov - Костюмы';
    }
    if ($categoryName == 'shoes') {
        $pageTitle = 'Temirsultanov - Обувь';
    }
    
    include('templates/_head.php');  
    require('config.php');    
?>

<section class="white">
    <?php 
        include('templates/_header.php'); 
        include('templates/_menu.php'); 
    ?>
    <div class="home">
        <?php 
            if ($categoryName == 'pants') {
                echo('<h1>Брюки</h1>');
            }
            else if ($categoryName == 'shirt') {
                echo('<h1>Рубашки</h1>');
            }
            else if ($categoryName == 'suit') {
                echo('<h1>Костюмы</h1>');
            }
            else if ($categoryName == 'shoes') {
                echo('<h1>Обувь</h1>');
            }
            else{
                echo('<h1>Все товары</h1>');
            }
            
        ?>
        <div class="product-cards">
        <?php 
            if ($categoryName == 'pants') {
                $sql = 'SELECT * from productstemirsultanov where category="pants"';
            }
            else if ($categoryName == 'shirt') {
                $sql = 'SELECT * from productstemirsultanov where category="shirt"';
            }
            else if ($categoryName == 'suit') {
                $sql = 'SELECT * from productstemirsultanov where category="suit"';
            }
            else if ($categoryName == 'shoes') {
                $sql = 'SELECT * from productstemirsultanov where category="shoes"';
            }
            else{
                $sql = 'SELECT * from productstemirsultanov';
            }
            $result = $db->query($sql);
            $products = $result->fetchAll(PDO::FETCH_ASSOC);	
            
            foreach($products as $product) {
                include('./templates/_product-item.php');
            }
        ?>
        </div>
    </div>
</section>
<?php include('templates/_footer.php') ?>