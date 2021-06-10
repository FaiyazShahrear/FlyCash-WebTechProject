<?php

$title= "Add User";
include('adminHeader.php');

?>

            
                <td style="border:2px solid black; border-collapse: collapse;"  width="68%" height="450px">
                <h5>Join FlyCash</h5>
                <fieldset style="width:80%; margin:  0px auto;">
                        <!--<form action="../controller/regCheck.php" method="post">-->

                        <legend><b>Add user</b></legend>

                        <br><br>

                        <b>Name</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        <input type="text" name="name" id="Name">
                        <hr>
                        
                        <b>User Name</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        <input type="text" name="username" id="userName">
                        <hr>
                        <b>Email</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        <input type="text" name="email" id="Email">
                        <button title="hint:Sample@example.com"><b>i</b></button>
                        

                        <hr>
                        <b>Mobile Number</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        <input type="text"  id="mobileNumber">
                        <hr>
                       <b>Password</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                       <input type="text" name="password" id="Password" >
                        <hr>
                        <b>Confirm Password</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                        <input type="text" name="cpassword" id="Cpassword" >
                        <hr>



                        <fieldset>

                            <legend><b>Gender</b></legend>

                            <input type="radio" name="gender" id="Gender" value="Male"> <b>Male</b>
                            <input type="radio" name="gender" id="Gender" value="Female"> <b>Female</b>
                            <input type="radio" name="gender" id="Gender" value="Other"> <b>Other</b>

                        </fieldset >
                       
                        <hr>

                        <fieldset >

                            <legend><b>Date of Birth</b></legend>

                            <input type="date" name="dob" id="Dob" min="1920-01-01" max="2005-12-31"><b> </b>


                        </fieldset>
                        <hr>

                        <input type="submit" name="submit" value="Register" id="Submit" onclick="registration()">
                        <a id="reset" href="addUser.php"><input type="button" name="reset" value="Reset"></a>
                    
                    </fieldset>
                     <br><br><br><br><br>
                       
                  <h1 id="response"></h1>
                </td>
                
                
            </tr>

            <?php
 include('adminFooter.php');
 ?>