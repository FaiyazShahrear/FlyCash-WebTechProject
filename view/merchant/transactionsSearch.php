<?php
    $title= "Transaction Search";
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
                                <b style="font-size: x-large; color: rgb(0, 0, 0);">Transaction List</b>
                            </div>
                            <hr width="100%">
                        </td>
                    </tr>


                    <tr>

                        <td>
                            <form action="../../controller/merchant/transactioncheck.php" method="post">
                                <table style="border:2px solid rgb(0, 0, 0); background-color:rgb(255, 255, 255)"
                                    align="center">
                                    <tr align="center">
                                        <td colspan="6">
                                            <input type="text" name="id" placeholder="Enter Account Number"
                                                align="center"><input type="submit" name="search" value="Search">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th style="border:2px solid rgb(0, 0, 0);">
                                            <Serial style="color: rgb(0, 0, 0);">Serial No.</b>
                                        </th>
                                        <th style="border:2px solid rgb(0, 0, 0);">
                                            <b style="color: rgb(0, 0, 0);">Account No.</b>
                                        </th>
                                        <th style="border:2px solid rgb(0, 0, 0);">
                                            <b style="color: rgb(0, 0, 0);">Amount</b>
                                        </th>
                                        <th style="border:2px solid rgb(0, 0, 0);">
                                            <b style="color: rgb(0, 0, 0);">Trans. Type</b>
                                        </th>
                                        <th style="border:2px solid rgb(0, 0, 0);">
                                            <b style="color: rgb(0, 0, 0);">Trans. Type</b>
                                        </th>
                                        <th style="border:2px solid rgb(0, 0, 0);">
                                            <b style="color: rgb(0, 0, 0);">Submit Date</b>
                                        </th>
                                    </tr>
                                    <?php
        
        $username = $_SESSION['user_name'];
        $conn = mysqli_connect('localhost', 'root', '', 'flycash');
        $sql = "select * from transaction_info where user_name = '$username'";
        $result = mysqli_query($conn, $sql);
        print_r($result);
        while($status=mysqli_fetch_array($result))
        /*getAlltransaction($tablename);
        while($transaction)*/
        {
        echo "<tr>";
        
        echo "<td>"; echo $status["serial_no"]; echo "</td>";
        echo "<td>"; echo $status["account_number"]; echo "</td>";
        echo "<td>"; echo $status["amount"]; echo "</td>";
        echo "<td>"; echo $status["transaction_type"]; echo "</td>";
        echo "<td>"; echo $status["current_balance"]; echo "</td>";
        echo "<td>"; echo $status["date"]; echo "</td>";
        echo "</tr>";
        }
    ?>
                                </table>


                            </form>

                        </td>
                    </tr>
                </table>
            </td>


        </tr>

        <?php
        include('footer.php');
        ?>