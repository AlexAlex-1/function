<form action="123.php" method="post">
<input id=form name="a" type="text" maxlength="2" value="" placeholder="Число не больше 99:" size="30" autocomplete="off"/>
<input id=form name="n" type="text" maxlength="1" value="" placeholder="Степень не больше 9:" size="30" autocomplete="off"/>
<input id="form" type="submit" value="Вычислить!"/>
<?php
$a=$_POST["a"];
$n=$_POST["n"];
function pow1($a,$n){
$i=0;
$res=$a;
while ($i<$n) {
  $res=$res*$a;
  $i++;
}
echo "Число $a в степени $n равно: ";
return "$res";
}
echo pow($a,$n);
