<?php 
session_start();
require_once('../../model/adminDB.php');

$name=$_POST['name'];
$username=$_SESSION['username'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$password=$_SESSION['password'];
        
//print_r($username);
        
    
if(isset($_POST['submit']))
  {
    $_SESSION['name']=$name;
    $_SESSION['email']=$email;
    $_SESSION['gender']=$gender;
    $_SESSION['dob']=$dob;

    $admin= [
        'name'         =>$name,
        'password'         =>$password,
        'username'    =>$username,
        'email'         =>$email,
        'gender'        =>$gender,
        'dob'            =>$dob
        ]; 

              $status=updateAdmin($admin);
              
              if ($status)
                  {
                    echo "success";
                   //header('location:../view/dashboard.php');
                  }else
                      {
                          echo "Error To Update";
                      }

}
?>