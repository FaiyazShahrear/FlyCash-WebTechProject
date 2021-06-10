<?php
    session_start();
    $name =$_SESSION['name'];
    $email=$_SESSION['email'];
    $gender=$_SESSION['gender'];
    $password=$_SESSION['password'];
    $dob=$_SESSION['dob'];
    if(!isset($_COOKIE['flag']))
    {
        echo "Login First";
        header('location:adminLogin.html');}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>FlyCash - <?=$title?></title>
</head>
<body>
    
    <table style="border:2px solid black; border-collapse: collapse;"  align="center"width="50%" >

        <tr >

            <td style="border:2px solid black; border-collapse: collapse;" colspan="2" align="right">

                 <img align="left" src="../../assets/flycash.png" alt="Logo"width="150" height="80">
                   <br> 
                 <b>Logged in as </b>
                <a  href="dashboard.php"><?php echo $name ?></a> |
                <a  href="../../controller/admin/logout.php">Logout</a>
            

        </tr>

        <tr >
           
            
            <td colspan="1" width="32%" >
              <b><h1>Admin</h1> </b>
              <hr align="left" width="90%">
                <ul align="left" >
                    
                     
                    <button type="button" style ="height:40px; width: 160px"><li><a  href="dashboard.php">Dashboard</a></li> </button>
                    <br>
                  
                 <button type="button" style="height: 40px; width: 160px"><li><a  href="profile.php">Profile</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="merchant.php">Merchant</a></li></button>
                    <br>

                  <button type="button" style="height: 40px; width: 160px"><li><a  href="user.php">User</a></li></button>
                    <br>
                
                    <button type="button" style="height: 40px; width: 160px"><li><a  href="officer.php">Officer</a></li></button>
                    
                    
                  
                </ul>
              </td>