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

class Trapezium {
  private $ay;
  private $by;
  private $cy;
  private $dy;

  private $ax;
  private $bx;
  private $cx;
  private $dx;

  private $axbx;
  private $ayby;
  private $cxdx;
  private $cydy;

  private $ab;
  private $bc;
  private $cd;
  private $ad;

  public function __construct($one, $two, $three, $four) {
    $this->ax = floor($one);
    $this->bx = floor($two);
    $this->cx = floor($three);
    $this->dx = floor($four);

    $this->ay = ($one - floor($one)) * 10;
    $this->by = ($two - floor($two)) * 10;
    $this->cy = ($three - floor($three)) * 10;
    $this->dy = ($four - floor($four)) * 10;

    $this->axbx = ($this->bx - $this->ax);
    $this->ayby = ($this->by - $this->ay);
    $this->cxdx = ($this->cx - $this->dx);
    $this->cydy = ($this->cy - $this->dy);

    $this->ab = (sqrt((pow($this->axbx, 2)) + (pow($this->ayby, 2))));
    $this->bc = $this->cx - $this->bx;
    $this->dc = (sqrt((pow($this->cxdx, 2)) + (pow($this->cydy, 2))));
    $this->ad = $this->dx - $this->ax;
  }

  private function getHeight() {
    return abs($this->by - $this->ay);
  }

  public function getInfo() {
    $this->ab = "$this->ab";
    $this->dc = "$this->dc";

    if ($this->ab == $this->dc) {
      echo "Длины сторон:<br>","Сторона AD: $this->ad см<br>","Сторона BC: $this->bc см<br>","Сторона AB: ",round($this->ab,2)," см<br>","Сторона DC: ",round($this->dc,2)," см<br>";
    } else {
      ?>
      <center>
        <h1>Одна из трапеций не равнобедренная!</h1>
      </center>
      <?php
      die;
    }

  }

  public function per() {

    $P = $this->ad + $this->bc + $this->ab + $this->dc;

      return $P;
  }

  public function square() {

    $S = 0.5*($this->ad + $this->bc) * $this->getHeight();

      return $S;
}
}

$trap1 = new Trapezium(10.5, 12.0, 18.0, 20.5);
$trap2 = new Trapezium(0.0, 4.8, 9.8, 13.0);
$trap3 = new Trapezium(0.0, 1.5, 9.5, 10.0);
$trap4 = new Trapezium(0.0, 9.9, 11.9, 20.0);
$trap5 = new Trapezium(0.0, 10.2, 40.2, 50.0);

$trap1->getInfo($trap1);
$trap2->getInfo($trap2);
$trap3->getInfo($trap3);
$trap4->getInfo($trap4);
$trap5->getInfo($trap5);

echo "Площадь первой трапеции: ",$trap1->square($trap1),"см<sup>2</sup><br>";
echo "Площадь второй трапеции: ",$trap2->square($trap2),"см<sup>2</sup><br>";
echo "Площадь третьей трапеции: ",$trap3->square($trap3),"см<sup>2</sup><br>";
echo "Площадь четвёртой трапеции: ",$trap4->square($trap4),"см<sup>2</sup><br>";
echo "Площадь пятой трапеции: ",$trap5->square($trap5),"см<sup>2</sup><br>";

$squares = array(
  $trap1->square($trap1),
  $trap2->square($trap2),
  $trap3->square($trap3),
  $trap4->square($trap4),
  $trap5->square($trap5)
);

$sum = 0;
foreach ($squares as $square) {
  $sum = $sum + $square;
}

$sr = $sum / count($squares);

$i = 0;
foreach ($squares as $square) {
  if ($square > $sr){
    $i++;
  }
}

echo "Средняя площадь всех трапеций: ",$sr,"см<sup> 2</sup><br>","Колличество трапеций,площадь которых<br>превышает среднюю площадь: ",$i;
?>
</pre>
