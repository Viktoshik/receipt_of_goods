<?php
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$product_id = $_POST['product_id'];
$id = $_POST['id'];
$date = $_POST['date'];
$amount = $_POST['amount'];

$pdo->query("UPDATE receipts SET date = '$date', amount = '$amount' WHERE id = '$id'");
header('Location: /receipts/?id=' . $product_id);
