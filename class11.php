<pre>
<?php
class Fractions
{
  private $int;
  private $fracton;

  public function __construct($int, $fracton)
  {
    $this->int = $int;
    $this->fracton = $fracton;
  }

  public function Plus(Fractions $number)
  {
    $res = ($this->int + $this->fracton) + ($number->int + $number->fracton);
    return $res;
  }

  public function Minus(Fractions $number)
  {
    $res=($this->int + $this->fracton)-($number->int+$number->fracton);
    return $res;
  }

  public function Multiply(Fractions $number)
  {
    $res=($this->int + $this->fracton)*($number->int+$number->fracton);
    return $res;
  }

  public function divide(Fractions $number)
  {
    $res=($this->int + $this->fracton)/($number->int+$number->fracton);
    return $res;
  }

  public function Comparison(Fractions $number)
  {
    $t1=$this->int;
    $s1=$this->fracton;
    $t=$number->int;
    $s=$number->fracton;
    if (($t+$s)>($t+$s1)){
      echo "Первое число больше второго";
      if(($t+$s)==($t+$s1)){
        echo "Числа равны";
      }
    }
    else{
      echo "Второе число больше";
    }
  }
}

$one = new Fractions(45, 0); // 1.53
$two = new Fractions(23, 0.57);//2.21

echo "Сложение: \n";
echo $one->Plus($two); // 3.74
echo "\n";
echo "Вычитание:  \n";
echo $one->Minus($two);
echo "\nУмножение:  \n";
echo $one->Multiply($two);
echo "\nДеление:  \n";
echo $one->divide($two);
echo "\n",$one->Comparison($two);
 ?>
</pre>
