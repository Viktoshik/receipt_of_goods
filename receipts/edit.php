<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$receipts = $pdo->query("SELECT * FROM receipts WHERE id={$_GET['id']}")->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Поступление</title>
</head>
<body>
<form action="/receipts/actions/update.php" method="post">
    <input type="hidden" name="product_id" value="<?= $_GET['product_id'] ?>">
    <input type="hidden" name="id" value="<?= $receipts['id']?>">
    <input type="date" name="date" value="<?= $receipts['date']?>">
    <input type="number" name="amount" value="<?= $receipts['amount']?>">
    <input type="submit" value="Сохранить">
</form>
</body>
</html>