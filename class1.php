<title>Première exercice</title>
<link rel="shortcut icon" href="/b.ico" type="image/x-icon">
<form action="/classes/class.php">
  <input id=formm type="submit" value="<=Назад!">
</form>
<?php
echo "Money:<br>";
  class Money
    {
        private $rub;
        private $cop;
        public function __construct($rub, $cop)
            {
                $this->rub = "$rub";
                $this->cop = "$cop";
            }
  public function Plus(Money $fra)
        {
          if(($this->cop+$fra->cop)>=100){
           $plus=($this->rub+$fra->rub+1).",".($this->cop+$fra->cop-100);
          }
         else {
            $plus=($this->rub+$fra->rub).",".($this->cop+$fra->cop);
        }
  return $plus;
      }
  public function Minus($fra){
      if(($this->cop-$fra->cop)<0){
       $minus=(($this->rub-$fra->rub)-1).",".(100-($this->cop-$fra->cop)*-1);
      }
     else {
        $minus=($this->rub-$fra->rub).",".($this->cop-$fra->cop);
    }
echo "<br>Вычитание: ".$minus;
  }
  public function div($fra){
      $div=(($this->rub/$fra)+($this->cop/$fra));
      echo "<br>Деление суммы на дробное число: ",$div;
      }
      public function multiply($fra){
          $div=(($this->rub*$fra)+($this->cop*$fra));
          echo "<br>Умножение суммы на дробное число: ",$div;
          }

        public function dePlus(Money $fra)
        {
          if(($this->rub+($this->cop*0.01))>($fra->rub+($fra->cop*0.01))){
            return true;
            // return "<br>Первое число $this->rub,$this->cop ,больше второму $fra->rub,$fra->cop";
          }
          return false;
        }

        public function deMoins(Money $fra){
          if(($this->rub+($this->cop*0.01))<($fra->rub+($fra->cop*0.01))){
            return true;
          }
          return false;
          }

      public function __toString(){
        return "$this->rub" . "," ."$this->cop";
      }
    }



    $one = new Money(9, 15);
    $two = new Money(4, 15);

    echo "Сложение: ",$one->Plus($two);
    $one->Minus($two);
    $one->div(3.14);
    $one->multiply(3.14);

    if ($one->dePlus($two)){
      echo "<br>Первое число $one больше, чем второе $two";
    } else if ($one->deMoins($two)){
      echo "<br>Первое число $one меньше, чем второе $two";
    } else {
      echo "<br>Первое число $one равно второму $two";
    }
    // $one->compare($two);
    echo "<br>";
    echo "Числа: <br>","Первое: ",$one,"<br>","Второе: ",$two;
?>
