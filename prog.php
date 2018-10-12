<form action="prog.php" method="post">
<input id=form name="a" type="text" maxlength="1ы" value="" placeholder="Начальный индекс :" size="30" autocomplete="off"/>
<input id=form name="n" type="text" maxlength="1" value="" placeholder="конечный индекс :" size="30" autocomplete="off"/>
<input id="form" type="submit" value="Показать!"/>
</form>
<form action="function.php">
  <input type="submit" value="Назад">
</form>
<?php
$a=0;
$n=0;
$a=$_POST["a"];
$n=$_POST["n"];
$n1=$n-$a+1;
$a1=$a-1;
$arr = array('1' => 44,'2' => 944,'3' => 444,'4' => 44,'5' => 254, );;
echo "<br>","Массив: ";
print_r($arr);
function arr($arr,$a1,$n1){
$k=array_slice($arr, $a1,$n1,true);
$max = array_keys($k, max($k))[0];
return "Индекс максимального элемента: $max";
}
echo arr($arr,$a1,$n1);
