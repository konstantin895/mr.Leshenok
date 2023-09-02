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
    <?php
   session_start();
   $is_logged_in = isset($_SESSION['login']);
    if (!$is_logged_in) {
        header("Location: form_authorization.php");
    }
    ?>
        <section class="registration">
            <div class="container">
                <form id="registrationForm" method="post" action="answers.php" class="registration-wrapper">
                    <fieldset class="form-row double">
                        <div class="form-row-item">
                            <div>
                                <label for="surname">
                                    <span>Фамилия</span>
                                    <input type="text" id="surname" name="surname">
                                </label>
                            </div>
                            <div>
                                <label for="name">
                                    <span>Имя</span>
                                    <input type="text" id="name" name="name">
                                </label>
                            </div>
                        </div>
                    </fieldset>

                    <div class="form-row double">
                        <fieldset>
                            <label>Выберите время</label>
                            <div>
                                <input id="radio-1" type="radio" name="time" value = "9:00 - 10:00">
                                <label for="radio-1">9:00 - 10:00</label>
                            </div>
                            <div>
                                <input id="radio-2" type="radio" name="time" value = "10:30 - 11:30">
                                <label for="radio-2">10:30 - 11:30</label>
                            </div>
                            <div>
                                <input id="radio-3" type="radio" name="time" value = "12:00 - 13:00">
                                <label for="radio-3">12:00 - 13:00</label>
                            </div>
                            <div>
                                <input id="radio-4" type="radio" name="time" value = "13:30 - 14:30">
                                <label for="radio-4">13:30 - 14:30</label>
                            </div>
                            <div>
                                <input id="radio-5" type="radio" name="time" value = "15:00 - 16:00">
                                <label for="radio-5">15:00 - 16:00</label>
                            </div>
                            <div>
                                <input id="radio-6" type="radio" name="time" value = "16:30 - 17:30">
                                <label for="radio-6">16:30 - 17:30</label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <label>Выберите форму контроля</label>
                            <div>
                                <input id="radio-control-6" type="radio" name="control" value = "текст">
                                <label for="radio-control-6">текст</label>
                            </div>
                            <div>
                                <input id="radio-control-6" type="radio" name="control" value = "собеседование">
                                <label for="radio-control-6">собеседование</label>
                            </div>
                            <div>
                                <input id="radio-control-6" type="radio" name="control" value = "доклад">
                                <label for="radio-control-6">доклад</label>
                            </div>
                            <div>
                                <input id="radio-control-6" type="radio" name="control" value = "контрольная работа">
                                <label for="radio-control-6">контрольная работа</label>
                            </div>
                        </fieldset>
                    </div>
        
                    <div class="form-row double">
                        <fieldset>
                            <label for="select-lesson">Выберите предмет</label>
                            <select name="select-lesson" id="select-lesson">
                                <option value="Первый предмет">Первый предмет</option>
                                <option value="Второй передмет">Второй передмет</option>
                                <option value="Третий предмет">Третий предмет</option>
                                <option value="Четвертый предмет">Четвертый предмет</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <label>Проверить данные</label>
                            <button type="submit">Отправить</button>
                        </fieldset>
                    </div>
        
                    <fieldset class="form-row">
                        <label for="comment">Дополнительная информация</label>
                        <textarea 
                                name="comment" 
                                id="comment" 
                                cols="30" 
                                rows="10"
                                style="width: 100%;"
                            ></textarea>
                    </fieldset>
                </form>
                <button id="show-list-btn">Показать список</button>
                <div id="participants-list">
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
<script src="list.js"></script>
</html>