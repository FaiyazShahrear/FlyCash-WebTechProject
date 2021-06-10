<?php
    session_start();
    require_once('../../model/merchantModel.php');
    

    if(isset($_POST['submit']))
    {
        $username =$_REQUEST['username'];
        $password = $_REQUEST['password'];

         if($username == "" || $password == ""){
            echo "Please Enter User Name and Password";
            
        }else{
            //$user = $_SESSION['c_user'];
            $status = validateMerchant($username, $password);
            if($status==true)
            {
                setcookie('flag', true, time()+3600, '/');
                $user=getUserByusername($username);

               


                $_SESSION['name']=$user['name'];
                $_SESSION['user_name']=$user['user_name'];
                $_SESSION['email']=$user['email'];
                $_SESSION['account_number']=$user['account_number'];
                $_SESSION['nid_number']=$user['nid_number'];
                $_SESSION['pin']=$user['pin'];
                $_SESSION['password']=$user['password'];
                $_SESSION['gender']=$user['gender'];
                $_SESSION['date_of_birth']=$user['date_of_birth'];
                $_SESSION['balance']=$user['balance'];


                return true;

                }
                else{
                    echo "Failed";
                }
            }
            
        }
    else if(isset($_POST['signup']))
        {
            header('location:../view/registration.html');
        }
?>