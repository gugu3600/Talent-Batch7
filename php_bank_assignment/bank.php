<?php


class Bank
{

    private $balance;

    public function deposit($balance)
    {

        if (!is_integer($balance) or $balance < 0 ) {
            echo "Balance is not a number or Balance must be more than 0 <br/><br/>";
        } else {

            $this->balance += $balance;
        }

    }

    public function showMoney()
    {
        if($this->balance == null){

            echo "your balance is 0";
        }else{
            return $this->balance;
        }
    }

    public function withdraw($amount)
    {
       if(is_integer($amount)){

         if($this->balance < 0){
            echo "you dont have enough balance <br/><br/>";
            echo $this->balance;
        }else if($amount > $this->balance){

            echo "you cannot withdraw more than your balance <br/><br/>";
            echo $this->balance;
        }
        
        else{
            $this->balance -= $amount;
            echo $this->balance;
            echo "<br/><br/>";
        }

       } else{
        
        echo "Withdraw amount must be number only <br/><br/>";
       }
    }
}

$person1 = new Bank();
$person1->showMoney();
echo "<br/><br/>";
$person1->withdraw(1);
$person1->deposit(20000);
echo $person1->showMoney();
echo "<br/><br/>";
$person1->deposit(10000);
echo $person1->showMoney();
echo "<br/><br/>";
echo $person1->withdraw(5000);
echo $person1->withdraw(26000);
echo "<br/></br>";
echo $person1->withdraw(25000); 
echo $person1->withdraw(1); 









