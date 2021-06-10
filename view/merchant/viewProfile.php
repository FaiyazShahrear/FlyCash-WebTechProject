<?php

    $title= "View Profile";
    include('header.php');

    $name          = $_SESSION['name'];
    $username      = $_SESSION['user_name'];
    $email         = $_SESSION['email'];
    $accountnumber = $_SESSION['account_number'];
    $nidnumber     = $_SESSION['nid_number'];
    $pin           = $_SESSION['pin'];
    $gender        = $_SESSION['gender'];
    $date_of_birth = $_SESSION['date_of_birth'];

    
    $conn = mysqli_connect('localhost', 'root', '', 'flycash');
    $sql = "select * from mechant_image where username='{$username}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    
    




?>

<body style="background-color:rgb(255, 255, 255);">

    <table style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" align="center" width="70%">

        <tr>

            <td style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" colspan="2" align="right">

                <img align="left" src="../../assets/flycash.png" alt="Logo" width="200" height="100">
                <br><br>

                <b style=" font-size: xx-large; color: rgb(0, 0, 0);">Logged in as </b>
                <a href="dashboard.php"><b
                        style=" font-size: xx-large; color: rgb(116, 168, 64);"><?php echo $name ?></b></a>

        </tr>

        <tr>
            <td valign="top" width="20%">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b style="font-size:xx-large; color: rgb(199, 0, 0);">Merchant</b>
                <hr align="left" width="100%">
                <ul style="color: rgb(0, 0, 0);" align="left">
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href=" dashboard.php">Dashboard</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href=" addmoney.php">Add Money</a>
                    </li><br>
                    <li><a style="color: rgb(116, 168, 64); font-size: x-large;" href="viewProfile.php">View Profile</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="editProfile.php">Edit Profile</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="profilePicture.php">Change Profile
                            Picture</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="changepassword.php">Change
                            Password</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="changepin.php">Change FlyCash PIN</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="feedBack.php">Feedback</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="../../controller/merchant/logout.php">Logout</a>
                    </li>
                </ul>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="publicHome.html"><img src="../../assets/home.png" style="width:40px; height:40px" title="Home"
                        alt="home"></a><br>
            </td>
            <td style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" width="68%" height="698px">
                <table style="border:2px solid rgb(0, 0, 0);" width="70%" height="88%" align="center">
                    <tr>
                        <td height="80px" align="center">
                            <b style="font-size: xx-large; color: rgb(0, 0, 0);">View Profile</b>
                            <hr width="100%">
                        </td>
                    </tr>

                    <tr>
                        <td>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <img src="<?php echo "{$row['image']}"; ?>" alt="User" height="150px" width="150px" align="center"><br>
                            <hr width="80%">
                            <b style="color: rgb(0, 0, 0); font-size: x-large; font-weight: bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FlyCash
                                Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <?php echo $accountnumber?></b>
                            <hr width="80%">

                            <b style="color: rgb(0, 0, 0); font-size: x-large; font-weight: bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <?php echo $name?></b>
                            <hr width="80%">

                            <b style="color: rgb(0, 0, 0); font-size: x-large; font-weight: bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User
                                Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <?php echo $username?></b>
                            <hr width="80%">

                            <b style="color: rgb(0, 0, 0); font-size: x-large; font-weight: bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <?php echo $email?></b>
                            <hr width="80%">

                            <b style="color: rgb(0, 0, 0); font-size: x-large; font-weight: bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NID
                                Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <?php echo $nidnumber?></b>
                            <hr width="80%">

                            <b style="color: rgb(0, 0, 0); font-size: x-large; font-weight: bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <?php echo $gender?></b>
                            <hr width="80%">

                            <b style="color: rgb(0, 0, 0); font-size: x-large; font-weight: bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date
                                Of
                                Birth&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <?php echo $date_of_birth?></b>
                            <hr width="80%">
                        </td>
                    </tr>
                </table>
            </td>


        </tr>

        <?php
        include('footer.php');
        ?>