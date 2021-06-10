<?php

$title= "Add Merchant";
include('adminHeader.php');

?>
            

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px">
                <fieldset style="width:80%; margin:  0px auto;">
                    <span style="color: rgb(0, 0, 0);" id="Message" align="center"></span>
                    <legend><b style="color: rgb(0, 0, 0);">REGISTRATION</b></legend>

                    <br>

                    <b style="color: rgb(0, 0, 0);">Name</b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                        type="text" name="name" id="Name">
                    <hr>

                    <b style="color: rgb(0, 0, 0);">User Name</b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                        type="text" name="username" id="userName">
                    <hr>
                    <b style="color: rgb(0, 0, 0);">Email</b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                        type="email" name="email" id="Email">
                    <button title="hint:Sample@example.com"><b>i</b></button>
                    <hr>
                    <b style="color: rgb(0, 0, 0);">Account Number</b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                        type="text" name="accountnumber" id="accountNumber" title="Enter your 11 digit mobile number 
                            Hint: 017xxxxxxxx">
                    <hr>
                    <b style="color: rgb(0, 0, 0);">NID Number</b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                        type="text" name="nidnumber" id="nidNumber" title="Enter your nid number 
                            Hint: 8574965821475">
                    <hr>
                    <b style="color: rgb(0, 0, 0);">FlyCash
                        PIN</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input
                        type="text" name="pin" id="Pin">
                    <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 1 number and 1 uppercase and lowercase letter, and at least 8 or more characters" required-->
                    <hr>
                    <b style="color: rgb(0, 0, 0);">Password
                    </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="password" id="Password">
                    <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least 1 number and 1 uppercase and lowercase letter, and at least 8 or more characters" required-->
                    <hr>
                    <b style="color: rgb(0, 0, 0);">Confirm Password</b>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text"
                        name="cpassword" id="Cpassword">
                    <!--pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password and Confirm Password should be same" required-->
                    <hr>



                    <fieldset>

                        <legend><b style="color: rgb(0, 0, 0);">Gender</b></legend>

                        <input type="radio" name="gender" id="Gender" value="Male"> <b
                            style="color: rgb(0, 0, 0);">Male</b>
                        <input type="radio" name="gender" id="Gender" value="Female"> <b
                            style="color: rgb(0, 0, 0);">Female</b>
                        <input type="radio" name="gender" id="Gender" value="Other"> <b
                            style="color: rgb(0, 0, 0);">Other</b>

                    </fieldset>

                    <hr>

                    <fieldset>

                        <legend><b style="color: rgb(0, 0, 0);">Date of Birth</b></legend>

                        <input type="date" name="date_of_birth" id="Date_of_birth" min="1920-01-01" max="2005-12-31"><b>
                        </b>

                    </fieldset>
                    <hr>

                    <input type="submit" name="submit" value="Register" id="Submit" onclick="registrationCheck()">
                    <a id="reset" href="addMerchant.php"><input type="button" name="reset" value="Reset"></a>

                </fieldset>
                    <h1 id="Message"></h1>

                       
                  
                </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>
