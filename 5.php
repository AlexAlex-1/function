<label>Задача: вывод чисел от 1 до N:
</label>
<form method="post" action="5.php">
  <input id=form name="1" type="text" maxlength=3 value="" placeholder="Введите число N: " size="30" autocomplete="off"/>
  <input id=button type="submit" value="Вперёд!">
</form>
<pre>
<?php

$n = $_POST["1"];

function rec($n){
  if ($n > 0){
    return $res = rec($n-1).$n;
  }
  return $res = " ";
  }

echo (rec($n));
?>
</pre>
