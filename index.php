<?php 
  require_once 'inc/lib.inc.php';
  require_once 'inc/data.inc.php';

  date_default_timezone_set('Asia/Almaty');
  setlocale(LC_ALL, "ru");

  $day = date('d');
  $mon = date('m');
  $year = date('y');
  /*
  * Получаем текущий час в виде строки от 00 до 23
  * и приводим строку к целому числу от 0 до 23
  */
  $hour = (int) date('H');
  $welcome = ''; // Инициализируем переменную для приветствия
  if ($hour>=0 && $hour < 6) {
    $welcome = "Доброй ночи";
  } else if ($hour >= 6 && $hour < 12 ) {
    $welcome = "Доброе утро";
  } else if ($hour >= 12 && $hour < 18 ) {
    $welcome = "Добрый день";
  } else if ($hour >= 18 && $hour < 23 ) {
    $welcome = "Добрый вечер";
  } else {
    $welcome = "Доброй ночи";
  }
  // Инициализация заголовков страницы
  $title = 'Сайт нашей школы';
  $header = "$welcome, Гость!";
  $id = strtolower(strip_tags(trim($_GET['id']?? "")));

  switch($id){
    case 'about':
        $title = 'О сайте';
        $header = 'О нашем сайте';
        break;
    case 'contact':
        $title = 'Контакты';
        $header = 'Обратная связь';
        break;
    case 'table':
        $title = 'Таблица умножения';
        $header = 'Таблица умножения';
        break;
    case 'calc':
        $title = 'Он-лайн калькулятор';
        $header = 'Калькулятор';
        break;
}
?>
<!DOCTYPE html>
<html>

<head>
  <title><?php echo $title?></title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php
      require_once 'inc/top.inc.php'; 
    ?>
    <!-- Верхняя часть страницы -->
  </div>
  <div id="content">
    <!-- Заголовок -->
    <h1><?php echo $header?></h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <?php
       switch($id) {
        case 'about';
          include 'about.php';
          break;
        case 'contact';
          include 'contact.php';
          break;
        case 'table';
          include 'table.php';
          break;
        default;
         include 'inc/index.inc.php';
       }
    ?>
    <!-- Область основного контента -->
  </div>
  <div id="nav">
    <!-- Навигация -->
    <?php
      require_once 'inc/menu.inc.php'; 
    ?>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
      require_once 'inc/bottom.inc.php'; 
    ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>