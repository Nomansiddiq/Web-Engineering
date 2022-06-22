<!DOCTYPE html>
<html>
<body>

<?php                
include "header.php";                 
?>


<?php
class Account
{
    public static $final_balance;
    
    public function __construct()
    {
        
    }
    
    public function set_balance(int $amount)
    {
      $GLOBALS['final_balance']=$amount;
    }

    public function withdrawal(int $amount)
    {
    
        if($amount > $GLOBALS['final_balance'])
        {
            echo "Amount Entered is not in your account:<br>";
        }
        else if($amount < $GLOBALS['final_balance'])
        {
           echo "Amount ".$amount. " deducted from your account <br>";       
            $GLOBALS['final_balance']= $GLOBALS['final_balance']-$amount;
        }
           //var_dump($amount);
    }
    public function deposite(int $amount)
    {
        echo "Amount ".$amount." added to your account <br>";
        $GLOBALS['final_balance']= $GLOBALS['final_balance']+$amount;
        //var_dump($oamount);
    }
    
    public function final_Balance()
    {
        echo "Your balance is :".$GLOBALS['final_balance'];
    }
       
      
}

$balance= new Account();
echo $balance->set_balance(1000);
echo $balance->withdrawal(500);
echo $balance->deposite(5000);
echo $balance->final_balance();

?>


<?php
include "footer.php";                
?>

</body>
</html>