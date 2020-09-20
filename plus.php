<?php
    session_start();
    for ($j = 0; $j < count($_SESSION['orders']); $j++) {
        if ($_SESSION['orders'][$j]['id'] == $_GET['id']) {
            if ($_SESSION['orders'][$j]['count'] < 10) {
                $_SESSION['orders'][$j]['count'] = $_SESSION['orders'][$j]['count'] + 1;     
            }
        }
    }
    header('Location: order.php');
?>