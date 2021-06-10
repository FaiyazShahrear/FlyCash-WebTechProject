<?php 
    session_start();
    require_once('../../model/merchantModel.php');
    $username=$_SESSION['user_name'];
    $current_pin=$_SESSION['pin'];
    $cpin=$_POST['cpin'];
    $pin=$_POST['npin'];

    if(isset($_POST['change'])){
    
    if($current_pin == $cpin)
    {
        if($cpin!=$pin)
        {
            $status=updatePin($pin,$username);
                                                                                
            if($status)
            {
                $_SESSION['pin']=$pin;
                echo "PIN Changed";
            }else{
                echo "PIN Change Failed";
            }
        }else{
            echo "Current & New PIN Can't Be Same";
        }  
    }else{     
        echo "Current PIN Doesn't Match";
    }   
}
?>