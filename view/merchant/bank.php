<?php
    $title= "Cash IN - Bank";
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
                    <li><a style="color: rgb(116, 168, 64); font-size: x-large;" href=" addmoney.php">Add Money</a>
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
                <table style="border:2px solid rgb(0, 0, 0);" width="70%" height="88%" align="center">
                    <tr>
                        <td height=30px colspan="2">
                            <div align="center">
                                <b style="font-size: x-large; color: rgb(0, 0, 0);">Add Money - Bank</b>
                            </div>
                            <hr width="50%">
                        </td>
                    </tr>

                    <tr>
                        <td height=30px colspan="2">
                            <div align="center">
                                <b style="font-size: x-large; color: rgb(0, 0, 0);"> Balance :
                                    <?=$balance?>&nbsp;&nbsp;TK</b>
                            </div>
                            <hr width="100%">
                        </td>
                    </tr>

                    <tr>
                        <td style="border:2px solid rgb(255, 255, 255); border-collapse: collapse;" width="68%"
                            height="250px">

                            <form action="../../controller/merchant/transactioncheck.php" method="post">
                                <br><br><br><br><br>
                                <fieldset style="width:60%;  margin:  0px auto;">

                                    <b style="color: rgb(0, 0, 0);">Enter Card
                                        Number</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input id="ccn" type="tel" inputmode="numeric" pattern="[0-9\s]{13,19}"
                                        autocomplete="cc-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx">
                                    <!--<input type="tel" name="c1" size="1" pattern="[0-9]{4}" required><b>  </b>
                                    <input type="tel" name="c2" size="1" pattern="[0-9]{4}"required><b>  </b>
                                    <input type="tel" name="c3" size="1" pattern="[0-9]{4}"required><b>  </b>
                                    <input type="tel" name="c4" size="2" pattern="[0-9]{4}"required>-->
                                    <br><br>

                                    <b style="color: rgb(0, 0, 0);">Valid Till</b>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="inputCard" type="text" name="expiry" id="expiry"
                                        placeholder="mm/yy " />
                                    <br><br>

                                    <b style="color: rgb(0, 0, 0);">CVC/CCV</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    &nbsp;&nbsp;
                                    <input type="tel" name="c2" size="1" pattern="[0-9]{3}"><b> </b>
                                    <br><br>

                                    <b style="color: rgb(0, 0, 0);">Card Holder
                                        Name</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="text" name="name" placeholder=" ">
                                    <br><br>

                                    <b style="color: rgb(0, 0, 0);">Card Holder
                                        Number</b>&nbsp;&nbsp;&nbsp;
                                    <input type="text" name="number" placeholder=" 017xxxxxxx" title="Enter your 11 digit mobile number 
                                        Hint: 017xxxxxxxx">
                                    <br><br>

                                    <b style="color: rgb(0, 0, 0);">Amount</b>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="float" name="amount" placeholder=" 0.00">
                                    <br><br>

                                    <b style="color: rgb(0, 0, 0);">Enter PIN</b>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="number" name="pin">

                                    <hr>

                                    <input type="submit" name="bankaddmoney" value="Cash In">

                                </fieldset>
                                <br><br><br><br><br>
                            </form>

                        </td>
                    </tr>
                </table>
            </td>


        </tr>

        <?php
        include('footer.php');
        ?>