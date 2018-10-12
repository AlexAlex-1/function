<form action="prog2.php" method="post">
<input id=form name="a" type="text" maxlength="2" value="" placeholder="Число не больше 99:" size="30" autocomplete="off"/>
<input id=form name="n" type="text" maxlength="1" value="" placeholder="Степень не больше 9:" size="30" autocomplete="off"/>
<input id="form" type="submit" value="Вычислить!"/>
</form>
<form action="function.php">
  <input type="submit" value="Назад">
</form>
<?php
$a=$_POST["a"];
$n=$_POST["n"];
  function pow1($a,$n){
    $i=1;
    $res=$a;
    while ($i<$n) {
      $res=$res*$a;
      $i++;
    }
		return "Число $a в степени $n равно: $res";
  }
  echo pow1($a,$n);
 ?>
