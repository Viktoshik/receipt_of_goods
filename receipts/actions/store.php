<?php
/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';
$date = $_POST['date'];
$products_id = $_POST['products_id'];
$amount = $_POST['amount'];
$pdo->query("INSERT INTO receipts (date, products_id, amount) VALUES ('$date', '$products_id', '$amount')");
header('Location: /receipts/?id=' . $products_id);
