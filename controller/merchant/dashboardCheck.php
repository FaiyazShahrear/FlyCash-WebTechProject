<?php 

if(isset($_POST['cashin']))
{
    echo "send";
    header('location:../view/cashin.php');

}
else if(isset($_POST['cashout']))
{
    //echo "recharge";
    header('location:../view/cashout.php');
}
else if(isset($_POST['adduser']))
{
    
    header('location:../view/adduser.php');
}
else if(isset($_POST['requestmoney']))
{
    header('location:../view/requestmoney.php');
}

else if(isset($_POST['paybill']))
{
    
    header('location:../view/paybill.php');
}
else if(isset($_POST['transaction']))
{
    
    header('location:../view/transaction.php');
}

?>