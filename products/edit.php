<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$product = $pdo->query("SELECT * FROM products WHERE id={$_GET['id']}")->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Редактировать</title>
</head>
<body>
<form action="/products/actions/update.php" method="post">
    <input type="hidden" name="id" value="<?= $product['id']?>">
    <input type="text" name="name" value="<?= $product['name']?>">
    <input type="price" name="price" value="<?= $product['price']?>">
    <input type="article" name="article" value="<?= $product['article']?>">
    <input type="submit" value="Сохранить">
</form>
</body>
</html>
