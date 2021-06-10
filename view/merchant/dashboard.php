<?php
    $title= "Dashboard";
    include('header.php');
?>

<body style="background-color:rgb(255, 255, 255);">

    <table style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" align="center" width="70%">

        <tr>

            <td style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" colspan="2" align="right">

                <img align="left" src="../../assets/flycash.png" alt="Logo" width="200" height="100">
                <br><br>

                <b style=" font-size: xx-large; color: rgb(0, 0, 0);">Logged in as </b>
                <a href="dashboard.php"><b style=" font-size: xx-large; color: rgb(116, 168, 64);"><?php echo $name ?></b></a>
        </tr>

        <tr>
            <td valign="top" width="20%">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <b style="font-size:xx-large; color: rgb(199, 0, 0);">Merchant</b>
                <hr align="left" width="100%">
                <ul style="color: rgb(0, 0, 0);" align="left">
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
                    <li><a style="font-size: large; color: rgb(0, 4, 255);" href="changepassword.php">Change Password</a>
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
                <a href="publicHome.html"><img src="../../assets/home.png" style="width:40px; height:40px" title="Home" alt="home"></a><br>
            </td>
            <td style="border:2px solid rgb(0, 0, 0); border-collapse: collapse;" width="68%" height="698px">
                <table style="border:2px solid rgb(0, 0, 0);" width="70%" height="88%" align="center">
                    <tr>
                        <td colspan="2" align="center">
                            <b style="font-size: x-large; color: rgb(0, 0, 0);">Balance : <?=$balance?>&nbsp;&nbsp;TK</b>
                            <hr width="100%">
                        </td>
                    </tr>


                    <tr>
                        <td align="center">
                            <a href="cashin.php"><img src="../../assets/takain.png" style="width:100px; height:100px"
                                    title="Cash In" alt="Cashin"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Cash In</b>
                        </td>

                        <td align="center">
                            <a href="cashout.php"><img src="../../assets/takaout.png" style="width:100px; height:100px"
                                    title="Cash Out" alt="Cashout"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Cash Out</b>
                        </td>
                    </tr>


                    <tr>
                        <td align="center">
                            <a href="adduser.php"><img src="../../assets/adduser.png" style="width:100px; height:100px"
                                    title="Add User" alt="adduser"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Add User</b>
                        </td>

                        <td align="center">
                            <a href="requestmoney.php"><img src="../../assets/reqMoney.png"
                                    style="width:100px; height:100px" title="Request Money" alt="requestmoney"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Request Money</b>
                        </td>

                    </tr>

                    <tr>
                        <td align="center">
                            <a href="paybill.php"><img src="../../assets/paybill.png" style="width:100px; height:100px"
                                    title="Pay Bill" alt="paybill"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Pay Bill</b>
                        </td>

                        <td align="center">
                            <a href="transactions.php"><img src="../../assets/transaction.png"
                                    style="width:100px; height:100px" title="Transactions" alt="transactions"></a><br>
                            <b style="font-size: x-large; color: rgb(0, 0, 0);" align="center">Transactions</b>
                        </td>

                    </tr>
                </table>
            </td>


        </tr>

        <?php
        include('footer.php');
        ?>