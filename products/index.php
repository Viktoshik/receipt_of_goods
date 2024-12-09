<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$products = $pdo->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
</head>
<body>
    <table>
        <tr>
            <td>#</td>
            <td>Наименование</td>
            <td>Цена</td>
            <td>Артикул</td>
        </tr>
        <?php foreach ($products as $product) : ?>
            <tr>
                <td><?= $product['id']?></td>
                <td><?= $product['name']?></td>
                <td><?= $product['price']?></td>
                <td><?= $product['article']?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>