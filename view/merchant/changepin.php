<?php
    $title= "Change Password";
    include('header.php');
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
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="viewProfile.php">View Profile</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="editProfile.php">Edit Profile</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="profilePicture.php">Change Profile
                            Picture</a>
                    </li><br>
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="changepassword.php">Change
                            Password</a>
                    </li><br>
                    <li><a style="color: rgb(116, 168, 64); font-size: x-large;" href="changepin.php">Change FlyCash
                            PIN</a>
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
                            <b style="font-size: xx-large; color: rgb(0, 0, 0);">Change FlyCash PIN</b>
                            <hr width="100%">
                        </td>
                    </tr>

                    <tr>
                        <td align="center">
                            <fieldset style=" color: rgb(0, 0, 0); width: 500px; height: 300px;">
                                <span style="color: rgb(0, 0, 0);" id="Message" align="center"></span>
                                <br><br>
                                <b style="color: rgb(0, 0, 0);">Current
                                    FlyCash PIN</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input
                                    type="text" name="cpin" id="cpin">
                                <hr>
                                <b style="color: rgb(0, 0, 0);">New
                                    FlyCash
                                    PIN</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<input
                                    type="text" name="npin" id="npin">
                                <hr>
                                <b style="color: rgb(0, 0, 0);">Re-Type
                                    FlyCash PIN</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;
                                <input type="text" name="rnpin" id="rnpin">
                                <hr>
                                <br><br>
                                <input type="submit" id="change" value="Change PIN" onclick="pinChangeCheck()">
                                <a id="reset" href="dashboard.php"><input type="button" name="back" value="back"></a>
                                <br><br>
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