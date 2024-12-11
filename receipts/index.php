<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$id = $_GET['id'];
$receipts = $pdo->query("SELECT * FROM receipts WHERE products_id = '$id'")->fetchAll(PDO::FETCH_ASSOC);
$product = $pdo->query("SELECT * FROM products WHERE id = '$id'")->fetch();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Поступления</title>
</head>
<style>
    table, td{
     padding: 2px;
        border: 1px solid #000;
        border-collapse: collapse;
    }
</style>
<body>
<a href="/products/">Назад</a>
<h1>Поступление товара <?= $product ['name']?></h1>
<table>
    <tr>
        <td>#</td>
        <td>Дата</td>
        <td>Количество</td>
    </tr>

    <?php foreach ($receipts as $receipt): ?>

        <tr>
            <td><?= $receipt['id']?></td>
            <td><?= $receipt['date']?></td>
            <td><?= $receipt['amount']?></td>
            <td><a href="/receipts/edit.php?id=<?= $receipt['id']?>&product_id=<?= $id ?>">Изменить</a></td>
            <td><a href="/receipts/actions/delete.php?id=<?= $receipt['id']?>&product_id=<?= $id ?>">Удалить</a></td>
        </tr>
    <?php endforeach;?>
    <a href="/receipts/create.php?id=<?= $product['id']?>">Добавить</a>
</table>
</body>
</html>