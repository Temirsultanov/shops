<?php
    session_start();
    $id = $_GET['id'];
    for ($c = 0; $c < count($_SESSION['orders']); $c++) {
        if ($_SESSION['orders'][$c]['id'] == $id) {
            $key = $c;
        }
    }
    unset($_SESSION['orders'][$key]);
    $_SESSION['orders'] = array_values($_SESSION['orders']);
    header('Location: order.php');
?>