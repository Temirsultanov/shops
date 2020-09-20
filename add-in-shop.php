<?php 
    session_start();   
    require('./config.php');
    $sql = 'SELECT * from productstemirsultanov where id=' . $_GET['id'];
    $result = $db->query($sql);
    $products = $result->fetchAll(PDO::FETCH_ASSOC);
    $product = $products[0];
    $product['count'] = 1;
    if (!$_SESSION['orders']) {
        $_SESSION['orders'] = [];
    } 
    $flagok = true;
    for ($p = 0; $p < count($_SESSION['orders']); $p++) {
        if ($_SESSION['orders'][$p]['id'] == $product['id']) {
            if ($_SESSION['orders'][$p]['count'] < 10) {
                $_SESSION['orders'][$p]['count'] = $_SESSION['orders'][$p]['count'] + 1;
            }
            $flagok = false;
        }
    }
    if ($flagok) {   
        array_push($_SESSION['orders'], $product);
    }
    header('Location: order.php')
?>
