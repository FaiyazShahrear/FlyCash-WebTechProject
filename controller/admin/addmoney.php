<?php
	session_start();
  require_once('../../model/merchantModel.php');

if(isset($_POST['submit']))
	{
    $amount=$_POST['amount'];
    $merchantNumber=$_POST['merchantNumber'];

    if (ctype_digit($merchantNumber)==true )

     {
        
          
            $check=getMerchantByNumber($merchantNumber);
            if ($check){

                            

                            $mbalance=$check['balance']+$amount;

                            $update=updateBalanceAddmoney($mbalance,$merchantNumber);
                            if($update){

                                echo "Money added"; 
                            
                                
                            }else{
                              echo "server Error"; 
                            }
                           

                           

            }else{
              echo "Invalid Merchant Number";
            }

          

   

     }else{
      echo "Enter Valid Number";
      echo "<br>";
     }

          
}