<?php

/** @var PDO $pdo */
$pdo = require $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$product_id = $_GET['product_id'];
$id = $_GET['id'];
$pdo->query("DELETE FROM receipts WHERE id = '$id'");

header('Location: /receipts/?id=' . $product_id);