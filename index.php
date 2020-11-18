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
                <p class="navbar_date">Сегодня <?php echo $today; ?></p>
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
        <main class="content">
            <article class="article">
                <div class="article__data">
                    <img src="/images/elephant.jpg" alt="">
                    <p class="article__author">Автор: Max Panfilov</p>
                    <p class="article__date">Дата публикации: 12.11.2020</p>
                </div>
                <div class="article__info">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime id corrupti, eligendi fugit ipsa, porro fugiat voluptates molestiae eum esse fuga animi repellendus optio cumque, maiores perspiciatis facilis sint ipsam.
                    </p>
                    <a href="#" class="article__btn">Подробнее</a>
                </div>
            </article>
            <hr>
            <article class="article">
                <div class="article__data">
                    <img src="/images/elephant.jpg" alt="">
                    <p class="article__author">Автор: Max Panfilov</p>
                    <p class="article__date">Дата публикации: 12.11.2020</p>
                </div>
                <div class="article__info">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime id corrupti, eligendi fugit ipsa, porro fugiat voluptates molestiae eum esse fuga animi repellendus optio cumque, maiores perspiciatis facilis sint ipsam.
                    </p>
                    <a href="#" class="article__btn">Подробнее</a>

                </div>
            </article>
            <hr>
            <article class="article">
                <div class="article__data">
                    <img src="/images/elephant.jpg" alt="">
                    <p class="article__author">Автор: Max Panfilov</p>
                    <p class="article__date">Дата публикации: 12.11.2020</p>
                </div>
                <div class="article__info">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime id corrupti, eligendi fugit ipsa, porro fugiat voluptates molestiae eum esse fuga animi repellendus optio cumque, maiores perspiciatis facilis sint ipsam.
                    </p>
                    <a href="#" class="article__btn">Подробнее</a>
                </div>
            </article>
            <hr>
        </main>
    </div>
    <footer class="footer">
        <p>Max Panfilov 2020</p>
    </footer>
</body>
</html>