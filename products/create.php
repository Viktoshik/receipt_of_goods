<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Добавление</title>
</head>
<body>
<form method="post" action="/products/actions/store.php">
    <input type="text" name="name" placeholder="Наименование">
    <input type="number" name="price" placeholder="Цена">
    <input type="text" name="article" placeholder="Артикул">
    <input type="submit" value="Сохранить">
</form>
</body>
</html>
