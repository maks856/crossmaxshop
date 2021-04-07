<?php session_start();?>
<!DOCTYPE html>
<html lang="ua">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Онлайн магазин</title>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="shortcut icon" href="../src/favicon.ico" type="image/x-icon">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../scripts/scrollUp.js"></script>
    <script src="../scripts/jquery.js"></script>
    <script src="../scripts/site.js"></script>
</head>
<body>
    <header>
        <div id="top">

            <img id="logo" alt="Logo" src="../src/logo.png">

            <form id="search" action="">
                <button class="search" id="si"><img alt="searchIcon" src="../src/search.svg"></button>
                <label><input class="search text" type="text" placeholder="Пошук товару..." name="search"></label>
            </form>

            <p class="text" id="phoneNumber">+38(099)-056-82-23</p>

            <div id="icons">
                <button class="icon"><img alt="trolleyIcon" src="../src/trolley.svg"></button>
                <button class="icon" onclick="window.location.href=''"><img alt="trolleyIcon" src="../src/user.svg"></button>
            </div>

        </div>

        <div>
            <div id="nav">
                <a class="text links" href="../index.php">ГОЛОВНА</a>
                <a class="text links" href="../index.php?page=man`s">ЧОЛОВІЧІ</a>
                <a class="text links" href="../index.php?page=woman`s">ЖІНОЧІ</a>
                <a class="text links" href="../index.php?page=kid`s">ДИТЯЧІ</a>
                <a class="text links" href="../index.php?page=blog">БЛОГ</a>
                <a class="text links" href="#footerContent">КОНТАКТИ</a>
            </div>
        </div>
    </header>

    <div id="log">
        <div id="logIn">
            <form class="formLogIn" method="post">
                <p class="text">Реєстрація</p>
                <label>
                    <input type="text" name="username" class="inputField"
                           placeholder="Ім'я" required>
                </label>
                <label>
                    <input type="email" name="email" class="inputField"
                           placeholder="Електронна пошта" required>
                </label>
                <label>
                    <input type="password" name="password" class="inputField"
                           placeholder="Пароль" required>
                </label>
                <button class="logButton" type="submit">Зареєструватись</button>
            </form>
            <?php
            require '../connect.php';
            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];

                $query = "INSERT INTO users (username, email, password)
        VALUES ('$username', '$email', '$password')";
                $result = mysqli_query($connect, $query);?>

                <?php if ($result):?>
                <p class="text">Реєстрація пройшла успішно</p>
                <?php else:?>
                <p class="text">Помилка</p>
                <?php endif;}?>

        </div>

        <div id="logIn">
            <form class="formLogIn" method="post">
                <p class="text">Увійти</p>
                <label>
                    <input type="text" name="username" class="inputField"
                           placeholder="Ім'я" required>
                </label>
                <label>
                    <input type="password" name="password" class="inputField"
                           placeholder="Пароль" required>
                </label>
                <button class="logButton" type="submit">Увійти</button>
            </form>
            <?php

            if(isset($_POST['username']) && isset($_POST['password'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";
                $result = mysqli_query($connect, $query) or die(mysqli_error($connect));
                $count = mysqli_num_rows($result);

                if($count == 1) {
                    $_SESSION['username'] = $username;
                }else {
                    echo "<p class='text'>Помилка</p>";
                }
            }

            if(isset($_SESSION['username'])){
                $_GET['username'] = $_SESSION['username'];
                echo "<p class='text'>Ви увійшли</p>";
                echo "<button class='logButton' onclick=window.location.href='logout.php'>Вийти</button>";
            }?>
        </div>
    </div>

    <footer>
        <div id="footerContent">
            <form id="mailInput">
                <label><input class="input text" type="text"
                              placeholder="Введіть свою електронну адресу" name="mailInput"></label>
            </form>
            <div id="social">
                <button class="social"><img alt="instagramIcon" src="../src/instagram.svg"></button>
                <button class="social"><img alt="facebookIcon" src="../src/facebook.svg"></button>
                <button class="social"><img alt="twitterIcon" src="../src/twitter.svg"></button>
                <button class="social"><img alt="telegramIcon" src="../src/telegram.svg"></button>
                <button class="social"><img alt="linkedinIcon" src="../src/linkedin.svg"></button>
                <button class="social"><img alt="googleIcon" src="../src/google.svg"></button>
            </div>
            <hr id="footerLine">
            <p class="text">©2021 Web development</p>

        </div>
    </footer>
</body>
</html>
