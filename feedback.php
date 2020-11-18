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
        <p class="header__logo"><a href="index.php">MaxiSite</a></p>
        <p class="current_date">Сегодня <?php echo $today; ?></p>
        <nav class="navbar">
            <ul class="header__navigation">
                <li><a href="index.php">Главная</a></li>
                <li><a href="feedback.php">Отзывы</a></li>
                <li><a href="#">Регистрация</a></li> 
                <li><p>Привет: Макс</p></li>
            </ul>
        </nav>
        </div>
    </header>
    <div class="container">
        <main class="content">
            <!--
        <form class="form">
            <ul class="feedback_form">
                <li>
                    <label for="first-name">Имя</label>
                    <input type="text" id="first-name" placeholder="Введите имя">
                </li>
                <li>
                    <label for="last-name">Фамилия</label>
                    <input type="text" id="last-name" placeholder="Введите фамилию">
                </li>
                <li>
                    <label for="email">Почта</label>
                    <input type="email" id="email" placeholder="Введите почту">
                </li>
                <li>
                    <label for="message">Сообщение</label>
                    <textarea rows="6" id="message" placeholder="Введите сообщение"></textarea>
                </li>
                <li>
                    <button type="submit">Отправить</button>
                </li>
            </ul>
        </form>
-->

        </main>
    <aside class="aside">
        <div class="login">
            <form action="" method="POST" class="login_form">
                <label for="username">Логин</label>
                <input type="text" name="username" id="">
                <label for="password">Пароль</label>
                <input type="password" name="password" id="">
                <a href="#" class="login_btn">Логин</a>
            </form>
        </div>
    </aside>
    </div>
    <footer class="footer">
        <p>Max Panfilov 2020</p>
    </footer>
</body>
</html>