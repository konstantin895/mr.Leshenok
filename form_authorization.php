<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Регистрация на аттестацию</title>
</head>
<body>
    <header>
        <div class="header__top">
            <a class="logo" href="index.html">
                <img src="./images/logo.png" alt="logo">
            </a>
            <h1>Программные технологии Интернета</h1>
        </div>
        <ul class="header__nav">
            <li><a href="index.html">О себе</a></li>
            <li><a href="description.html">Резюме</a></li>
            <li><a href="registration.php">Записаться на аттестацию</a></li>
            <li><a href="form_authorization.php">Авторизация</a></li>
            <li><a href="logaut.php">Выход</a></li>
        </ul>
    </header>

    <main>
        <section class="registration">
            <div class="container">
                <form method="post"action="authorization_script.php" class="registration-wrapper1">
                    <fieldset class="form-row double">
                        <div class="form-row-item">
                            <div>
                                <label for="login">
                                    <span>Логин</span>
                                    <input type="text" id="login" name="login">
                                </label>
                                <label for="password">
                                    <span>Пароль</span>
                                    <input type="password" id="password" name="password">
                                </label>
                            </div>
                            <div>
                                <button type="submit">Авторизация</button>
                                <button type="submit" formaction="form_registration.php">Регистрация</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </section>
    </main>

    <footer>
        <div>
            <span>Сайт разработан ФИО, Copyright © 2023</span>
        </div>
        <div>
            <a href="#"><img src="./images/vk.png" alt="vkontakte"></a>
            <a href="#"><img src="./images/telegram.png" alt="telegram"></a>
            <a href="#"><img src="./images/github.png" alt="github"></a>
        </div>
    </footer>
</body>
</html>