<?php
      require_once ('../../model/adminDB.php');
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];     
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        $admin= [
            'name'         =>$name,
            'username'     =>$username,
            'password'     =>$password,
            'email'        =>$email,
            'gender'       =>$gender,
            'dob'          =>$dob
                ];

                print_r($admin);
                $status = insertAdmin($admin);
        if ($status)
           {

            //header('location:../view/adminLogin.html');
            echo "success";
            }
            else{
              echo "Registration failed";
                 }
    }          
?>