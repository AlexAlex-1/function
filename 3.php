<form method="post" action="3.php">
  <input name="1" type="text" maxlength="2" value="" placeholder="Введите число элементов массива: " size="30" autocomplete="off"/>
  <input type="submit" value="Вперёд!">
</form>
<style>
#kk{
  display: none;
}
</style>
<pre>
<?php
function generation($n)
{
  $i=0;
  $arr = [];
  while ($i < $n) {
    $arr[$i] = mt_rand(1, 100);
    $i++;
  }

  echo "массив:\n";
  print_r($arr);

  return $arr;
}

function sum($arr)
{
  $i = 0;
  $sum = 0;
  while ($i < count($arr)) {
    $sum = $arr[$i] + $sum;
    $i++;
  }

  echo "сумма элементов: $sum \n";
  return $sum;
}

$n = $_POST['1'];
$i = 0;
$sumgl = [];
$arrgl = [];
$k = 0;
$max_array = 0;

while ($i < 10) {
  $arr = generation($n);
  $sumgl[$i] = sum($arr);
  $arrgl[$i] = $arr;
  $i++;
}

$max_array = $arrgl[0];
$max_sum = sum($arrgl[0]);
$max = 0;
$k = 1;
?>
<p id=kk>
  <?php
while ($k < count($arrgl)) {
  if (sum($arrgl[$k]) > $max_sum){
    $max_sum = sum($arrgl[$k]);
    $max = $k+1;
    $max_array = $arrgl[$k];
  }
  $k++;
}
?>
</p><?php
echo "Номер массива с максимальной суммой :";
echo $max . "\n", "Массив с максимальной суммой: ";
print_r($max_array);
echo "\n";
echo sum($max_array);
?>

</pre>
