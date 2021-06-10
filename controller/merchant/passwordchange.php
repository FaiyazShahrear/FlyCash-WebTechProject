<?php 
    session_start();
    require_once('../../model/merchantModel.php');
    $username=$_SESSION['user_name'];
    $current_password=$_SESSION['password'];
    $cpassword=$_POST['cpassword'];
    $password=$_POST['npassword'];

    if(isset($_POST['change'])){
    
    if($current_password == $cpassword)
    {
        if($cpassword!=$password)
        {
            $status=updatePassword($password,$username);
                                                                                
            if($status)
            {
                $_SESSION['password']=$password;
                echo "Password Changed";
            }else{
                echo "Password Change Failed";
            }
        }else{
            echo "Current & New Password Can't Be Same";
        }  
    }else{     
        echo "Current Password Doesn't Match";
    }   
}
?>