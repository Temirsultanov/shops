<?php 
    $pageTitle = 'Главная страница';
    include('templates/_head.php');  
    require('config.php');
    $categoryName = 'pants';
?>

<section class="white">
    <?php 
        include('templates/_header.php'); 
        include('templates/_menu.php'); 
    ?>
    <div class="home">
        <h1>Брюки</h1>
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
            else if ($categoryName == 'vest') {
                $sql = 'SELECT * from productstemirsultanov where category="vest"';
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