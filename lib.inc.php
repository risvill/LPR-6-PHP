<?php
$cols = rand(1, 10);
$rows = rand(1, 10);
$color = 'Linen';
function drawTable($cols, $rows, $color) {
  echo "<table border='1'>\n";
      for($i=1;$i<=$rows;$i++){
        echo "<tr>\n";
        for($j=1; $j<=$cols; $j++){
          if($i==1 || $j==1){echo "\t\t<th style='background:$color'>".$i*$j."</th>\n";}
          else{echo "\t\t<td>".$i*$j."</td>\n";}
        }
        echo "</tr>";
      }
      echo "</table>";
}
function drawMenu($menu, $vertical) {
  if ($vertical == true) {
    foreach ($menu as $val) {
      echo "<ul>";
      echo "<li>";
      echo "<a href='{$val['href']}'>  {$val['link']}  </a>";
      echo "</li>";
      echo "</ul>";
    }
  } else {
    foreach ($menu as $val) {
      echo "<a href='{$val['href']}'>  {$val['link']}  </a>";
    }
  }
}
$size = ini_get("post_max_size");
    $letter = $size[-1];
    $size = (int) $size;
    switch (strtoupper($letter)) { // преобразовать строку в верхний регистр (если в $size будет строка в нижнем регистре)
      case "G": {
          $size *= 1024;
        }
      case "M": {
          $size *= 1024;
        }
      case "K": {
          $size *= 1024;
        }
    }
?>