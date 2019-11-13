<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Знакомство с PHP</title>
</head>
<body>
  <table border="1" rules="none">
    <tr>
    <?php
      $operators = ['+', '-', '*', '/'];
      for ($i=1; $i<35; $i++){//38 строк
        echo '<tr>';
        for ($j=1; $j<=5; $j++){//5 колонок
        $operator = $operators[rand(0,3)];//рандомно выбирается знак операции
          $num1 = rand(1,20); $num2 = rand(1,20);//случайное число до 20
          if ($operator=='/' and $num1%$num2!=0//можно записать так - ($num1%$num2!=0)
            or $operator=='-' and $num1-$num2<0
            or $operator=='*' and $num1*$num2>100){
              --$j;
              continue;
          }
          echo "<td align='right'>$num1$operator$num2=___</td>";
        }
        echo '</tr>';
      }
        /*echo '<td>1*'.$i.'='.$i.'</td>'; - только умножение на 1*/
    ?>
    </tr>
  </table>
</body>
</html>

