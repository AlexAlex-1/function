<title>Deuxième exercice</title>
<link rel="shortcut icon" href="/b.ico" type="image/x-icon">
<form action="/classes/class.php" method="post">
  <input id=link type="submit" value="<= en arrière">
</form>
<p>Первое число в координатной сетке - это ось X, Второе - ось Y<br>
   Условной единицей считать 1 сантиметр.<br>
Координатная сетка начинается с точки 0:0.<br> y<br>3|<br>2|<br>  1|______ x<br>  0|0  1 2 3<br>
</p>
<pre>
<?php
$sum = 0;
$i = 0;
class Trapezium{
  private $one;
  private $two;
  private $three;
  private $four;
  public function __construct($one,$two,$three,$four){
    $this->one = $one;
    $this->two=$two;
    $this->three=$three;
    $this->four=$four;
  }
  public function getInfo(){
    $a = $this->one;
    $b = $this->two;
    $c = $this->three;
    $d = $this->four;
    $a1 = floor($this->one);
    $a2 = ($a - floor($a))*10;
    $b1 = floor($b);
    $b2 = ($b - floor($b))*10;
    $c1 = floor($c);
    $c2 = ($c - floor($c))*10;
    $d1 = floor($d);
    $d2 = ($d - floor($d))*10;
    $a1b1 = ($b1 - $a1);
    $a2b2 = ($b2 - $a2);
    $ab = (sqrt((pow($a1b1, 2))+(pow($a2b2, 2))));
    $c1d1 = ($c1-$d1)*-1;
    $c2d2 = ($c2 - $d2)*-1;
    $dc = (sqrt((pow($c1d1,2)+(pow($c2d2,2)))));
    $ad = $d1 - $a1;
    $bc = $c1 - $b1;
    $P = $ad + $bc + $ab + $dc;
    $h = $b2 - $a2;
    if ($h<0){
    $h = ($b2 - $a2)*-1;
    }
    else{
      $h = ($b2 - $a2);
    }
    $S = 0.5*($ad + $bc)*$h;
    if ($ab != $dc){
      ?>
      <center>
        <h1>Трапеция не равнобедренная!</h1>
      </center>
      <?php
      die;
    }
    else{
      echo "Длины сторон:<br>","Сторона AD: $ad см<br>","Сторона BC: $bc см<br>","Сторона AB: ",round($ab,2)," см<br>","Сторона DC: ",round($dc,2)," см<br>";
    }
    return $S;
  }
  public function per(){
    $a = $this->one;
    $b = $this->two;
    $c = $this->three;
    $d = $this->four;
    $a1 = floor($this->one);
    $a2 = ($a - floor($a))*10;
    $b1 = floor($b);
    $b2 = ($b - floor($b))*10;
    $c1 = floor($c);
    $c2 = ($c - floor($c))*10;
    $d1 = floor($d);
    $d2 = ($d - floor($d))*10;
    $a1b1 = ($b1 - $a1);
    $a2b2 = ($b2 - $a2);
    $ab = (sqrt((pow($a1b1, 2))+(pow($a2b2, 2))));
    $c1d1 = ($c1-$d1)*-1;
    $c2d2 = ($c2 - $d2)*-1;
    $dc = (sqrt((pow($c1d1,2)+(pow($c2d2,2)))));
    $ad = $d1 - $a1;
    $bc = $c1 - $b1;
    $P = $ad + $bc + $ab + $dc;
    $h = $b2 - $a2;
    if ($h<0){
    $h = ($b2 - $a2)*-1;
    }
    else{
      $h = ($b2 - $a2);
    }
    $S = 0.5*($ad + $bc)*$h;
    if ($ab != $dc){
      ?>
      <center>
        <h1>Трапеция не равнобедренная!</h1>
      </center>
      <?php
      die;
    }
    else{
      return $P;
    }
  }
  public function square(){
    $a = $this->one;
    $b = $this->two;
    $c = $this->three;
    $d = $this->four;
    $a1 = floor($this->one);
    $a2 = ($a - floor($a))*10;
    $b1 = floor($b);
    $b2 = ($b - floor($b))*10;
    $c1 = floor($c);
    $c2 = ($c - floor($c))*10;
    $d1 = floor($d);
    $d2 = ($d - floor($d))*10;
    $a1b1 = ($b1 - $a1);
    $a2b2 = ($b2 - $a2);
    $ab = (sqrt((pow($a1b1, 2))+(pow($a2b2, 2))));
    $c1d1 = ($c1-$d1)*-1;
    $c2d2 = ($c2 - $d2)*-1;
    $dc = (sqrt((pow($c1d1,2)+(pow($c2d2,2)))));
    $ad = $d1 - $a1;
    $bc = $c1 - $b1;
    $P = $ad + $bc + $ab + $dc;
    $h = $b2 - $a2;
    if ($h<0){
    $h = ($b2 - $a2)*-1;
    }
    else{
      $h = ($b2 - $a2);
    }
    $S = 0.5*($ad + $bc)*$h;
    if ($ab != $dc){
      ?>
      <center>
        <h1>Трапеция не равнобедренная!</h1>
      </center>
      <?php    $a = $this->one;
      die;
    }
    else{
      return $S;
    }
  }
}
$trap1 = new Trapezium(10.5, 12.0, 18.0, 20.5);
$trap2 = new Trapezium(0.0, 10.5, 40.5, 50.0);
$trap3 = new Trapezium(0.0, 1.5, 9.5, 10.0);
$trap4 = new Trapezium(0.0, 9.9, 11.9, 20.0);
$trap5 = new Trapezium(0.0, 2.5, 5.5, 7.0);
$trap1->getInfo($trap1);
$trap2->getInfo($trap2);
$trap3->getInfo($trap3);
$trap4->getInfo($trap4);
$trap5->getInfo($trap5);
echo "Площадь первой трапеции: ",$trap1->square($trap1),"см<sup> 2</sup><br>";
echo "Площадь второй трапеции: ",$trap2->square($trap2),"см<sup> 2</sup><br>";
echo "Площадь третьей трапеции: ",$trap3->square($trap3),"см<sup> 2</sup><br>";
echo "Площадь четвёртой трапеции: ",$trap4->square($trap4),"см<sup> 2</sup><br>";
echo "Площадь пятой трапеции: ",$trap5->square($trap5),"см<sup> 2</sup><br>";
$arr = array($trap1->square($trap1),$trap2->square($trap2),$trap3->square($trap3),$trap4->square($trap4),$trap5->square($trap5));
foreach ($arr as $key => $value) {
  $sum = $sum + $value;
  $sr = $sum / count($arr);
}
foreach ($arr as $key => $value) {
  if ($value > $sr){
    $i++;
  }
}
echo "Средняя площадь всех трапеций: ",$sr,"см<sup> 2</sup><br>","Колличество трапеций,площадь которых<br>превышает среднюю площадь: ",$i;
?>
</pre>
