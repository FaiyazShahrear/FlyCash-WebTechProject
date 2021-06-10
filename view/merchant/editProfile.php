<?php

    $title= "Edit Profile";
    include('header.php');

    $name = $_SESSION['name'];
    $username = $_SESSION['user_name'];
    $email = $_SESSION['email'];
    $nidnumber = $_SESSION['nid_number'];
    $pin = $_SESSION['pin'];
    $gender = $_SESSION['gender'];
    $date_of_birth = $_SESSION['date_of_birth'];

?>

<body style="background-color:rgb(255, 255, 255);">

    <table style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" align="center" width="70%">

        <tr>

            <td style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" colspan="2" align="right">

                <img align="left" src="../../assets/flycash.png" alt="Logo" width="200" height="100">
                <br><br>

                <b style=" font-size: xx-large; color: rgb(0, 0, 0);">Logged in as </b>
                <a href="../view/dashboard.php"><b
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
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="viewProfile.php">View Profile</a>
                    </li><br>
                    <li><a style="color: rgb(116, 168, 64); font-size: x-large;" href="editProfile.php">Edit Profile</a>
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
                            <b style="font-size: xx-large; color: rgb(0, 0, 0);">Edit Profile</b>
                            <hr width="100%">
                        </td>
                    </tr>

                    <tr>
                        <td>

                            <fieldset style="border:2px solid; width: 500px; margin: 0px 0px 0px 55px;">
                                <span style="color: rgb(0, 0, 0);" id="Message" align="center"></span>

                                <b
                                    style="color: rgb(0, 0, 0);">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
                                <input type="text" name="name" id="Name" value="<?php echo $name ?>">
                                <hr>

                                <b style="color: rgb(0, 0, 0);">User
                                    Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
                                <input type="text" name="user_name" id="userName" value="<?php echo $username ?>">
                                <hr>

                                <b style="color: rgb(0, 0, 0);">Email
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
                                <input type="email" name="email" id="Email" value="<?php echo $email ?>"><button
                                    title="hint:Sample@example.com"><b>i</b></button>
                                <hr>

                                <b style="color: rgb(0, 0, 0);">NID
                                    Number&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
                                <input type="text" name="nid_number" id="nidNumber" value="<?php echo $nidnumber ?>">
                                <hr>

                                <b style="color: rgb(0, 0, 0);">Gender
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
                                <input type="radio" name="gender" id="Gender" value="Male"><b
                                    style="color: rgb(0, 0, 0);">Male</b>
                                <input type="radio" name="gender" id="Gender" value="Female"><b
                                    style="color: rgb(0, 0, 0);"> Female</b>
                                <input type="radio" name="gender" id="Gender" value="Other"><b
                                    style="color: rgb(0, 0, 0);"> Other</b>
                                <hr>

                                <b style="color: rgb(0, 0, 0);">Date of Birth
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b>
                                <input type="date" name="date_of_birth" id="Date_of_birth"
                                    value="<?php echo $date_of_birth ?>" size="1"><b> </b>
                                <hr>

                                <input type="submit" id="Submit" value="Submit" onclick="editProfileCheck()">
                            </fieldset>


                        </td>
                    </tr>
                </table>
            </td>


        </tr>
        <script type="text/javascript" src="../../scripts/jquery.js"></script>

        <?php
        include('footer.php');
        ?>