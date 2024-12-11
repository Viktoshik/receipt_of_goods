<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$products = $pdo->query("SELECT
products.*,
SUM(receipts.amount) AS amount
FROM receipts
RIGHT JOIN products ON receipts.products_id = products.id
GROUP BY products.id")->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Товары</title>
</head>
<style>
    table, td{
        padding: 2px;
        border: 1px solid #000;
        border-collapse: collapse;
    }
</style>
<body>
    <table>
        <tr>
            <td>#</td>
            <td>Наименование</td>
            <td>Цена</td>
            <td>Артикул</td>
            <td>Количество на складе</td>
        </tr>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?= $product['id']?></td>
                <td><?= $product['name']?></td>
                <td><?= $product['price']?></td>
                <td><?= $product['article']?></td>
                <td><?= $product['amount']?></td>
                <td><a href="/receipts/?id=<?= $product['id']?>">Подробнее</a></td>
                <td><a href="/products/edit.php?id=<?= $product['id']?>">Изменить</a></td>
                <td><a href="/products/actions/delete.php?id=<?= $product['id']?>">Удалить</a></td>

            </tr>
        <?php endforeach;?>
        <a href="/products/create.php">Добавить</a>
    </table>
</body>
</html>