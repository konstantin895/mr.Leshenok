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
<?php
session_start(); 
$userid = $_SESSION['userid'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $time = $_POST['time'];
    $control = $_POST['control'];
    $select_lesson = $_POST['select-lesson'];
    $comment = $_POST['comment'];
    $text = "$surname  $name  $time  $control $select_lesson.";
}

?>
<main>
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <p>Уважаемый <?php echo $surname . ' ' . $name; ?>!
         Ждем вас на экзамен по <?php echo $select_lesson; ?> в <?php echo $time; ?>.
         Экзамен пройдет в форме <?php echo $control; ?>.
         <?php echo (!$comment) ? '' : "Спасибо за комментарий: {$comment}"; ?>
      <div>
      <form action="registration.php">
      <input type="submit" value="Подтвердить запись" />
       </form>
      </div>
    </div>
   </div>
</div>
      <script>
                function myFunction() {
                <?php
                require_once('boot.php');
                $sql  = "INSERT INTO confirmentry(userid, text, comment) VALUES ('$userid', '$text', '$comment')";
                $stmt  =  get_mysqli()->query($sql);
                ?>
                }
       </script>




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