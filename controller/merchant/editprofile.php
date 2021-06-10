<?php 
session_start();
require_once('../../model/merchantModel.php');

        $name = $_POST['name'];
        $username = $_POST['user_name'];
        $email = $_POST['email'];
        $accountnumber = $_SESSION['account_number'];
        $nidnumber = $_POST['nid_number'];
        $pin = $_SESSION['pin'];
        $password = $_SESSION['password'];
        $gender = $_POST['gender'];
        $date_of_birth = $_POST['date_of_birth'];
        $balance=$_SESSION['balance'];
        

        
    
if(isset($_POST['submit']))
  {
    $_SESSION['name']=$name;
    $_SESSION['user_name']=$username;
    $_SESSION['email']=$email;
    $_SESSION['nid_number']=$nidnumber;
    $_SESSION['gender']=$gender;
    $_SESSION['date_of_birth']=$date_of_birth;

          $user= [
              'name'          =>$name,
              'user_name'      =>$username,
              'email'         =>$email,
              'account_number' =>$accountnumber,
              'nid_number'     =>$nidnumber,
              'pin'           =>$pin,
              'password'      =>$password,
              'gender'        =>$gender,
              'date_of_birth' =>$date_of_birth,
              'balance'       => $balance
              ]; 
              $status=updateMerchant($user);
              
              if ($status)
                  {
                    echo "Profile Updated";
                   //header('location:../view/dashboard.php');
                  }else
                      {
                          echo "Error To Update";
                      }

}
?>