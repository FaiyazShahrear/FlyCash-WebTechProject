
<?php
    session_start();
    require_once('../../model/adminDB.php');
    

    if(isset($_POST['submit'])){
        

        $username =$_POST['username'];
        $password = $_POST['password'];

         if($username == "" || $password == ""){
            echo "Please enter username and password";
            
        }else{
            $status = validateUser($username, $password);

                if($status==true){

                    setcookie('flag', true, time()+3600, '/');
                    $admin=getAdminByName($username);


              


                $_SESSION['name']=$admin['name'];
                $_SESSION['username']=$admin['username'];
                $_SESSION['password']=$admin['password'];
                $_SESSION['gender']=$admin['gender'];
                $_SESSION['email']=$admin['email'];
                $_SESSION['dob']=$admin['dob'];

                header('location: ../../view/admin/dashboard.php ');
                }else{
                    echo "Username or password is invalid";
                } 
            }
            
        }


    else if(isset($_POST['signup']))
        {
            header('location:../../view/admin/registration.html');
        }
?>