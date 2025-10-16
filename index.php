<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая работа</title>
</head>
<body>
    <form action="reg.php" method = "POST">
        <input type="text" name="login" placeholder="логин">
        <input type="text" name="password" placeholder="пароль">
        <input type="submit" value="Регистрация">
    </form>
    <form action="user_list.php">
        <input type="submit" value="Показать всех пользователей">
    </form>
    <form action="goods_list.php">
        <input type="submit" value="Показать все товары">
    </form>
</body>
</html>