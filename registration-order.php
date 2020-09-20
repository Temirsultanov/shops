<?php
    session_start();
    require('config.php');
    $sql = 'INSERT into customerstemirsultanov (customer_name, customer_phone, customer_address, customer_email) VALUES (:customer_name, :customer_phone, :customer_address, :customer_email)';
    $stmt = $db->prepare($sql);
    $stmt->bindValue(':customer_name', $_POST['name']);
    $stmt->bindValue(':customer_phone', $_POST['phone']);
    $stmt->bindValue(':customer_address', $_POST['address']);
    $stmt->bindValue(':customer_email', $_POST['email']);
    $stmt->execute();
    $sql = 'SELECT customer_id from customerstemirsultanov order by customer_id desc limit 1';
    $result = $db->query($sql);
    $line = $result->fetchAll(PDO::FETCH_ASSOC);
    $customer_id = $line[0]['customer_id'];
    foreach($_SESSION['orders'] as $order) {
        $sql = 'INSERT into orderstemirsultanov (customer_id, product_id, count) VALUES (:customer_id, :product_id, :count)';
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':customer_id', $customer_id);
        $stmt->bindValue(':product_id', $order['id']);
        $stmt->bindValue(':count', $order['count']);
        $stmt->execute();
    }
    $_SESSION['orders'] = [];
    header('Location: ordersuccess.php');
?>