<?php
  require_once "inc/lib.inc.php";
  require_once "inc/data.inc.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
  $cols = abs((int) $_POST['cols']);
  $rows = abs((int) $_POST['rows']);
  $color = trim(strip_tags($_POST['color']));
  }
  $cols = ($cols) ? $cols : 10;
  $rows = ($rows) ? $rows : 10;
  $color = ($color) ? $color : 'yellow';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Таблица умножения</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css"/>
</head>

<body>

  <div id="header">
    <!-- Верхняя часть страницы -->
    <?php
      include 'inc/top.inc.php'; 
    ?>
    <!-- Верхняя часть страницы -->
  </div>
  <div id="content">
    <!-- Заголовок -->
    <h1>Таблица умножения</h1>
    <!-- Заголовок -->
    <!-- Область основного контента -->
    <form action='<?= $_SERVER['REQUEST_URI']?>' method="POST">
      <label>Количество колонок: </label>
      <br />
      <input name='cols' type='text' value="" />
      <br />
      <label>Количество строк: </label>
      <br />
      <input name='rows' type='text' value="" />
      <br />
      <label>Цвет: </label>
      <br />
      <input name='color' type='text' value="" />
      <br />
      <br />
      <input type='submit' value='Создать' />
    </form>
    <!-- Таблица -->
    <?php
      drawTable($cols, $rows, $color);
	  ?>
    <!-- Таблица -->
    <!-- Область основного контента -->
    </div>
    <div id="nav">
    <!-- Навигация -->
    <?php
      include 'inc/menu.inc.php'; 
    ?>
    <!-- Навигация -->
  </div>
  <div id="footer">
    <!-- Нижняя часть страницы -->
    <?php
      include 'inc/bottom.inc.php'; 
    ?>
    <!-- Нижняя часть страницы -->
  </div>
</body>

</html>