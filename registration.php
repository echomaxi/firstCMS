<?php
$today = date('D d M Y');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>CMS</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="navbar">
                <p class="navbar__logo"><a href="index.php">MaxiSite</a></p>
                <p class="navbar__date">Сегодня <?php echo $today; ?></p>
                <nav>
                    <ul class="navbar__navigation">
                        <li><a href="index.php">Главная</a></li>
                        <li><a href="registration.php">Регистрация</a></li> 
                        <li><p>Привет:<a href="admin.php">Гость</a></p></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="wrapper">
            <form action="" method="POST" class="login_form">
                <label for="username">Логин</label>
                <input type="text" name="username">
                <label for="password">Пароль</label>
                <input type="password" name="passowrd">
                <button type="submit">Логин</button>
            </form>
            
        </div>
        <hr>
    </div>
    <div class="container">
        <div class="wrapper">
            <p>Если у Вас еще нету аккаунда, воспользуйтесь регистрационной формой ниже.</p>
            <form action="#" method="POST" class="reg_form">
                <div class="form__item">
                    <label for="username">Имя Пользователя</label>
                    <input type="text" name="username">
                </div>
                <div class="form__item">
                    <label for="firstname">Имя</label>
                    <input type="text" name="firstname">
                </div>
                <div class="form__item">
                    <label for="lastname">Фамилия</label>
                    <input type="text" name="lastname">
                </div>
                <div class="form__item">
                    <label for="email">Почта</label>
                    <input type="email" name="email">
                </div>
                <div class="form__item">
                    <label for="image">Аватарка</label>
                    <input type="file" name="image">
                </div>
                <div class="form__item">
                    <button>Отправить</button>
                </div>
            </form>
        </div>
    </div> 
    <footer class="footer">
        <p>Max Panfilov 2020</p>
    </footer>
</body>
</html>