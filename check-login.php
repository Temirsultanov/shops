<?php 
    session_start();
    $secretPassword = 'w';
    if ($_POST['password'] == $secretPassword) {
        $_SESSION['login'] = 'on';
        header('Location: admin.php');
    }
    else{
        header('Location: login.php');
    }
?>