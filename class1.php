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
  echo "Сложение: ".$plus;
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
    public function compare(Money $fra)
          {
          if(($this->rub+$this->cop)>($fra->rub+$fra->cop)){
           echo "<br>Первое число $this->rub,$this->cop больше второго $fra->rub,$fra->cop";
          }
          if(($this->rub+$this->cop)==($fra->rub+$fra->cop)){
           echo "<br>Первое число $this->rub,$this->cop равно второму $fra->rub,$fra->cop";
          }
          if (($this->rub+$this->cop)<($fra->rub+$fra->cop)){
          echo "<br>Первое число $this->rub,$this->cop меньше второго $fra->rub,$fra->cop";
        }
  }
      public function __toString(){
        return "$this->rub" . "," ."$this->cop";
            }

        }

        $one = new Money(5, 15);
        $two = new Money(3, 17);
        $one->Plus($two);
        $one->Minus($two);
        $one->div(3.14);
        $two->div(3.14);
        $one->multiply(3.14);
        $two->multiply(3.14);
        $one->compare($two);
        echo "<br>";
        echo "Числа: <br>","Первое: ",$one,"<br>","Второе: ",$two;
?>
