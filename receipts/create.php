<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавить</title>
</head>
<body>
<form method="post" action="/receipts/actions/store.php">
    <input type="date" name="date">
    <input type="hidden" name="products_id" value="<?= $_GET['id']?>">
    <input type="number" name="amount" placeholder="Количество">
    <input type="submit" value="Сохранить">
</form>
</body>
</html>
