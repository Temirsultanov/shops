<?php
session_start();
if (!isset($_SESSION['login']) || !($_SESSION['login'] == 'on')) {
    header('Location: login.php');
}
require('config.php');
if (!isset($_POST['sale'])){
    $_POST['sale'] = 0;
}
if (!isset($_POST['new'])){
    $_POST['new'] = 0;
}
if (isset($_FILES['img']) && $_FILES['img']['tmp_name'] != '') {
    move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
    $img_name = $_FILES['img']['name'];
}
else{
    $img_name = 'placeholder.png';
}
$sql = 'INSERT into productstemirsultanov(name, firm, price, description, category, sale, new, img) values(:name, :firm, :price, :description, :category, :sale, :new, :img)';
$stmt = $db->prepare($sql);
$stmt->bindValue(':name', $_POST['name']);
$stmt->bindValue(':firm', $_POST['firm']);
$stmt->bindValue(':price', $_POST['price']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':category', $_POST['category']);
$stmt->bindValue(':sale', $_POST['sale']);
$stmt->bindValue(':new', $_POST['new']);
$stmt->bindValue(':img', $img_name);
$stmt->execute();
header('Location: admin-success.php');



?>
