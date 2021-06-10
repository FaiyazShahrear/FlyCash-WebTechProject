<?php
    $title= "Add User";
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

        <tr>
            <td valign="top" width="20%">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b style="font-size:xx-large; color: rgb(199, 0, 0);">Merchant</b>
                <hr align="left" width="100%">
                <ul style="color: rgb(255, 255, 255);" align="left">
                    <li><a style="color: rgb(116, 168, 64); font-size: x-large;" href=" dashboard.php">Dashboard</a>
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
                <table style="border:2px solid rgb(0, 0, 0); margin: 0px 0px 0px 150px;" width="70%" align="center">
                    <tr>
                        <td height=30px colspan="2">
                            <div align="center">
                                <b style="font-size: x-large; color: rgb(0, 0, 0);">Add User</b>
                            </div>
                            <hr width="100%">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <br><br>
                            <fieldset style="width:45%; margin:  0px auto;">
                                <!--<form action="../controller/regCheck.php" method="post">-->
                                <legend><b>REGISTRATION</b></legend>

                                <br><br>

                                <b>Name</b>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <input type="text" name="name" id="Name">
                                <hr>

                                <b>User Name</b>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <input type="text" name="username" id="userName">
                                <hr>
                                <b>Email</b>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <input type="text" name="email" id="Email">
                                <button title="hint:Sample@example.com"><b>i</b></button>


                                <hr>
                                <b>Mobile Number</b>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <input type="text" id="mobileNumber">
                                <hr>
                                <b>Password</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <input type="text" name="password" id="Password">
                                <hr>
                                <b>Confirm Password</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                <input type="text" name="cpassword" id="Cpassword">
                                <hr>



                                <fieldset>

                                    <legend><b>Gender</b></legend>

                                    <input type="radio" name="gender" id="Gender" value="Male"> <b>Male</b>
                                    <input type="radio" name="gender" id="Gender" value="Female"> <b>Female</b>
                                    <input type="radio" name="gender" id="Gender" value="Other"> <b>Other</b>

                                </fieldset>

                                <hr>

                                <fieldset>

                                    <legend><b>Date of Birth</b></legend>

                                    <input type="date" name="dob" id="Dob" min="1920-01-01" max="2005-12-31"><b> </b>


                                </fieldset>
                                <hr>

                                <input type="submit" name="submit" value="Register" id="Submit"
                                    onclick="registration()">


                            </fieldset>
                            <h4 align="center" id="response"></h4>
                            <br><br>

                        </td>
                    </tr>
                </table>
            </td>

            <script type="text/javascript" src="../../scripts/script.js"></script>
        </tr>

        <?php
        include('footer.php');
        ?>