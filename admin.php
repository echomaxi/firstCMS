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
                        <li><p>Привет:<a href="admin.php">Гость</a></p></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <aside>
            <ul>
                <li>Пользователи</li>
                <li>Категории</li>
                <li>Статьи</li>
            </ul>
        </aside>
        <main>

        </main>
    </div>
    <footer class="footer">
        <p>Max Panfilov 2020</p>
    </footer>
</body>
</html>